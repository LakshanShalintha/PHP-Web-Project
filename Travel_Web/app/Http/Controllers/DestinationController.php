<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destinationView()
    {
        return view('screens.destination');
    }

    //admin controller
    public function addDestinationView(){
        return view('admin.addDestinations');
    }

    public function adminDestinationView()
    {
        $destinations = Destination::all();
        return view('admin.adminDestination', compact('destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Destination::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('adminDestination')->with('success', 'Destination created successfully.');
    }



}
