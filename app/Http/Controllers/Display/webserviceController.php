<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use App\Models\Slot;
use App\Models\Service;
use App\Models\Hairstyle;

use Illuminate\Http\Request;

class webserviceController extends Controller
{
    public function index()
    {
        $slots = Slot::all();
        $services = Service::all();
        $hairstyles = Hairstyle::all();
        $data_service = Service::all();
        
        return view('display.serves.index', compact('slots', 'services', 'hairstyles'))->with('services', $data_service);
    }
}
