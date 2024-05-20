<?php

namespace App\Http\Controllers;

use App\Models\Accommodations;
use Illuminate\Http\Request;

class AccommodationsController extends Controller
{
    public function accommodationsView()
    {
        return view('screens.accommodations');
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
        ]);

        Accommodations::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Accommodation created successfully.');
    }


}
