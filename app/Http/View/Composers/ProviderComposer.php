<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Provider;

class ProviderComposer
{
  public function compose(View $view)
  {
    $view->with('providers', Provider::orderBy('updated_at')->paginate(15));
  }
}