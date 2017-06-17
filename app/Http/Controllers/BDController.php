<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDController extends Controller
{
    //

    public function getUsers()
    {
        $user = DB::table('users')
            ->count();

        dump($user);
    }

}
