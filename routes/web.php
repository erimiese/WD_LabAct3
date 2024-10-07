<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;

Route::get('/check-age', function () {
    return view('Components.check-age');
})->name('check-age');

Route::post('/check-age', [AgeController::class, 'storeAge'])->name('store-age'); // Store age route

Route::get('/restricted', function () {
    return view('Components.restricted');
})->middleware('check.age:18')->name('restricted');

Route::get('/access-denied', function () {
    return view('Components.access-denied');
})->name('access-denied');

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
