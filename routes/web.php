<?php

// Voter routes.
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
