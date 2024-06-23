<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentariesController extends Controller
{
    public function documentariesView()
    {
        return view('screens.documentaries');
    }
}
