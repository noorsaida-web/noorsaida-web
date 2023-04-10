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
    return view('Home');
});

Route::get('/About', function () {
    return view('About',[
        "name"=>"Noor Saida",
        "email"=>"Nrsaidaa@gmail.com",
        "image"=>"BaeSuzy.jpg"
    ]);
});

Route::get('/Blog', function () {
    return view('posts');
});

