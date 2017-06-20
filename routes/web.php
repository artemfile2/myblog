<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'MainController@index')
       ->name('site.main.index');

Route::group(['prefix'=>'articles'], function ()
{
    Route::get('/', 'MainController@articles')
           ->name('site.main.articles');

    /*
    * добавлять запись в блог*/
    Route::get('/add/{id?}', 'MainController@add');

    /*
    * редактировать запись в блоге*/
    Route::get('/edit/{id?}', 'MainController@edit');

    /*
     * удалять запись*/
    Route::get('/delete/{id?}', 'MainController@delete');
});

Route::group(['prefix'=>'news'], function (){

    Route::get('/', 'MainController@news')
           ->name('site.main.news');

});

Route::get('/about', 'MainController@about')
       ->name('site.main.about');

/*-----------------------------------------*/

Route::get('/login', 'AuthController@login')
       ->name('site.auth.login');
Route::post('/login', 'AuthController@loginPost')
       ->name('site.auth.loginPost');

Route::get('/register', 'AuthController@register')
       ->name('site.auth.register');
Route::post('/register', 'AuthController@registerPost')
       ->name('site.auth.registerPost');

Route::get('/logout', 'AuthController@logout')
    ->name('site.auth.logout');


Route::get('/admin', 'DBController@getUsers')
    ->name('site.DB.getUsers');

