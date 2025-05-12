<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return inertia::render('Home', [
            'title' => 'Home',
            'description' => 'Welcome to the home page.',
        ]);
    }
}
