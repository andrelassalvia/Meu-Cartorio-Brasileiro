<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceOrder;
use App\Models\BrazilState;
use App\Models\ServiceType;
use App\Models\OrderStatus;

class OrderListController extends Controller
{
    public function list($status)
    {
        switch ($status) {
            case 1:
                $title = 'Ordens em andamento';
                $orders = ServiceOrder::whereNotIn('orderstatus_id', [7])
                    ->with(['client', 'serviceType', 'orderStatus', 'provider'])
                    ->orderBy('updated_at')
                    ->paginate(15);
                break;

            case 7:
                $title = 'Ordens encerradas';
                $orders = ServiceOrder::where('orderstatus_id', 7)
                    ->with(['client', 'serviceType', 'orderStatus', 'provider'])
                    ->orderBy('updated_at')
                    ->paginate(15);
                break;

            default:
                $title = 'Lista de ordens';
                break;
        }
        $brazilStates = BrazilState::orderBy('name')->get();
        $serviceTypes = ServiceType::orderBy('name')->get();
        $orderStatus = OrderStatus::orderBy('name')->get();

        return view(
            'order.listOrders',
            compact('title', 'brazilStates', 'serviceTypes', 'orderStatus', 'orders')
        );
    }
}
