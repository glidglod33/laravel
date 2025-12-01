<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact');
});



Route::get('/home', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dani', function () {
    return view('dani');
});

