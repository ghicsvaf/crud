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

Route::get('/test', function () {
    return view('welcome');
});

Route::resource('/student','StudentController');


Route::get('database',function(){
    Schema::create('producttype',function($table){
        $table->increments('id');
        $table->string('name',200);
    });
    echo "saved";
});

Route::get('linktables',function(){
    Schema::create('product',function($table){
        $table->increments('id');
        $table->string('name');
        $table->float('price');
        $table->integer('number')->default(0);

        $table->integer('id_producttype')->unsigned();
        $table->foreign('id_producttype')->references('id')->on('producttype');
        

    });
});