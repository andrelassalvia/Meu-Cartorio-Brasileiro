<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Country;

class CountryComposer
{
  public function compose(View $view)
  {
    $view->with('countries', Country::orderBy('name')->get());
  }
}