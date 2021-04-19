<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/thankyou', function () {
    return view('/thankyou');
});
Route::get('test-email', 'MailController@sendEmail')->name('test-email');
Route::get('/', 'App\Http\Controllers\ToSend@contact');
Route::post('/', 'App\Http\Controllers\ToSend@emailfail');
Route::post('/', 'App\Http\Controllers\ToSend@indexSubmit')->name('index.submit');
Route::get('users/export/', 'ToSend@indexSubmit');
Route::view('/', 'index');
