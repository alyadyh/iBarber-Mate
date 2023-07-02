<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Slot;
use App\Models\Service;
use App\Models\Hairstyle;
use Illuminate\Support\Facades\DB;

class webAppointmentController extends Controller
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
        $appointments = Appointment::all();

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slots = Slot::all();
        $services = Service::all();
        $hairstyles = Hairstyle::all();
        return view('admin.appointments.create', compact('slots', 'services', 'hairstyles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_num' => 'required',
            'point_date' => 'required',
            // 'slot_id' => 'required',
            'service_id' => 'required',
            'hairstyle_id' => 'nullable',
        ]);

        $newData = new Appointment();
        $newData->first_name = $request->input('first_name');
        $newData->last_name = $request->input('last_name');
        $newData->phone_num = $request->input('phone_num');
        $newData->point_date = $request->input('point_date');
        // $newData->slot_id = $request->slot_id;
        $newData->service_id = $request->input('service_id');
        $newData->hairstyle_id = $request->input('hairstyle_id');

        $newData->save();

        return redirect()->back()->with('message', 'Succesfully added a appointment!');
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
