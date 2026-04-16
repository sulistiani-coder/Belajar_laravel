<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Hello, welcome to the Home page! This is where you can find the latest updates and news about our website.";
    }
}
