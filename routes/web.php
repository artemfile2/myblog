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
    Route::get('/add', 'DBController@add')
           ->name('site.db.add')
           ->middleware('auth');
    Route::post('/add', 'DBController@addPost')
           ->name('site.db.addPost');

    /*
     * редактировать запись в блоге
     */
    Route::get('/edit/{id?}', 'DBController@edit');

    /*
     * удалять запись
     */
    Route::get('/delete/{id?}', 'DBController@delete')
           ->name('site.db.delete');
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
/*
 * роут страницы - обо мне-контакты
 */
Route::get('/about', 'MainController@about')
       ->name('site.main.about');

/*-----------------------------------------*/
/* роуты для регистрации, аутентификации и выхода из сайта */
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



/*
 * админка
 */
Route::get('/admin', 'Admin'.DIRECTORY_SEPARATOR.'AdminController@admin')
    ->name('admin.login');
Route::post('/admin', 'Admin'.DIRECTORY_SEPARATOR.'AdminController@adminPost')
    ->name('admin.loginPost');

Route::get('/admin/tabledata', 'Admin'.DIRECTORY_SEPARATOR.'AdminController@tableData')
    ->name('admin.tableData');
