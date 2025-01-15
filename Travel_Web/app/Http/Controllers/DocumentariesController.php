<?php

namespace App\Http\Controllers;

use App\Models\Documentary;
use Illuminate\Http\Request;

class DocumentariesController extends Controller
{
    public function documentariesView()
    {
        $documentaries=Documentary::all();
        return view('screens.documentaries',compact('documentaries'));
    }

    public function adminDocumentariesView()
    {
        $documentaries = Documentary::all();
        return view('admin.adminDocumentaries', compact('documentaries'));
    }

    public function addDocumentariesView()
    {
        return view('admin.addDocumentaries');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->has('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $filename);

            Documentary::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$filename
            ]);

            return redirect()->route('addDocumentaries')->with('success', 'Documentary created successfully.');
        }
        return back()->withErrors(['image' => 'File upload failed']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $documentaries = Documentary::findorFail($id);
        $data = $request->only('title', 'description');

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $filename);
            $data['image'] = $filename;
        }

        $documentaries->update($data);

        return redirect('adminDocumentaries')->with('success', 'Documentary update successfully');
    }

    public function destroy($id)
    {
        $documentaries = Documentary::findorFail($id);
        $documentaries->delete();

        return redirect('adminDocumentaries')->with('success', 'Destination deleted successfully.');
    }
}
