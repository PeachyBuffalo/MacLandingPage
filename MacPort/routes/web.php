<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/portfolio', function() {
    return view('portfolio');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/real-estate', function() {
    return view('real-estate');
});

Route::get('/front-end', function() {
    return view('front-end');
});

Route::get('/back-end', function() {
    return view('back-end');
});

Route::get('/prototyping', function() {
    return view('prototyping');
});
