<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function restaurantsView()
    {
        return view('screens.restaurants');
    }
}
