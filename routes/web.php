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
Route::get('/asiap', function () {
    echo "lo gak siap";
});
Route::get('/genyo', function () {
    echo "hmmmmm";
});
Route::get('/lapy', function () {
    return "yo ngene iki";
});
Route::get('/buah', function () {
    return view('gedang');
});
Route::get('/kewan', 'KinjengController@index');

Route::get('/brokoli', 'KinjengController@danur');
Route::get('/brokoli/dewa', 'KinjengController@winda');

// Route::get('/Customer','CustomerController@index');

// Route::get('/Customer/create','CustomerController@create');//create adalah functionnya

// Route::get('/Supplier','SupplierController@index');

//untuk store dati customer
// Route::get('/Customer/store'.'CustomerController@store');

Route::resource('Customer','CustomerController');
Route::resource('Supplier','SupplierController');
Route::resource('Employee','EmployeeController');
