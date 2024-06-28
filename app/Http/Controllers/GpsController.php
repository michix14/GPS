<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gps;

class GpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gpsData = gps::all();
        return view('gps.index', compact('gpsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'placa' => 'nullable|string',
            'suben' => 'nullable|integer',
            'bajan' => 'nullable|integer',
            'linea' => 'nullable|string',
        ]);

        gps::create($validated);

        return redirect()->route('gps.create')->with('success', 'GPS data stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gps = gps::findOrFail($id);
        return view('gps.show', compact('gps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gps = gps::findOrFail($id);
        return view('gps.edit', compact('gps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'placa' => 'nullable|string',
            'suben' => 'nullable|integer',
            'bajan' => 'nullable|integer',
            'linea' => 'nullable|string',
        ]);

        $gps = gps::findOrFail($id);
        $gps->update($validated);

        return redirect()->route('gps.index')->with('success', 'GPS data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gps = gps::findOrFail($id);
        $gps->delete();

        return redirect()->route('gps.index')->with('success', 'GPS data deleted successfully');
    }
}
