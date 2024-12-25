<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function planView(){
        return view('screens.plan');
    }

    public function addPlanView()
    {
        return view('admin.addPlan');
    }
}
