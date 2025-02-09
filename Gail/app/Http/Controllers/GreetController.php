<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function show()
    {
        return view('greet'); // This loads resources/views/greet.blade.php
    }
}