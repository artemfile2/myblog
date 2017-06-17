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

        debug($request->all());

    }

    public function register()
    {
        return view('layouts.registration')
            ->withTitle('Регистрация на сайте');
    }

    public function registerPost(Request $request){

        debug($request->all());

    }
}
