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

Route::resource('article', 'ArticleController', ['except' => 'index']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');