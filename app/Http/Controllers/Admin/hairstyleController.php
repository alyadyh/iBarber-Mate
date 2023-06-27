<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\HairstyleStoreRequest;
use App\Models\Hairstyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class hairstyleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hairstyles = Hairstyle::all();
        return view('admin.hairstyles.index', compact('hairstyles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hairstyles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2408',
        ]);

        $imagePath = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/hairstyles', $imagePath);

        $newData = new Hairstyle();
        $newData->name = $request->name;
        $newData->description = $request->description;
        $newData->image = $imagePath;
        $newData->save();

        return redirect()->route('admin.hairstyles.index')->with('message', 'Succesfully added a hairstyle!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hairstyle = Hairstyle::where('id', $id)->first();

        return view('admin.hairstyles.edit')->with('hairstyle', $hairstyle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Hairstyle::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2408',
        ]);

        $image = $data->image;
        if($request->hasFile('image')) {
            Storage::delete($data->image);
            $imagePath = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/hairstyles', $imagePath);
        }
        
        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.hairstyles.index')->with('message', 'Succesfully updated a hairstyle!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Hairstyle::findOrFail($id);
        
        Storage::delete($data->image);

        $data->delete();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Hairstyle deleted successfully'
        ]);

        return redirect()->route('admin.hairstyles.index');
    }
}
