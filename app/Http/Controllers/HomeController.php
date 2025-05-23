<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return inertia::render('Frontend/Home');
    }


    public function about()
    {
        return inertia::render('About', [
            'title' => 'About',
            'description' => 'Welcome to the home page.',
        ]);
    }
}
