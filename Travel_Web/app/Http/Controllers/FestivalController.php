<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function festivalView()
    {
        return view('screens.festival');
    }
}
