<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function home()
    {
        return view('index');
    }
}
