<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ServiceOrder;
use App\Models\ServiceType;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facades\Debugbar;

class ClientController extends Controller
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientStatus_id = $request->client_status_id;
        $clientStatus_id = explode(",", $clientStatus_id);

        switch ($request->client_status_id) {
            case "1,2,3,4":
                $title = 'Todos os clientes';
                break;

            case "2":
                $title = 'Clientes inativos';
                break;

            case "3":
                $title = 'Clientes com ordens';
                break;

            case "4":
                $title = 'Clientes com ordens encerradas';
                break;

            default:
                $title = 'Clientes potenciais';
                break;
        }

        $clients = Client::whereIn('client_status_id', $clientStatus_id)
            ->latest('updated_at')
            ->paginate(15);

        $clientStatus_id = implode(",", $clientStatus_id);

        return view(
            'client.listClients', 
            compact('clients', 'title', 'clientStatus_id')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Novo cliente';

        return view(
            'client.newClient', 
            compact('title')
        );
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
        $client = Client::find($id);
        $orders = ServiceOrder::where('client_id', $id)->orderBy('updated_at', 'desc')->get();
        $comments = Comment::where('client_id', $id)->orderBy('updated_at', 'desc')->get();

        return view('client.showClient', compact('client', 'orders', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('client.editClient');
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
