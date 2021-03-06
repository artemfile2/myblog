<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /*
     *    
     */
    public function login()
    {
        return view('layouts.logins')
            ->withTitle('Вход на сайт');
    }

    public function loginPost(Request $request){

        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('pass'),
        ], true);

        if ($authResult) {
            return redirect()
                ->route('site.main.index');
        }
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
            'name' => $request->input('user'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('pass')),
        ]);

        return redirect()
               ->route('site.main.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
               ->route('site.main.index');

    }

}
