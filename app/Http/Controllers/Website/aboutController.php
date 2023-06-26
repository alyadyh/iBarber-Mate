<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        return view('display.about.index');
    }
}
