<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check', function(){
    // dd("Hello");
    return view('index');
});

Route::get('/test', function(){
    return view('user.index');
});
