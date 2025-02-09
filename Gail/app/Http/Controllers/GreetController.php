<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GreetController extends Controller
{
    public function show()
    {
        return view('user'); // This loads resources/views/greet.blade.php
    }
}