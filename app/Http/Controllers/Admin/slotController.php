<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Service;
use App\Models\Slot;
use App\Enums\SlotLocation;
use App\Enums\SlotStatus;
use Illuminate\Http\Request;

class slotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slot::with('service')->get();
        return view('admin.slots.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.slots.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'location' => 'required',
            'status' => 'required',
        ]);

        $newData = new Slot();
        $newData->service_id = $request->service_id;
        $newData->location = $request->location;
        $newData->status = $request->status;

        $newData->save();

        return redirect()->route('admin.slots.index')->with('message', 'Succesfully added a slot!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
