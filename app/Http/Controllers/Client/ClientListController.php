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
    /**
     * Method to list clients filtered by status
     */
    public function list($clientStatus){

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

            default:
                $title = 'Clientes com ordens encerradas';
                break;
        }

        $serviceTypes = ServiceType::orderBy('name')->get();
        $brazilStates = BrazilState::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $clients = Client::where('clientstatus_id', $clientStatus)
            ->orderBy('updated_at')
            ->paginate(15);

        return view(
            'client.listClients', 
            compact('serviceTypes', 'brazilStates', 'countries', 'clients', 'title')
        );
    }
}
