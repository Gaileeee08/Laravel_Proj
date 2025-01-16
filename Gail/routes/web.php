<?php
use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Welcome');
});

Route::get('/', [GreetController::class,'show']);