<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function search(Request $request)
    {
        $dataForm = $request->all();

        $clientStatus_id = $request->client_status_id;

        // Structure to form the list title from the client status
        switch ($clientStatus_id) {
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

         // Structure to filter customers (does not include demand)
        $dataClient = $request->except('service_type_id');
        $whereInVar = [];
       
        foreach ($dataClient as $key => $value) {
            if ($value !== null) {
                if (is_string($value) and $value == "on") {
                    $whereInVar[] = [true];
                    $this->client = $this->client->whereIn($key, $whereInVar);
                } elseif (is_numeric($value) and $key !== 'tel') {
                    $this->client = $this->client->where($key, $value);
                } elseif (is_string($value) and Str::contains($value, ',')) {
                    $ids = explode(',', $value);
                    $this->client = $this->client->whereIn($key, $ids);
                } else {
                    $this->client = $this->client->where($key, 'LIKE', '%'.$value.'%');
                }
            }
        }

        $clients = $this->client->orderBy('name');

        // Structure to find clients using only service type
        $clientDemand = $request->service_type_id;

        $orders = ServiceOrder::with('serviceType')
            ->get()
            ->filter(function($serviceOrder) use ($clientDemand) {
                return $serviceOrder->service_type_id == $clientDemand;
            })
            ->map(function($serviceOrder) {
                return $serviceOrder->client_id;
            })
            ->unique();

        // Joining structures with and without demand
        if (!$orders->isEmpty()) {
            $clients = $clients->whereIn('id', $orders)->paginate(10);
        } else {
            $clients = $clients->paginate(10);
        }

        // Variables to retrieve selected fields in previous filtering
        $clientName = $request->name;
        $clientTel = $request->tel;
        $clientBrazilStateId = $request->brazil_state_id;
        $clientBrazilCityId = $request->brazil_city_id;
        $clientCountry = $request->country_id;
        $clientCity = $request->city_id;
        $request->boolean('firma_aberta') === true ? $clientFirma = 1 : $clientFirma = 0;
        $request->boolean('cnh') === true ? $clientCnh = 1 : $clientCnh = 0;
        $request->boolean('cpf') === true ? $clientCpf = 1 : $clientCpf = 0;
        $request->boolean('digital_certification') === true ? $clientDigitalCertification = 1 : $clientDigitalCertification = 0;
        $request->boolean('passport') === true ? $clientPassport = 1 : $clientPassport = 0;

        return view(
            'client.listClients',
            compact(
                'clients',
                'title',
                'clientStatus_id',
                'dataForm',
                'clientName',
                'clientDemand',
                'clientTel',
                'clientBrazilStateId',
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
