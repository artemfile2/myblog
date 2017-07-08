<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use Barryvdh\Debugbar\Twig\Extension\Dump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{   //

    public function index()
    {
        $articles = Article::all();
        $news = News::all();

        return view('layouts.primary')
            ->withTitle('Главная')
            ->withArticles($articles)
            ->withNews($news);
    }

    public function articles()
    {
        $articles = Article::all()
                    ->sortByDesc('created_at');

        return view('layouts.secondary')
            ->withTitle('Статьи')
            ->withArticles($articles);
    }

    public function article($idArticle)
    {
        $article = Article::leftjoin('users', 'articles.user_id', 'users.id')
            ->first(['title', 'text', 'articles.created_at', 'name'])
            ->findOrFail($idArticle);

        return view('layouts.article', [
            'title' => 'Статья '. $article->title,
            'article' => $article,
        ]);
    }

    public function news()
    {
        $news = News::all();

        return view('layouts.news')
            ->withTitle('Новости сайта')
            ->withNews($news);
    }

    public function about()
    {
        return view('layouts.contacts')
            ->withTitle('Контакты');
    }

}
