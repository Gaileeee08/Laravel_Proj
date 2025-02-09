<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route 1: Simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route 2: Call GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'show']);