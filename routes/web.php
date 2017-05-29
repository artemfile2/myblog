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
    Route::get('/', 'PagesController@articles');

    /*
    * добавлять запись в блог*/
    Route::get('/add/{id?}', 'PagesController@add');

    /*
    * редактировать запись в блоге*/
    Route::get('/edit/{id?}', 'PagesController@edit');

    /*
     * удалять запись*/
    Route::get('/delete/{id?}', 'PagesController@delete');
});

Route::group(['prefix'=>'news'], function (){

    Route::get('/', function () {
        return view('pages.news', [
            'title'=>' News'
        ]);
    });

});

Route::get('/about', function () {
    return view('pages.about', [
        'title'=>' About'
    ]);
});

Route::get('/admin.admin', function () {
    return view('admin');
});