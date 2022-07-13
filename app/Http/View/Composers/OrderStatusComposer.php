<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\OrderStatus;

class OrderStatusComposer
{
  public function compose(View $view)
  {
    $view->with('orderStatus', OrderStatus::orderBy('name')->get());
  }
}