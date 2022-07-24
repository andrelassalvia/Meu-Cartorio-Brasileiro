@extends('layouts.base')

@section('content')

  <x-cards.card-main
    :id="'listOrders'"
    :title="$title"
  >
    <x-slot name="buttons">
      <x-buttons.button
        color="danger"
        type="button"
        title="Voltar"
        :id="'back-from-orders-list'"
      />
      <x-buttons.a-link
        route="service-orders.create"
        color="success"
        title="Nova ordem de serviço"
      />
    </x-slot>
    <form action="{{ route('search.orders') }}" method="get" id="form-search">
      <div class="d-flex">

        {{-- Order status --}}
        <input type="hidden" name="order_status" value="{{ $orderStatus_id ?? "" }}">
        @if ($errors->has('order_status'))
          <p class="error">{{ $errors->first('order_status') }}</p>
        @endif
        
        <div class="col-sm-6 mt-3">

          {{-- search for name --}}
          @if (isset($clientName))
            <x-forms.inline-label
              colName="name"
              title="Nome do cliente"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="{{ $clientName }}" 
            />
          @else
            <x-forms.inline-label
              colName="name"
              title="Nome do cliente"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="" 
            />
          @endif
          @if ($errors->has('name'))
            <p class="error">{{ $errors->first('name') }}</p>
          @endif
  
          {{-- search for fone --}}
          @if (isset($clientTel))
            <x-forms.inline-label
              colName="tel"
              title="Telefone"
              colSize="5"
              labelSize="3"
              type="text"
              req=""
              reqValue="{{ $clientTel }}"
            />
          @else
            <x-forms.inline-label
              colName="tel"
              title="Telefone"
              colSize="5"
              labelSize="3"
              type="text"
              req=""
              reqValue=""
            />
          @endif
          @if ($errors->has('tel'))
            <p class="error">{{ $errors->first('tel') }}</p>
          @endif
  
          {{-- Search for state in Brazil --}}
          @if (isset($clientBrazilStateId))
            <x-forms.select-foreach
              title="Estado"
              colName='brazil_state_id'
              colSize="4"
              labelSize="3"
              :array="$brazilStates"
              :id="'brazil-state'"
              req=""
              reqValue="{{ $clientBrazilStateId }}"
            />
          @else
            <x-forms.select-foreach
              title="Estado"
              colName='brazil_state_id'
              colSize="4"
              labelSize="3"
              :array="$brazilStates"
              :id="'brazil-state'"
              req=""
              reqValue=""
            />
          @endif
          @if ($errors->has('brazil_state_id'))
            <p class="error">{{ $errors->first('brazil_state_id') }}</p>
          @endif
  
          {{-- Search for city in Brazil --}}
          <x-forms.select
            title="Cidade"
            colName="brazil_city_id"
            :id="'brazil-city'"
            colSize="4"
            labelSize="3"
          />
          @if ($errors->has('brazil_city_id'))
            <p class="error">{{ $errors->first('brazil_city_id') }}</p>
          @endif
        </div>
  
        <div class="col-sm-6 mt-3">

          {{-- Search for service type --}}
          @if (isset($clientDemand))
            <x-forms.select-foreach
              title="Demanda"
              colName="service_type_id"
              colSize="4"
              labelSize="3"
              :array="$serviceTypes"
              :id="'service-type'"
              req=""
              reqValue="{{ $clientDemand }}"
            />
          @else
            <x-forms.select-foreach
              title="Demanda"
              colName="service_type_id"
              colSize="4"
              labelSize="3"
              :array="$serviceTypes"
              :id="'service-type'"
              req=""
              reqValue=""
            />
          @endif
          @if ($errors->has('service_type_id'))
            <p class="error">{{ $errors->first('service_type_id') }}</p>
          @endif
    
          {{-- Status OS --}}
          @if (isset($orderStatus_id) and $orderStatus_id == "7")
            <input type="hidden" name="order_status_id" value="7">
          @elseif(isset($status) and $status != null )
            <x-forms.select-foreach
              title="Status da ordem"
              colName='order_status_id'
              colSize="4"
              labelSize="3"
              :array="$orderStatus"
              :id="'order-status'"
              req=""
              reqValue="{{ $status }}"
            />
          @else
          <x-forms.select-foreach
              title="Status da ordem"
              colName='order_status_id'
              colSize="4"
              labelSize="3"
              :array="$orderStatus"
              :id="'order-status'"
              req=""
              reqValue=""
            />
          @endif
          @if ($errors->has('order_status_id'))
            <p class="error">{{ $errors->first('order_status_id') }}</p>
          @endif
    
          {{-- search for provider name --}}
          @if (isset($providerName))
            <x-forms.inline-label
              colName="providerName"
              title="Nome do cartório"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="{{ $providerName }}" 
            />
          @else
            <x-forms.inline-label
              colName="providerName"
              title="Nome do cartório"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="" 
            />
          @endif
          @if ($errors->has('providerName'))
            <p class="error">{{ $errors->first('providerName') }}</p>
          @endif

          {{-- search for provider contact --}}
          @if (isset($contact))
            <x-forms.inline-label
              colName="contact"
              title="Contato no cartório"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="{{ $contact }}" 
            />
          @else
            <x-forms.inline-label
              colName="contact"
              title="Contato no cartório"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue="" 
            />
          @endif
          @if ($errors->has('contact'))
            <p class="error">{{ $errors->first('contact') }}</p>
          @endif
          
        </div>
        
      </div>
  
      {{-- BUTTONS --}}
      <x-forms.search-buttons/>
    </form>

    {{-- LIST OF ORDERS --}}
    <table class="table table-bordered">

      <thead>
        <tr>
          <th>Início da ordem</th>
          <th>Cliente</th>
          <th>Telefone</th>
          <th>Estado</th>
          <th>Cidade</th>
          <th>Demanda</th>
          <th>Status da ordem</th>
          <th>Cartório</th>
          <th>Contato</th>
          <th>Tel cartório</th>
          <th>Ação</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($orders as $order)
          <tr>
            <td>{{ $order->updated_at }}</td>
            <td>{{ $order->client->name }}</td>
            <td>{{ $order->client->tel }}</td>

            {{-- BRAZIL STATE --}}
            @if (empty($order->client->brazilState->name))
              <td><i class='bx bxs-no-entry icon--null'></i></td>
            @else
              <td>{{ $order->client->brazilState->name }}</td>
            @endif

            {{-- BRAZIL CITY --}}
            @if (empty($order->client->brazilCity->name))
              <td><i class='bx bxs-no-entry icon--null'></i></td>
            @else
              <td>{{ $order->client->brazilCity->name }}</td>
            @endif

            <td>{{ $order->serviceType->name }}</td>
            <td>{{ $order->orderStatus->name }}</td>

            {{-- PROVIDER NAME --}}
            @if (empty($order->provider->name))
              <td><i class='bx bxs-no-entry icon--null'></i></td>
            @else
              <td>{{ $order->provider->name }}</td>
            @endif

            {{-- PROVIDER CONTACT --}}
            @if (empty($order->provider->contact))
              <td><i class='bx bxs-no-entry icon--null'></i></td>
            @else
              <td>{{ $order->provider->contact }}</td>
            @endif

            {{-- PROVIDER TEL --}}
            @if (empty($order->provider->tel))
              <td><i class='bx bxs-no-entry icon--null'></i></td>
            @else
              <td>{{ $order->provider->tel }}</td>
            @endif
          
            <td>
              <a href="#">
                <i class='bx bx-search-alt-2 bx-xs'></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
      
    </table>

    {{-- PAGINATION --}}
    @if (isset($dataForm))
      <x-tables.pagination-append
        :array="$orders"
        :dataform="$dataForm"
      />
    @else
      <x-tables.pagination
        :array="$orders"
      />
    @endif
  </x-cards.card-main>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>

{{-- Reset inputs --}}
<script type="text/javascript" src="{{ asset('js/resetInputs.js') }}"></script>
    
@endsection

