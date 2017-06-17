<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    public function register()
    {
        return view('layouts.registration')
            ->withTitle('Регистрация на сайте');
    }

    public function registerPost(Request $request){
        echo 'zxc';
        debug($request->all());

        $this->validate($request, [
            'user' => 'required|max:10',
            'email' => 'required|email|unique:users|max:20',
            'pass' => 'required|max:11|min:3',
            'pass2' => 'required|same:pass',
        ]);
    }
}
