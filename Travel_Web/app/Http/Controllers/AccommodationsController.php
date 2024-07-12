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

    public function adminAccommodationsView()
    {
        $accommodations = Accommodations::all();
        return view('admin.adminAccommodations', compact('accommodations'));
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
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);

            // Save the data including the file path
            Accommodations::create([
                'name' => $request->name,
                'location' => $request->location,
                'price' => $request->price,
                'image' => $fileName,
            ]);

            return redirect()->route('addAccommodations')->with('success', 'Accommodation created successfully.');

        }

        return back()->withErrors(['image' => 'File upload failed']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $accommodation = Accommodations::find($id);
        $accommodation->name = $request->input('name');
        $accommodation->location = $request->input('location');
        $accommodation->price = $request->input('price');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $filename);
            $accommodation->image = $filename;
        }

        $accommodation->save();
        return redirect()->route('adminAccommodationsView')->with('success', 'Accommodation updated successfully');
    }

    public function destroy($id)
    {
        $accommodation = Accommodations::findOrFail($id);

        // Delete the image file
        $imagePath = public_path('image') . '/' . $accommodation->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the accommodation
        $accommodation->delete();

        return redirect()->route('adminAccommodationsView')
            ->with('success', 'Accommodation deleted successfully.');
    }

}
