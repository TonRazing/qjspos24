<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('app');
})->where('any','.*');

// Route::get('/test', function () {
//     return view('app');
// });
