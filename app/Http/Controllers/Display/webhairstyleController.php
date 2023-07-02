<?php

namespace App\Http\Controllers\Display;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hairstyle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class webhairstyleController extends Controller
{
    public function index()
    {
        $data_hairstyles = Hairstyle::with('category')->get();
        
        return view('display.hairstyles.index')->with('hairstyles', $data_hairstyles);
    }
    public function show(string $id)
    {
        if ($id == 0) {
            $hairstyle = Hairstyle::with('category')->get();
        } else {
            $hairstyle = Hairstyle::with('category')->where('category_id', $id)->get();
        }
        
        return view('display.hairstyles.show')->with('hairstyles', $hairstyle);
    }
}
