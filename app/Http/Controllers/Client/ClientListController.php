<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ServiceType;
use App\Models\BrazilState;
use App\Models\Country;

class ClientListController extends Controller
{
    public function list($clientStatus){

        $serviceTypes = ServiceType::orderBy('name')->get();
        $brazilStates = BrazilState::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $clients = Client::where('clientstatus_id', $clientStatus)
            ->orderBy('updated_at')
            ->paginate(15);

        return view(
            'client.listClients', 
            compact('serviceTypes', 'brazilStates', 'countries', 'clients')
        );
    }
}
