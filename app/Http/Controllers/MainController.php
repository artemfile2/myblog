<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
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

        if (!$article)
        {
            abort(404);
        }

        $comments = Comment::leftjoin('users',
                    'comments.user_id',
                    'users.id')
                ->select('comments.comment',
                    'comments.created_at',
                    'users.created_at AS created_user',
                    'users.name')
                ->where('article_id', $idArticle)
                ->get();

        dump($comments);

        foreach ($comments as $comm)
        {
            dump($comm->comment .'-'.$comm->name .'-'. $comm->created_at);
        }

        return view('layouts.article', [
            'title' => 'Статья '. $article->title,
            'article' => $article,
            'comments' => $comments,
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
