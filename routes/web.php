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

Route::get('/', function () {
    return view('pages/accueil');
})
    ->name('accueil');

Route::get('bracelets', 'ArticleController@bracelets')
    ->name('bracelets');

Route::get('colliers', 'ArticleController@colliers')
    ->name('colliers');

Route::get('pierres', 'ArticleController@pierres')
    ->name('pierres');

Route::get('boucles', 'ArticleController@boucles')
    ->name('boucles');

Route::get('clefs', 'ArticleController@clefs')
    ->name('clefs');

Route::get('contacts', 'ContactController@index')
    ->name('contacts');

Route::post('mail', 'ContactController@sendMail')
    ->name('mail');

Route::resource('articles', 'ArticleController', ['except' => 'index']);

Route::resource('livre', 'CommentController', ['except' => ['show', 'create', 'edit']]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');