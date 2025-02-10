<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Bonjour Laravel';
});

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);