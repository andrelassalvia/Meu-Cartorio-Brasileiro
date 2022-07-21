<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Models\ServiceOrder;
use Illuminate\Support\Carbon;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  MUITAS QUERYS NO INDEX

    public function index(Request $request)
    {
        $orderStatus_id = $request->order_status_id;
        $orderStatus_id = explode(",", $orderStatus_id);

        switch ($request->order_status_id) {
            case "1,2,3,4,5,6":
                $title = 'Ordens em andamento';
                break;
            case "1,2,3,4,5,6,7":
                $title = 'Todas as ordens';
                break;
            default:
                $title = 'Ordens encerradas';
                break;
        }

        $orders = ServiceOrder::with(
            [
                'orderStatus', 'provider', 
                'serviceType', 'client'
                ])
            ->whereIn('order_status_id', $orderStatus_id)
            ->latest('updated_at')
            ->paginate(15);

        $orderStatus_id = implode(",", $orderStatus_id);

        return view(
            'order.listOrders',
            compact('title', 'orders', 'orderStatus_id')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Nova ordem";
        $today = Carbon::today()->toDateString();
        $today = Carbon::parse($today)->format('d / m / Y');

        return view('order.newOrder', compact('today', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
