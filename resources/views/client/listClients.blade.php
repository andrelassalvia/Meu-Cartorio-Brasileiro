@extends('layouts.base')

@section('content')

<div id="listClients" class="card">
  <div class="card-header d-flex justify-content-between">
    <h2>Todos os clientes</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-sm btn-success btn--create">Novo</a>
  </div>
  <div class="card-body">
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
            />
  
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
          <x-forms.select-foreach
            title="Demanda"
            colName="servicetype_id"
            colSize="4"
            labelSize="3"
            :array="$serviceTypes"
            :id="'service-type'"
            req=""
          />

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

      {{-- BUTTONS --}}
      <x-forms.search-buttons/>
    </form>

    {{-- TABLE LIST WITH CLIENTS --}}
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
          @if ($client->email == null)
            <td><i class='bx bxs-no-entry'></i></td>
          @else
            <td>{{ $client->email }}</td>
          @endif

          {{-- BRAZIL CITY --}}
          @if ($client->brazilcity_id == null)
            <td><i class='bx bxs-no-entry'></i></td>
          @else
            <td>{{ $client->brazilCity->name }} - {{ $client->brazilState->code }}</td>
          @endif
            
          {{-- FIRMA ABERTA --}}
          @if ($client->firma_aberta == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif
            
          {{-- CNH --}}
          @if ($client->cnh == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif

          {{-- DIGITAL CERTIFICATION --}}
          @if ($client->digital_certification == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif

          {{-- CPF --}}
          @if ($client->cpf == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif

          {{-- RG --}}
          @if ($client->rg == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif

          {{-- PASSPORT --}}
          @if ($client->passport == null)
            <td><i class='bx bxs-no-entry icon--null'></i></td>
          @else
            <td><i class='bx bxs-check-circle icon--check'></i></td>
          @endif
          
          <td><i class='bx bx-search-alt-2 bx-xs'></i></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {{-- PAGINATION --}}
    <x-tables.pagination
      :array="$clients"
    />
  <div>
</div>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>

@endsection