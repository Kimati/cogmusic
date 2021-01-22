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

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/admin_dash', function () {
    return view('admin-dashboard');
});
Route::resource('album', 'AlbumsController');

Route::get('/full-album', ['uses'=>'AlbumsController@display']);
Route::resource('comments', 'FansController');
Route::post('comment_store', ['uses'=>'FansController@store']);

Route::get('/support', function () {
    return view('support-cog');
});

Route::get('/send-money', function () {
    return view('sendmoney');
});




