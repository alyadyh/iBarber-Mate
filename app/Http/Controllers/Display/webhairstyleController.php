<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slot;
use App\Models\Service;
use App\Models\Hairstyle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class webhairstyleController extends Controller
{
    public function index()
    {
        $slots = Slot::all();
        $services = Service::all();
        $data_hairstyles = Hairstyle::with('category')->get();
        
        return view('display.hairstyles.index', compact('slots', 'services'))->with('hairstyles', $data_hairstyles);
    }
    public function show(string $id)
    {
        $slots = Slot::all();
        $services = Service::all();

        if ($id == 0) {
            $hairstyle = Hairstyle::with('category')->get();
        } else {
            $hairstyle = Hairstyle::with('category')->where('category_id', $id)->get();
        }
        
        return view('display.hairstyles.show', compact('slots', 'services'))->with('hairstyles', $hairstyle);
    }
}
