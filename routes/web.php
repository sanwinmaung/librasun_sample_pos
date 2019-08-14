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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('kill-session', 'HomeController@killSession');
Route::get('shift/{id}', 'HomeController@shift')->name('shift');
Route::get('cashier/{id}', 'HomeController@cashier')->name('cashier');

Route::resource('pos', 'PosController');
