<?php

namespace App\Http\Controllers\Occupation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;

class OccupationShowController extends Controller
{
    public function main()
    {
        $occupations = Occupation::orderBy('name')->get();
        
        return view('occupation.main', compact('occupations'));
    }
}
