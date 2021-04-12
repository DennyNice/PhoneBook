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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", function () {
    $test = "Hi";
    // при помощи метода compact мы можем отображать данные других переменных (test использовать без знака доллара) во views
    return view('home', compact('test'));
});

Route::get("/about", function (){
    return "About Page";
});
