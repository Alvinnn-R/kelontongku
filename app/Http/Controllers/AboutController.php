<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function company(){
        return view('about');
    }
}
