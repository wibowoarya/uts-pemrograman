<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index ()
    {
        return view('profile.home');
    }
    public function profile()
    {
        return view('profile.profile');
    }
    public function about()
    {
        return view('about');
    }
    //
}
