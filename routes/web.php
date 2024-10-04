<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Components.home');
})->name('home');

Route::get('/about', function () {
    return view('Components.about');
})->name('about');

Route::get('/contact', function () {
    return view('Components.contact');
})->name('contact');

Route::get('/recipes', function () {
    return view('Components.recipes');
})->name('recipes');
