<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = ['Gojo', 'Satoru', 'Laravel'];
        return view('users', compact('users'));
    }
}