<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Api\Auth\LoginController@login')
    ->name('api.login');

Route::post('refresh', 'Api\Auth\LoginController@refresh')
    ->name('api.refresh');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Api\Auth\LoginController@logout')
        ->name('api.logout');

    Route::get('bracelets', 'Api\ArticleController@bracelets')
        ->name('api.bracelets');

    Route::get('colliers', 'Api\ArticleController@colliers')
        ->name('api.colliers');

    Route::get('pierres', 'Api\ArticleController@pierres')
        ->name('api.pierres');

    Route::resource('articles', 'Api\ArticleController', [
        'except' => 'index',
        'as' => 'api'
    ]);

//    Route::middleware('scope:admin')->group(function () {
//        Route::GET('test', function (){
//            dd('ok');
//        });
//    });
});