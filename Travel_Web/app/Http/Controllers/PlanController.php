<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function planView()
    {
        $plan=Plan::all();
        return view('screens.plan',compact('plan'));
    }

    public function addPlanView()
    {
        return view('admin.addPlan');
    }

    public function adminPlanView()
    {
        $plan=Plan::all();
        return view('admin.adminPlan',compact('plan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $filename);

            Plan::create([
                'title' => $request->title,
                'status' => $request->status,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'image' => $filename
            ]);

            return redirect()->route('addPlan')->with('success', 'Plan created successfully.');
        }
        return back()->withErrors(['image' => 'File upload failed']);
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);

        $plan = Plan::findorFail($id);
        $data = $request->only('title','status','start_date','end_date');

        if ($request->hasFile('image')){
            $filename=time().'.'.$request->image->extension();
            $request->image->move(public_path('image'),$filename);
            $data['image']=$filename;
        }

        $plan->update($data);

        return redirect()->route('adminPlan')->with('success', 'Plan updated successfully.');
    }

    public function destroy($id)
    {
        $plan=Plan::findorFail($id);
        $plan->delete();

        return redirect()->route('adminPlan')->with('success', 'Plan deleted successfully.');
    }
}
