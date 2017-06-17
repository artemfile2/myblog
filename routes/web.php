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

/*Route::get('/', function () {
    return view('layouts.base');
});*/

Route::get('/', 'MainController@index')
    ->name('site.index');

Route::group(['prefix'=>'articles'], function ()
{
    Route::get('/', 'MainController@articles');

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

    Route::get('/', 'MainController@news');

});

/*Route::get('/about', function () {
    return view('layots.contacts', [
        'title'=>' About'
    ]);
});*/

Route::get('/about', 'MainController@about');

Route::get('/login', 'MainController@login');

Route::get('/register', 'MainController@register');


Route::get('/admin.admin', function () {
    return view('admin');
});