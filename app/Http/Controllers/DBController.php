<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //

    public function getUsers()
    {
        $count = DB::table('users')
                 ->count();

        $user = DB::table('users')
            ->where('user', 'like','%ет%')
            ->get();


       /* dump($user);*/

        foreach ($user as $value)
        {
            dump($value->user);
        }

        return "Количество записей в таблице $count";
    }

}
