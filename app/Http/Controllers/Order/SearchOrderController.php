<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Models\ServiceOrder;
use Illuminate\Support\Str;
use Barryvdh\Debugbar\Facades\Debugbar;

class SearchOrderController extends Controller
{
    public function __construct(ServiceOrder $order, Client $client, Provider $provider)
    {
        $this->order = $order;
        $this->client = $client;
        $this->provider = $provider;
    }

    public function search(Request $request)
    {
        $orderStatus_id = $request->order_status;

        // To use in pagination
        $dataForm = $request->all();
        
        // Define list title on page
        switch ($orderStatus_id) {
            case "1,2,3,4,5,6":
                $title = 'Ordens em andamento';
                break;
                default:
                $title = 'Ordens encerradas';
                break;
            }

        // Return only orders with specific status
        $orderStatus_id = explode(",", $orderStatus_id);
        $this->order = $this->order->whereIn('order_status_id', $orderStatus_id);

         // variable to be used when filling the demand field
         $status = null;

        // Segregate request keys by model
        $dataOrder = request(
            [
            'service_type_id',
            'order_status_id'
            ]
        );

        $dataClient = request(
            [
                'name',
                'tel',
                'brazil_state_id',
                'brazil_city_id'
            ]
        );

        $dataProvider = request(
            [
                'providerName',
                'contact'
            ]

        );

        // Swap key name for provider request
        $dataProvider['name'] = $dataProvider['providerName'];
        unset($dataProvider['providerName']);

        // Variables to check wether there is any record or no
        $amountClientsKeys = 0;
        $amountProviderssKeys = 0;

        // Find all clients that match with dataClient request
        foreach ($dataClient as $key => $value) {
            if ($value !== null) {
                if (is_string($value) and $value == "on") {
                    $whereInVar[] = [true];
                    $this->client = $this->client->whereIn($key, $whereInVar);
                    $amountClientsKeys += 1;
                } elseif (is_numeric($value) and $key !== 'tel') {
                    $this->client = $this->client->where($key, $value);
                    $amountClientsKeys += 1;
                   
                } elseif (is_string($value) and Str::contains($value, ',')) {
                    $ids = explode(',', $value);
                    $this->client = $this->client->whereIn($key, $ids);
                    $amountClientsKeys += 1;
                } else {
                    $this->client = $this->client->where($key, 'LIKE', '%'.$value.'%');
                    $amountClientsKeys += 1;
                }
            }
        }

        // Find all providers that match with dataProvider request
        foreach ($dataProvider as $key => $value) {
            if ($value !== null) {
                if (is_numeric($value) and $key !== 'tel') {
                    $this->provider = $this->provider->where($key, $value);
                    $amountProviderssKeys += 1;
                } else {
                    $this->provider = $this->provider->where($key, 'LIKE', '%'.$value.'%');
                    $amountProviderssKeys += 1;
                }
            }
        }

        // Find all orders that match with dataOrder request
        foreach ($dataOrder as $key => $value) {
            if ($value !== null) {
                $this->order = $this->order->where($key, $value);
                $key == 'order_status_id' ? $status = $value : $status = null;
            }
        }

        // get unique clients ids if there is a request for clients
        if ($amountClientsKeys > 0) {
            $clients = $this->client->get()->map(function($client){
                return $client->id;
            })->unique();
        } else {
            $clients = null;
        }

        // get unique providers ids if there is a request for providers
        if ($amountProviderssKeys > 0) {
            $providers = $this->provider->get()->map(function($provider){
                return $provider->id;
            })->unique();
        } else {
            $providers = null;
        }

        // Match orders with clients ids
        !is_null($clients) 
        ? $this->order = $this->order->whereIn('client_id', $clients) 
        : $clients == null;
        
        // Match orders with providers ids
        !is_null($providers)
        ?  $this->order = $this->order->whereIn('provider_id', $providers)
        : $providers == null;
        
        // Final orders to load
        $orders = $this->order->with(
            [
                'client', 'orderStatus', 
                'provider', 'serviceType'
            ]
        )->latest('updated_at')
        ->paginate(15);

        // Return order status variable to string to be used in future switch case
        $orderStatus_id = implode(",", $orderStatus_id);

        Debugbar::info("order status => $orderStatus_id");
        Debugbar::info("status => $status");

        // Variables to retrieve selected fields in previous filtering
        $clientName = $request->name;
        $clientTel = $request->tel;
        $clientBrazilStateId = $request->brazil_state_id;
        $clientDemand = $request->service_type_id;

        return view(
            'order.listOrders', 
            compact(
                'orders', 'title', 'orderStatus_id',
                'clientName', 'clientTel', 'clientBrazilStateId',
                'clientDemand', 'status'
        ));
    }
}