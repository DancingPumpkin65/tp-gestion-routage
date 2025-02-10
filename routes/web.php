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

Route::get('/test', [App\Http\Controllers\TestController::class, 'show']);

Route::get('/view', function () {
    return view('acceuil');
});

Route::get('/view', function () {
    return view('acceuil');
})->name('accueil');

Route::get('/test', function () {
    return view('test');
});

Route::get('/home/{name}', function ($name) {
    return "Bonjour $name";
});

Route::get('/home/{name}/{age}', function ($name, $age) {
    return "bonsoir  $name, votre age est $age";
});

Route::get('/home/{name}/{age?}', function ($name, $age=null) {
    return !$age ? "name: $name" : "name: $name, age: $age";
});