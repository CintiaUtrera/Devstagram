<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/crear-cuenta', function () {
    return view('auth.register');
});
