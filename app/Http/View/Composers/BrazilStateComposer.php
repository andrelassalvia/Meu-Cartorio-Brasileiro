<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\BrazilState;

class BrazilStateComposer
{
  public function compose(View $view)
  {
    $view->with('brazilStates',BrazilState::orderBy('name')->get());
  }
}