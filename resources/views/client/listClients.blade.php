@extends('layouts.base')

@section('content')

<x-cards.card-main
  :id="'listClients'"
  :title="$title"
>
  <x-slot name="buttons">
    <x-buttons.button
      color="danger"
      type="button"
      title="Voltar"
      :id="'back-from-clients-list'"
    />
    <x-buttons.a-link
      route="clients.create"
      color="success"
      title="Novo cliente"
    />
  </x-slot>
  
  <form action="{{ route('clients.search') }}" method="get" id="form-search">
    <div class="d-flex">

      {{-- client status --}}
     
      <input type="hidden" name="clientstatus_id" value="{{ $clientStatus_id ?? ""}}">
      
      <div class="col-sm-6 mt-3">
        {{-- search for name --}}
        <div class="mb-3 row">
          <label 
              for="name" 
              class="col-sm-3 col-form-label"
          > 
              Nome do cliente
              <span style="color: red">*</span> 
          </label>
          <div class="col-sm-7">
            <input 
              type="text" 
              class="form-control form-control-sm" 
              name="name"
              value="{{ $clientName ?? "" }}"
              >
          </div>
        </div>
          {{-- <x-forms.inline-label
            colName="name"
            title="Nome do cliente"
            colSize="7"
            labelSize="3"
            type="text"
            req=""
          /> --}}

          {{-- search for fone --}}
          <x-forms.inline-label
            colName="tel"
            title="Telefone"
            colSize="5"
            labelSize="3"
            type="text"
            req=""
          />

          {{-- Search for state in Brazil --}}
          <x-forms.select-foreach
            title="Estado"
            colName='brazilstate_id'
            colSize="4"
            labelSize="3"
            :array="$brazilStates"
            :id="'brazil-state'"
            req=""
          />

          {{-- Search for city in Brazil --}}
          <x-forms.select
            title="Cidade"
            colName="brazilcity_id"
            :id="'brazil-city'"
            colSize="4"
            labelSize="3"
          />
      </div>

      <div class="col-sm-6 mt-3">
        {{-- Search for service type --}}
        <div class="mb-3 row">
          <label 
            for="" 
            class="col-sm-3 col-form-label"
            >
            Demanda
            <span style="color: red">*</span>
          </label>
          <div class="col-sm-4">
            <select name="servicetype_id" id="service-type" class="form-select form-select-sm">
              <option value="">Selecione</option>
              @foreach ($serviceTypes as $item)
                @if (isset($clientDemand))
                  <option 
                    value="{{$item->id}}"{{  $item->id == $clientDemand ? 'selected' : ""  }}

                  >
                    {{$item->name}}
                  </option>
                @else
                 <option value="{{ $item->id }}">{{ $item->name }}</option>   
                @endif
              @endforeach
            </select>
          </div>
      </div>
        {{-- <x-forms.select-foreach
          title="Demanda"
          colName="servicetype_id"
          colSize="4"
          labelSize="3"
          :array="$serviceTypes"
          :id="'service-type'"
          req=""
        /> --}}

        {{-- Search for documents --}}
        <div class="search--check mb-3">
          <x-forms.check-grid title="Firma aberta" colName="firma_aberta"/>
          <x-forms.check-grid title="CNH" colName="cnh"/>
          <x-forms.check-grid title="CPF" colName="cpf"/>
          <x-forms.check-grid title="Certificado" colName="digital_certification"/>
          <x-forms.check-grid title="Passaporte" colName="passport"/>
        </div>

        {{-- Country --}}
        <x-forms.select-foreach
          title="País"
          colName='country_id'
          colSize="4"
          labelSize="3"
          :array="$countries"
          :id="'country'"
          req=""
        />

        {{-- Search form city --}}
        <x-forms.select
          title="Cidade"
          colName="city_id"
          :id="'city'"
          colSize="4"
          labelSize="3"
        />
      </div>
      
    </div>

    {{-- SEARCH BUTTONS --}}
    <x-forms.search-buttons/>
  </form>

  {{-- TABLE --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Data</th>
        <th width="200px">Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Cidade</th>
        <th width="70px">Firma</th>
        <th width="50px">CNH</th>
        <th width="80px">Certificação</th>
        <th width="50px">CPF</th>
        <th width="50px">RG</th>
        <th width="80px">Passaporte</th>
        <th width="70px">Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <td>{{ $client->updated_at }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->tel }}</td>

        {{-- EMAIL --}}
        @if (empty($client->email))
          <td><i class='bx bxs-no-entry'></i></td>
        @else
          <td>{{ $client->email }}</td>
        @endif

        {{-- BRAZIL CITY --}}
        @if (empty($client->brazilcity_id))
          <td><i class='bx bxs-no-entry'></i></td>
        @else
          <td>{{ $client->brazilCity->name }} - {{ $client->brazilState->code }}</td>
        @endif
          
        {{-- FIRMA ABERTA --}}
        @if (empty($client->firma_aberta))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif
          
        {{-- CNH --}}
        @if (empty($client->cnh))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif

        {{-- DIGITAL CERTIFICATION --}}
        @if (empty($client->digital_certification))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif

        {{-- CPF --}}
        @if (empty($client->cpf))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif

        {{-- RG --}}
        @if (empty($client->rg))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif

        {{-- PASSPORT --}}
        @if (empty($client->passport))
          <td><i class='bx bxs-no-entry icon--null'></i></td>
        @else
          <td><i class='bx bxs-check-circle icon--check'></i></td>
        @endif
        
        <td>
          <a href="{{ route('clients.show', $client) }}">
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
      :array="$clients"
      :dataform="$dataForm"
    />
  @else
    <x-tables.pagination
      :array="$clients"
    />
  @endif

</x-cards.card-main>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>

{{-- Reset inputs --}}
<script>
  $(function(){
    $('#reset-button').on('click', function(){
      $('#form-search input').attr('value', "");
      // $('select[name="servicetype_id"] option:selected').attr('selected', null);
      $('#form-search option:selected').attr('selected', null);
      
    });
  });
</script>

@endsection