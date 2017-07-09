<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function admin()
    {
        Auth::logout();

        return view('admin.logAdmin', [
            'title' => 'Админка'
        ]);
    }

    public function adminPost(Request $request)
    {
        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('pass'),
        ], true);

        if ($authResult) {
            return redirect()
                ->route('admin.tableData');
        }
    }

    public function tableData()
    {
        $articles = Article::leftjoin('users', 'articles.user_id', 'users.id')
                    ->withTrashed()
                    ->get();

        return view('admin.parts.contentAdmin', [
            'title' => 'Таблица статей',
            'articles' => $articles,
        ]);
    }

}
