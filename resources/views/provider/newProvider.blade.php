@extends('layouts.base')

@section('content')
    
<div id="newProvider" class="card">
  <div class="card-header">
    <h2>Novo fornecedor</h2>
    <div class="buttons">
      <button class="btn btn-danger btn-sm">Voltar</button>
      <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    </div>
  </div>
  <div class="card-body">
    <form action="{{ route('providers.store') }}" method="post">
      @csrf

      {{-- NAME --}}
      <x-forms.inline-label
        colName="name"
        title="Nome"
        colSize="4"
        labelSize="2"
        type="text"
        req=""
        reqValue=""
      />

      {{-- CONTACT --}}
      <x-forms.inline-label
        colName="contact"
        title="Contato"
        colSize="4"
        labelSize="2"
        type="text"
        req=""
        reqValue=""
      />

      {{-- TEL --}}
      <x-forms.inline-label
        colName="tel"
        title="Telefone"
        colSize="4"
        labelSize="2"
        type="tel"
        req="*"
        reqValue=""
      />

      {{-- ZAP --}}
      <x-forms.inline-label
        colName="zap"
        title="ZAP"
        colSize="4"
        labelSize="2"
        type="tel"
        req=""
        reqValue=""
      />

      {{-- EMAIL --}}
      <x-forms.inline-label
        colName="email"
        title="E-mail"
        colSize="4"
        labelSize="2"
        type="email"
        req=""
        reqValue=""
      />

      {{-- BRAZIL STATE --}}
      <x-forms.select-foreach
        title="Estado"
        colName='brazilstate_id'
        colSize="2"
        labelSize="2"
        :array="$brazilStates"
        :id="'brazil-state'"
        req=""
      />

      {{-- BRAZIL CITY --}}
      <x-forms.select
      title="Cidade"
      colName="brazilcity_id"
      colSize="2"
      labelSize="2"
      :id="'brazil-city'"
    />
    </form>
  </div>
</div>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
@endsection