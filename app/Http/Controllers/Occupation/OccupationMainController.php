<?php

namespace App\Http\Controllers\Occupation;

use App\Http\Controllers\Controller;

class OccupationMainController extends Controller
{
    /**
     * method to show the principal occupation blade
     */
    public function main()
    {
        return view('occupation.main');
    }
}
