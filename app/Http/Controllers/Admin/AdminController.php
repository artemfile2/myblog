<?php

namespace App\Http\Controllers\Admin;

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

    public function adminPost()
    {
        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('pass'),
        ], true);

        if ($authResult) {
            return redirect()
                ->route('site.main.index');
        }
    }


}
