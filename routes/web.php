<?php

Route::get('/', function () {
    return view('home');
})->name('page-home');

Route::get('/about', function () {
    return view('about');
})->name('page-about');

Route::get('/contact', function () {
    return view('contact');
})->name('page-contact');

Route::get('/contact/all', 'ContactController@allData' )->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');
