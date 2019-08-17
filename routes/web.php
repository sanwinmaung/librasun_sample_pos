<?php

Route::get('test/{slug}', 'HomeController@testing');
// Route::get('/', function () {
//     return view('welcome');
//});
Route::get('ajax', function () {
    return view('ajax');
});
Route::get('/', 'HomeController@index');
Route::get('kill-session', 'HomeController@killSession')->name('kill.session');
Route::get('shift/{id}', 'HomeController@shift')->name('shift');
Route::get('cashier/{id}', 'HomeController@cashier')->name('cashier');

Route::resource('pos', 'PosController');
Route::get('products-data', 'ProductController@productsData')->name('products.data');

Route::get('cart-items-ajax', 'SellTempController@productsDataAjax');
Route::get('add-temp-item', 'SellTempController@store');
Route::get('remove-temp-item', 'SellTempController@destroy');
Route::get('decrease-temp-item', 'SellTempController@decreaseItem');
Route::get('increase-temp-item', 'SellTempController@increaseItem');
Route::get('temp-item-cost-info', 'SellTempController@costItemInfo');

Route::get('add-temp-set-item', 'SellTempController@storeSet');

Route::get('cart-items-proceed', 'SellController@store');
Route::get('download-vocher/{id}', 'SellController@downloadVocher')->name('download.vocher');
Route::post('proceed-selling', 'SellController@proceedVocher')->name('proceed.selling');
// Route::get('show-proceed/{id}', 'SellController@vocher');
Route::post('search-vocher', 'SellController@searchVocher')->name('search.vocher');

Route::get('search-vocher', function () {
    return view('search-vocher');
});
