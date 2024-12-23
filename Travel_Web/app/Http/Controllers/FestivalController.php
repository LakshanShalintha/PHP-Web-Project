<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function festivalView()
    {
        $festival = Festival::all();
        return view('screens.festival',compact('festival'));
    }

    public function addFestivalView()
    {
        return view ('admin.addFestival');
    }

    public function adminFestivalView()
    {
        $festival = Festival::all();
        return view('admin.adminFestival', compact('festival'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'country' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $filename);

            Festival::create([
                'title' => $request->title,
                'description' => $request->description,
                'location' => $request->location,
                'country' => $request->country,
                'image' => $filename
            ]);
            return redirect()->route('adminFestival')->with('success', 'Festival created successfully.');
        }
        return back()->withErrors(['image' => 'File upload failed']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'country' => 'required',
            'image' => 'image'
        ]);

        $festival = Festival::findorFail($id);
        $data = $request->only('title', 'description', 'location', 'country');

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);
            $data['image'] = $fileName;
        }

        $festival->update($data);

        return redirect()->route('adminFestival')->with('success', 'Festival updated successfully.');
    }

    public function destroy($id)
    {
        $festival = Festival::findorFail($id);
        $festival->delete();

        return redirect()->route('adminFestival')->with('success', 'Festival deleted successfully.');
    }
}
