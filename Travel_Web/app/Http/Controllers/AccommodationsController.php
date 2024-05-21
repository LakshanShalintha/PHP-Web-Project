<?php

namespace App\Http\Controllers;

use App\Models\Accommodations;
use Illuminate\Http\Request;

class AccommodationsController extends Controller
{
    public function accommodationsView()
    {
        $accommodations = Accommodations::all();
        return view('screens.accommodations', compact('accommodations'));
    }


    //admin Controllers
    public function addAccommodationsView()
    {
        return view('admin.addAccommodations');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $fileName);

            // Save the data including the file path
            Accommodations::create([
                'name' => $request->name,
                'location' => $request->location,
                'price' => $request->price,
                'image' => $fileName,
            ]);

            return redirect()->route('dashboard')
                ->with('success', 'Accommodation created successfully.');
        }

        return back()->withErrors(['image' => 'File upload failed']);
    }
}
