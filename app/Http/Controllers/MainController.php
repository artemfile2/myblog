<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   //

    public function index()
    {
        return view('layouts.primary')
            ->withTitle('Главная');
    }

    public function articles()
    {
        return view('layouts.secondary')
            ->withTitle('Статьи');
    }

    public function news()
    {
        return view('layouts.news')
            ->withTitle('Новости сайта');
    }

    public function about()
    {
        return view('layouts.contacts')
            ->withTitle('Контакты');
    }

    public function login()
    {
        return view('layouts.logins')
            ->withTitle('Вход на сайт');
    }

    public function register()
    {
        return view('layouts.registration')
            ->withTitle('Регистрация на сайте');
    }
}
