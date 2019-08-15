<?php
Route::get('test/{slug}', 'HomeController@testing');
// Route::get('/', function () {
//     return view('welcome');
//});
Route::get('ajax', function () {
    return view('ajax');
});
Route::get('cart-items-ajax', 'SellTempController@productsDataAjax');
Route::get('add-temp-item', 'SellTempController@store');
Route::get('remove-temp-item', 'SellTempController@destroy');
Route::get('decrease-temp-item', 'SellTempController@decreaseItem');
Route::get('increase-temp-item', 'SellTempController@increaseItem');

Route::get('/', 'HomeController@index');
Route::get('kill-session', 'HomeController@killSession');
Route::get('shift/{id}', 'HomeController@shift')->name('shift');
Route::get('cashier/{id}', 'HomeController@cashier')->name('cashier');

Route::resource('pos', 'PosController');
Route::get('products-data', 'ProductController@productsData')->name('products.data');
// Route::get('cart-items-data', 'SellTempController@getItems')->name('cart.item.data');
