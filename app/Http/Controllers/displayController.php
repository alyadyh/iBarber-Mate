<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayController extends Controller
{
    public function index()
    {
        return view('display.index');
    }
}
