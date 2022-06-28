<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrazilCityController extends Controller
{
    public function loadBrazilCities($brazilState)
    {
        $brazilCities = DB::table('brazil_cities')
            ->select('brazil_cities.id', 'brazil_cities.name')
            ->where('brazilstate_id', $brazilState)
            ->orderBy('name')
            ->get();

        return view('support.cities', compact('brazilCities'));
    }
}
