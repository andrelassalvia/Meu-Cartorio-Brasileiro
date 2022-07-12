<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\MaritalStatus;

class MaritalStatusComposer
{
  public function compose(View $view)
  {
    $view->with('maritalStatus', MaritalStatus::orderBy('name')->get());
  }
}