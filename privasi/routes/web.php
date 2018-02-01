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

Route::get('/', function() {
    
    $string = file_get_contents("http://swapi.co/api");
    $json_a=json_decode($string,true);

    return view('index',['json'=>$json_a]);
});

Route::get('films','swcontroller@category_films');

Route::get('{key}','swcontroller@category');