<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

Route::get('/projects/uiux', function () {
    return view('projects.uiux');
});

Route::get('/projects/laravel', function () {
    return view('projects.laravel');
});

Route::get('/projects/android', function () {
    return view('projects.android');
});