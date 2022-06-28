<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function loadCities($country)
    {
        $cities = DB::table('cities')
            ->select('cities.id', 'cities.name')
            ->where('country_id', $country)
            ->orderBy('name')
            ->get();

        return view('support.cities', compact('cities'));
    }
}
