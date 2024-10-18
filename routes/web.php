<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;

Route::get('/check-age', function () {
    return view('Components.check-age');
})->name('check-age');

Route::post('/check-age', [AgeController::class, 'storeAge'])->name('store-age');

// Age restricted route for 18+
Route::get('/restricted', function () {
    return view('Components.restricted');
})->middleware('check.age:18')->name('restricted');

// Age restricted route for 21+
Route::get('/restricted-21', function () {
    return view('Components.restricted-21');
})->middleware('check.age:21')->name('restricted-21');

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



