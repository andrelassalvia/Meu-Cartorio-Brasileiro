<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ServiceOrder;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facades\Debugbar;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientStatus_id = $request->clientstatus_id;

        switch ($request->clientstatus_id) {
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

            if($request->clientstatus_id != null){
                $clients = Client::where('clientstatus_id', $request->clientstatus_id)
                    ->orderBy('updated_at')
                    ->paginate(15);
            } else{
                $clients = Client::orderBy('updated_at')->paginate(15);
            }
        
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
    
    public function search(Request $request)
    {
        $dataForm = $request->all();
        $clientStatus_id = $request->clientstatus_id;
        $request->boolean('firma_aberta') === true ? $firmaAberta = [true] : $firmaAberta = [true, false];
        $request->boolean('cnh') === true ? $cnh = [true] : $cnh = [true, false];
        $request->boolean('cpf') === true ? $cpf = [true] : $cpf = [true, false];
        $request->boolean('digital_certification') === true ? $digitalCertification = [true] : $digitalCertification = [true, false];
        $request->boolean('passport') === true ? $passport = [true] : $passport = [true, false];

        switch ($request->clientstatus_id) {
            case 1:
                $title = 'Clientes potenciais';
                $clientStatus = [1];
                break;

            case 2:
                $title = 'Clientes inativos';
                $clientStatus = [2];
                break;

            case 3:
                $title = 'Clientes com ordens';
                $clientStatus = [3];
                break;

            case 4:
                $title = 'Clientes com ordens encerradas';
                $clientStatus = [4];
                break;

            default:
                $title = 'Todos os clientes';
                $clientStatus = [1, 2, 3, 4];
                break;
        }

            $clientsSearch = Client::whereIn('clientstatus_id', $clientStatus)
                ->where('name', 'LIKE', '%'.$request->name.'%')
                ->where('tel', 'LIKE', '%'.$request->tel.'%')
                ->where('brazilstate_id', $request->brazilstate_id)
                ->where('brazilcity_id', $request->brazilcity_id)
                ->whereIn('firma_aberta', $firmaAberta)
                ->whereIn('cnh', $cnh)
                ->whereIn('cpf', $cpf)
                ->whereIn('digital_certification', $digitalCertification)
                ->whereIn('passport', $passport)
                ->where('country_id', $request->country_id)
                ->where('city_id', $request->city_id)
                ->orderBy('name');

            
                
            $ordersSearch = ServiceOrder::where('servicetype_id', $request->servicetype_id)
                ->get();

                if(!$ordersSearch->isEmpty()){

                    $clientsIds = array();
                    foreach ($ordersSearch as $key => $value) {
                        array_push($clientsIds, $value->client_id);
                    }
                    $clientsIds = collect($clientsIds)->unique();

                    $clients = $clientsSearch->whereIn('id', $clientsIds)->paginate(10);

                } else {

                    $clients = $clientsSearch->paginate(10);
                }
                        
        return view(
            'client.listClients', 
            compact('clients', 'title', 'clientStatus_id', 'dataForm')
        );

    }
}
