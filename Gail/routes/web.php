<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Route 1: Simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route 2: Call GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'show']);

// Route 3: Task Controller
Route::resource('tasks', TaskController::class);

//Tailwindcss
Route::get('/', function(){
    return view('welcome');
});