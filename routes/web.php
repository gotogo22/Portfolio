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

use App\Http\Controllers\CustemerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'user', 'middleware'=> 'auth'], function (){
    Route::get('index', 'CustemerController@index')->name('user.index');
    Route::get('create', 'CustemerController@create')->name('user.create');
});


//Rest
// Route::resource('custemers', 'CustemerController');

Route::get('/home', 'HomeController@index')->name('home');
