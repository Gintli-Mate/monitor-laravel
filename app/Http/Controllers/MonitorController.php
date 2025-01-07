<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index()
    {
        $monitors = Monitor::all();
        return view('monitors.index', compact('monitors'));
    }

    public function create()
    {
        return view('monitors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'screen_size' => 'required|numeric',
            'resolution' => 'required',
            'refresh_rate' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required',
            'availability' => 'required|boolean',
        ]);

        Monitor::create($request->all());
        return redirect()->route('monitors.index');
    }

    public function edit(Monitor $monitor)
    {
        return view('monitors.edit', compact('monitor'));
    }

    public function update(Request $request, Monitor $monitor)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'screen_size' => 'required|numeric',
            'resolution' => 'required',
            'refresh_rate' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required',
            'availability' => 'required|boolean',
        ]);

        $monitor->update($request->all());
        return redirect()->route('monitors.index');
    }

    public function destroy(Monitor $monitor)
    {
        $monitor->delete();
        return redirect()->route('monitors.index');
    }
}
