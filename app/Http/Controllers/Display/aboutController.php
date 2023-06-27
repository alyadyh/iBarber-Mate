<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        return view('display.about.index');
    }
}
