<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ServiceOrder;
use App\Models\Comment;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientStatus = $request->clientStatus;

        switch ($clientStatus) {
            case 1:
                $title = 'Clientes potenciais';
                break;

            case 2:
                $title = 'Clientes inativos';
                break;

            case 3:
                $title = 'Clientes com ordens';
                break;

            case 4:
                $title = 'Clientes com ordens encerradas';
                break;

            default:
                $title = 'Todos os clientes';
                break;
        }

        if($clientStatus == null){
            $clients = Client::orderBy('updated_at')->paginate(15);
        } else{
            $clients = Client::where('clientstatus_id', $clientStatus)
                ->orderBy('updated_at')
                ->paginate(15);
        }
        
        return view(
            'client.listClients', 
            compact('clients', 'title')
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
