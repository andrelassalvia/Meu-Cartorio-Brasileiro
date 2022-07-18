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
    <form action="" method="get">
      <div class="d-flex">
        
        <div class="col-sm-6 mt-3">

          {{-- search for name --}}
            <x-forms.inline-label
              colName="name"
              title="Nome do cliente"
              colSize="7"
              labelSize="3"
              type="text"
              req=""
              reqValue=""
            />
  
            {{-- search for fone --}}
            <x-forms.inline-label
              colName="tel"
              title="Telefone do cliente"
              colSize="5"
              labelSize="3"
              type="text"
              req=""
              reqValue=""
            />
  
            {{-- Search for state in Brazil --}}
            <x-forms.select-foreach
              title="Estado"
              colName='brazil_state_id'
              colSize="4"
              labelSize="3"
              :array="$brazilStates"
              :id="'brazil-state'"
              req=""
            />
  
            {{-- Search for city in Brazil --}}
            <x-forms.select
              title="Cidade"
              colName="brazil_city_id"
              :id="'brazil-city'"
              colSize="4"
              labelSize="3"
            />
        </div>
  
        <div class="col-sm-6 mt-3">

          {{-- Search for service type --}}
          <x-forms.select-foreach
            title="Demanda"
            colName="service_type_id"
            colSize="4"
            labelSize="3"
            :array="$serviceTypes"
            :id="'service-type'"
            req=""
          />
  
          {{-- Status OS --}}
          <x-forms.select-foreach
            title="Status da ordem"
            colName='order_status_id'
            colSize="4"
            labelSize="3"
            :array="$orderStatus"
            :id="'order-status'"
            req=""
          />
  
          {{-- search for provider name --}}
          <x-forms.inline-label
            colName="providerName"
            title="Nome do cartório"
            colSize="7"
            labelSize="3"
            type="text"
            req=""
            reqValue=""
          />

          {{-- search for provider contact --}}
          <x-forms.inline-label
            colName="contact"
            title="Contato no cartório"
            colSize="7"
            labelSize="3"
            type="text"
            req=""
            reqValue=""
          />
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
    <x-tables.pagination
      :array="$orders"
    />
  </x-cards.card-main>

  {{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
    
@endsection

