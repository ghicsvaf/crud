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
Route::get('model/save', function(){
    $user = new App\User();
    $user->name = "tung";
    $user->email = "ghicsvaf@gmail.com";
    $user->password =bcrypt('123456');

    $user->save();
});

Route::get('dangnhap' , function(){
    return view('loginform.dangnhap');
});

Route::post('status', 'AuthController@login')->name('status');

Route::get('logout','AuthController@logout');

Route::resource('/users','AuthController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
