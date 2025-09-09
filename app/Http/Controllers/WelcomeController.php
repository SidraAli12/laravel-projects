<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome'); // points to resources/views/welcome.blade.php
    }
}