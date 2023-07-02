<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use App\Models\Slot;
use App\Models\Service;
use App\Models\Hairstyle;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        $slots = Slot::all();
        $services = Service::all();
        $hairstyles = Hairstyle::all();
        return view('display.about.index', compact('slots', 'services', 'hairstyles'));
    }
}
