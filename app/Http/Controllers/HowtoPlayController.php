<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtoPlayController extends Controller
{
    //
    public function index()
    {
        return view('how-to-play');
    }
}
