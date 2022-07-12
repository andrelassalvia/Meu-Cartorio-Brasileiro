<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Occupation;

class OccupationComposer
{
  public function compose(View $view)
  {
    $view->with('occupations', Occupation::with('clients')->orderBy('name')->get());
  }
}