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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/devis', ['as' => 'devis', 'uses' => 'DevisController@index']);
    Route::post('/store-devis', ['as' => 'store_devis', 'uses' => 'DevisController@store']);
    Route::get('/realisations', ['as' => 'realisations', 'uses' => 'ProjetController@index']);
});
