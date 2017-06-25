<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DBController extends Controller
{

    public function add()
    {
        return view('layouts.adding', [
            'title' => 'Добавить новую статью'
        ]);
    }

    public function addPost(Request $request)
    {
        $article = new Article;

        $article->fill([
            'title' => $request->title,
            'text' => $request->text,
            'idUser' => Auth::user()->id,
        ])->save();

        return redirect()
               ->route('site.main.articles');
    }


    public function delete($idArticle)
    {
        $article = Article::findOrFail($idArticle)
                   ->delete();

        return redirect()
            ->route('site.main.articles');
    }
}
