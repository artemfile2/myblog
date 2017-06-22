<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        $articles = Article::all();

        return view('layouts.secondary')
            ->withTitle('Статьи')
            ->withArticles($articles);
    }

    public function article($idArticle)
    {
        $article = Article::find($idArticle);

        return view('layouts.article')
            ->withTitle('Статья')
            ->withArticle($article);
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

}
