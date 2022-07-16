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

        /**
         * set variables with request values to be retrieved when an search request is loaded
         * and we need keep those informations on the reloaded page 
         */ 
        $clientStatusId = $request->clientstatus_id;
        $clientName = $request->name;
        $clientTel = $request->tel;
        $clientBrazilStateId = $request->brazilstate_id;
        $clientBrazilCityId = $request->brazilcity_id;
        $clientDemand = $request->servicetype_id;
        $clientCountry = $request->country_id;
        $clientCity = $request->city_id;

        /**
         * boolean requests needs two different variables. One to be used in where statement and
         * other to keep search request information when the page is reloaded after a search request
         */
        $request->boolean('firma_aberta') === true ? list($firmaAberta, $clientFirma) = array([true], 1) : list($firmaAberta, $clientFirma) = array([true, false], 0);
        $request->boolean('cnh') === true ? list($cnh, $clientCnh) = array([true], 1) : list($cnh, $clientCnh) = array([true, false], 0);
        $request->boolean('cpf') === true ? list($cpf, $clientCpf) = array([true], 1) : list($cpf, $clientCpf) = array([true, false], 0);
        $request->boolean('digital_certification') === true ? list($digitalCertification, $clientDigitalCertification) = array([true], 1) : list($digitalCertification, $clientDigitalCertification) = array([true, false], 0);
        $request->boolean('passport') === true ? list($passport, $clientPassport) = array([true], 1) : list($passport, $clientPassport) = array([true, false], 0);

        /**
         * switch to define the title of differents lists (potential, all, etc) and define its
         * client status to allow status be reloaded after a search request
         */
        switch ($clientStatusId) {
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

        // Find clients with the specific serviceType
        $orders = ServiceOrder::with('serviceType')
        ->get()
        ->filter(function($serviceOrder) use ($clientDemand){
            return $serviceOrder->servicetype_id == $clientDemand;
        })
        ->map(function($serviceOrder){
            return $serviceOrder->client_id;
        })
        ->unique();

        // where statements to be shown in search request
        $clientsSearch = Client::whereIn('clientstatus_id', $clientStatus)
            ->where('name', 'LIKE', '%'.$clientName.'%')
            ->where('tel', 'LIKE', '%'.$clientTel.'%')
            ->where('brazilstate_id', $clientBrazilStateId)
            ->where('brazilcity_id', $clientBrazilCityId)
            ->whereIn('firma_aberta', $firmaAberta)
            ->whereIn('cnh', $cnh)
            ->whereIn('cpf', $cpf)
            ->whereIn('digital_certification', $digitalCertification)
            ->whereIn('passport', $passport)
            ->where('country_id', $clientCountry)
            ->where('city_id', $clientCity)
            ->orderBy('name');
                
            if(!$orders->isEmpty()){
                    $clients = $clientsSearch->whereIn('id', $orders)->paginate(10);
                } else {
                    $clients = $clientsSearch->paginate(10);
                }
                        
        return view(
            'client.listClients', 
            compact(
                'clients', 
                'title', 
                'clientStatusId', 
                'dataForm', 
                'clientName', 
                'clientDemand',
                'clientTel',
                'clientBrazilStateId',
                'clientBrazilCityId',
                'clientFirma',
                'clientCnh',
                'clientCpf',
                'clientDigitalCertification',
                'clientPassport',
                'clientCountry',
                'clientCity'
            )
        );
    }
}
