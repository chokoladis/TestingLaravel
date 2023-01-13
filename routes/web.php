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

Route::get('/contact/all/{id}',
    'ContactController@messageOne'
)->name('contact-message-one');

Route::get('/contact/all/{id}/update',
    'ContactController@messageUpdate'
)->name('contact-message-update');

Route::post('/contact/all/{id}/update',
    'ContactController@messageUpdateSubmit'
)->name('contact-message-update-submit');

Route::get('/contact/all/{id}/delete',
    'ContactController@messageDelete'
)->name('contact-message-delete');

Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');
