<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/', [GreetController::class,'show']);