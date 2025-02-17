<?php

use Illuminate\Support\Facades\Route;


//page d'accueil
Route::get('/', function () {
    return view('home');
});


//page de contact
Route::get('/contact', function () {
    return view('contact');
});

//page à propos
Route::get('/about', function () {
    return view('about');
});
