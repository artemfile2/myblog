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

/*
 * работа со статьями
 */
Route::group(['prefix'=>'articles'], function ()
{
    /*
     * получаю список всех статей
     */
    Route::get('/', 'MainController@articles')
           ->name('site.main.articles');

    /*
     * получаю выбранную статью
     */
    Route::get('/article/{idArticle?}', 'MainController@article')
           ->name('site.main.article');

    /*
     * добавлять запись в блог
     */
    Route::get('/add/{id?}', 'MainController@add');

    /*
     * редактировать запись в блоге
     */
    Route::get('/edit/{id?}', 'MainController@edit');

    /*
     * удалять запись
     */
    Route::get('/delete/{id?}', 'MainController@delete');
});

/*
 * работа с новостями
 */
Route::group(['prefix'=>'news'], function (){

    Route::get('/', 'MainController@news')
           ->name('site.main.news');

    /*Route::get('/', 'MainController@news')
        ->name('site.main.news');*/

});

/******************************************/
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



/* tests*/
Route::get('/admin', 'DBController@getUsers')
    ->name('site.DB.getUsers');

