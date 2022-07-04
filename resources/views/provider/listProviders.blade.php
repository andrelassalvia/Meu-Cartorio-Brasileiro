@extends('layouts.base')

@section('content')

<x-cards.card-main
  :id="'listProviders'"
  :title="$title"
>
  <x-slot name="buttons">
    <x-buttons.button
      color="danger"
      type="button"
      title="Voltar"
    />
    <x-buttons.a-link
      route="providers.create"
      color="success"
      title="Novo fornecedor"
    />
  </x-slot>

  <form action="" method="get">
    <div class="d-flex">
      <div class="col-sm-6 mt-3">
       
        {{-- Search for Brazil state --}}
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

        {{-- Search for classification --}}
        <x-forms.select-foreach
          title="Classificação"
          colName='classification_id'
          colSize="4"
          labelSize="3"
          :array="$classifications"
          :id="'classification'"
          req=""
        />

        {{-- search for contact --}}
        <x-forms.inline-label
        title="Contato"
        colName="contact"
        colSize="7"
        labelSize="3"
        type="text"
        req=""
      />
      </div>
    </div>

    {{-- SEARCH BUTTONS --}}
    <x-forms.search-buttons/>
  </form>

  {{-- TABLE LIST WITH PROVIDERS --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Contato</th>
        <th>Telefone</th>
        <th>WhatsApp</th>
        <th>E-mail</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Classificação</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($providers as $provider)
        <tr>
          <td>{{ $provider->name }}</td>
          <td>{{ $provider->contact }}</td>
          <td>{{ $provider->tel }}</td>
          <td>{{ $provider->zap }}</td>
          <td>{{ $provider->email }}</td>
          <td>{{ $provider->brazilState->name }}</td>
          <td>{{ $provider->brazilCity->name }}</td>
          <td></td>
          <td><i class='bx bx-search-alt-2 bx-xs'></i></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{-- PAGINATION --}}
  <x-tables.pagination
    :array="$providers"
  />

</x-cards.card-main>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>

@endsection