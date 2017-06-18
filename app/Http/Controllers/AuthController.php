<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('layouts.logins')
            ->withTitle('Вход на сайт');
    }

    public function loginPost(Request $request){
        dump($request->all());
        debug($request->all());

        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
        ]);

        dump($authResult);
    }

    public function register()
    {
        return view('layouts.registration')
            ->withTitle('Регистрация на сайте');
    }

    public function registerPost(Request $request){
        debug($request->all());

        $this->validate($request, [
            'user' => 'required|max:10',
            'email' => 'required|email|unique:users|max:20',
            'pass' => 'required|max:11|min:3',
            'pass2' => 'required|same:pass',
        ]);

        DB::table('users')->insert([
            'user' => $request->input('user'),
            'email' => $request->input('email'),
            'pass' => bcrypt($request->input('pass')),
            'type' => 1,
            //'datareg' => Carbon::createFromTimestamp(time())->format('Y-d-m H:i:s'),
        ]);

        $userName = $request->input('user');
        return redirect()
               ->route('site.main.index')
               ->with('userName', $userName.' qqq');
    }
}
