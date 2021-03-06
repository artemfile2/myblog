<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DBController extends Controller
{

    public function add()
    {
//        if (Gate::allows('add-post')) {
            return view('layouts.adding', [
                'title' => 'Добавить новую статью'
            ]);
//        }

//        abort(403);
    }

    public function addPost(Request $request)
    {
        $requestAll = $request->all();
        $requestAll['user_id'] = Auth::user()->id;
        Article::create($requestAll);

        return redirect()
               ->route('site.main.articles');
    }


    public function delete($idArticle)
    {
        Article::findOrFail($idArticle)
                   ->delete();

        return redirect()
            ->route('site.main.articles');
    }
}
