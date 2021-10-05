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
    return view('home');
});

Route::get('/about', function () {
    return view('about',[
        "name"=> "Alfara kristiani",
        "email"=>"kristianifara@gmail.com",
        "image"=>"fara.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('post');
});

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/dashboard', function () {
    return view('fafa.dashboard');
}); 

Route::get('/galery', function () {
    return view('fafa.galery');
}); 
Route::get('/table', function () {
    return view('fafa.table');
}); 
Route::get('/chart', function () {
    return view('fafa.chart');
}); 
Route::get('/calendar', function () {
    return view('fafa.calendar');
}); 
Route::get('/myprofile', function () {
    return view('fafa.myprofile');
}); 
Route::get('/home', function () {
    return view('home');
}); 