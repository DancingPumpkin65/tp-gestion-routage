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

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});

Route::get('/login', function () {
    return "Page de connexion (à implémenter)";
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
