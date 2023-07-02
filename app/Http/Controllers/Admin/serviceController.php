<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class serviceController extends Controller
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
        $data = Service::all();
        return view('admin.services.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
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
            'price' => 'required',
        ]);

        $imagePath = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/services', $imagePath);

        $newData = new Service();
        $newData->name = $request->name;
        $newData->description = $request->description;
        $newData->image = $imagePath;
        $newData->price = $request->price;

        $newData->save();

        return redirect()->route('admin.services.index')->with('success', ' Succesfully added a service.');
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
        $service = Service::where('id', $id)->first();

        return view('admin.services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Service::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2408',
            'price' => 'required',
        ]);

        $image = $data->image;
        if($request->hasFile('image')) {
            Storage::delete($data->image);
            $imagePath = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/services', $imagePath);
        }
        
        $data->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.services.index')->with('success', ' Succesfully updated a service.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Service::findOrFail($id);
        
        Storage::delete($data->image);

        $data->delete();

        session()->flash('flash_notification', [
            'level' => 'success',
            'message' => 'Service deleted successfully'
        ]);

        return redirect()->route('admin.services.index')->with('danger', ' Service deleted successfully.');
    }
}
