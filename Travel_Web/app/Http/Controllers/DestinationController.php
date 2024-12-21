<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destinationView()
    {
        $destinations = Destination::all();
        return view('screens.destination',compact('destinations'));
    }

    //admin controller
    public function addDestinationView()
    {
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

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);

            Destination::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileName,
            ]);

            return redirect()->route('adminDestination')->with('success', 'Destination created successfully.');
        }
        return back()->withErrors(['image' => 'File upload failed']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $destination = Destination::findOrFail($id);
        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);
            $data['image'] = $fileName;
        }

        $destination->update($data);

        return redirect()->route('adminDestination')->with('success', 'Destination updated successfully.');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('adminDestination')->with('success', 'Destination deleted successfully.');
    }

}
