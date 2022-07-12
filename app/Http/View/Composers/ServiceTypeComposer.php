<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\ServiceType;

class ServiceTypeComposer
{
  public function compose(View $view)
  {
    $view->with('serviceTypes', ServiceType::orderBy('name')->get());
  }
}