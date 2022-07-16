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

        {{-- Search for state in Brazil --}}
        @if (isset($clientBrazilStateId))
          <x-forms.select-foreach
            title="Estado"
            colName='brazilstate_id'
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
            colName='brazilstate_id'
            colSize="4"
            labelSize="3"
            :array="$brazilStates"
            :id="'brazil-state'"
            req=""
            reqValue=""
          />
        @endif
          
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
        @if (isset($clientDemand))
          <x-forms.select-foreach
            title="Demanda"
            colName="servicetype_id"
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
            colName="servicetype_id"
            colSize="4"
            labelSize="3"
            :array="$serviceTypes"
            :id="'service-type'"
            req=""
            reqValue=""
          />
        @endif

        {{-- Search for documents --}}
        <div class="search--check mb-3">

          {{-- firma aberta --}}
          @if (isset($clientFirma) and $clientFirma == 1)
            <x-forms.checked-grid title="Firma aberta" colName="firma_aberta"/>
          @else
            <x-forms.check-grid title="Firma aberta" colName="firma_aberta"/>
          @endif

          {{-- CNH --}}
          @if (isset($clientCnh) and $clientCnh == 1)
            <x-forms.checked-grid title="CNH" colName="cnh"/>
          @else
            <x-forms.check-grid title="CNH" colName="cnh"/>
          @endif

          {{-- CPF --}}
          @if (isset($clientCpf) and $clientCpf == 1)
            <x-forms.checked-grid title="CPF" colName="cpf"/>
          @else
            <x-forms.check-grid title="CPF" colName="cpf"/>
          @endif

          {{-- Digital Certification --}}
          @if (isset($clientDigitalCertification) and $clientDigitalCertification == 1)
            <x-forms.checked-grid title="Certificação" colName="digital_certification"/>
          @else
            <x-forms.check-grid title="Certificação" colName="digital_certification"/>
          @endif

          {{-- Passport --}}
          @if (isset($clientPassport) and $clientPassport == 1)
            <x-forms.checked-grid title="Passaporte" colName="passport"/>
          @else
            <x-forms.check-grid title="Passaporte" colName="passport"/>
          @endif
   
        </div>

        {{-- Country --}}
        @if (isset($clientCountry))
          <x-forms.select-foreach
            title="País"
            colName='country_id'
            colSize="4"
            labelSize="3"
            :array="$countries"
            :id="'country'"
            req=""
            reqValue="{{ $clientCountry }}"
          />
        @else
          <x-forms.select-foreach
            title="País"
            colName='country_id'
            colSize="4"
            labelSize="3"
            :array="$countries"
            :id="'country'"
            req=""
            reqValue=""
          />
        @endif

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
<script type="text/javascript" src="{{ asset('js/resetInputs.js') }}"></script>

@endsection