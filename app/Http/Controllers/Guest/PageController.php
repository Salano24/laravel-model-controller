<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}    
