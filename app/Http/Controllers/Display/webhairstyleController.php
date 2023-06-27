<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class webhairstyleController extends Controller
{
    public function index()
    {
        return view('display.hairstyles.index');
    }
}
