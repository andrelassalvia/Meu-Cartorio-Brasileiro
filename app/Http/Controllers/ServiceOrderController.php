<?php

namespace App\Http\Controllers;

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
    public function index(Request $request)
    {
        switch ($request->orderstatus_id) {
            case 1:
                $title = 'Ordens em andamento';
                $orders = ServiceOrder::whereNotIn('orderstatus_id', [7])
                    ->with(['client', 'serviceType', 'orderStatus', 'provider'])
                    ->orderBy('updated_at')
                    ->paginate(15);
                break;

            case 7:
                $title = 'Ordens encerradas';
                $orders = ServiceOrder::where('orderstatus_id', [7])
                    ->with(['client', 'serviceType', 'orderStatus', 'provider'])
                    ->orderBy('updated_at')
                    ->paginate(15);
                break;

            default:
                $title = 'Lista de ordens';
                $orders = ServiceOrder::orderBy('updated_at')->paginate(15);
                break;
        }

        return view(
            'order.listOrders',
            compact('title', 'orders')
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
