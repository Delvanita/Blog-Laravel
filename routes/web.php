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

Route::get('/test', function () {
    return view('test');
});

Route::get('/Home', 'HomeController@Home');

// Route::get('/sapa', 'AuthController@sapa');
// Route::post('/sapa', 'AuthController@sapa_post');

Route::get('/Register', 'AuthController@Register');

Route::get('/SelamatDatang', 'AuthController@SelamatDatang');
Route::post('/SelamatDatang', 'AuthController@SelamatDatang_post');