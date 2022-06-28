@extends('layouts.base')

@section('content')

<div id="newClient" class="card">
  <div class="card-header">
    <h2>Novo cliente</h2>
    <div class="buttons">
      <button class="btn btn-danger btn-sm">Voltar</button>
      <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    </div>
  </div>
  <div class="card-body">
    <form action="{{ route('clients.store') }}" method="post">
      @csrf

      <x-forms.inline-label
        colName="name"
        title="Nome"
        colSize="6"
        type="text"
        req="*"
      />

      <x-forms.telefone
        req="*"
        colSize="3"
        colName="tel"
        :countries="$countries"
      />
      
      <x-forms.inline-label
        colName="email"
        title="E-mail"
        colSize="4"
        type="email"
        req=""
      />

      <x-forms.inline-label
        colName="birth_date"
        title="Data de nascimento"
        colSize="2"
        type="date"
        req=""
      />

      <x-forms.check
        colName="firma_aberta"
        title="Firma aberta"
      />

      <x-forms.check
        colName="cnh"
        title="CNH"
      />

      <x-forms.check
        colName="cpf"
        title="CPF"
      />

      <x-forms.check
        colName="digital_certification"
        title="Certificação digital"
      />

      <x-forms.check
        colName="passport"
        title="Passaporte"
      />

      <x-forms.select-foreach
        title="Estado"
        colName='brazilstate_id'
        :array="$brazilStates"
        :id="'brazil-state'"
      />

      <x-forms.select
        title="Cidade"
        colName="brazilcity_id"
        :id="'brazil-city'"
      />

      <x-forms.select-foreach
        title="Pais"
        colName='country_id'
        :array="$countries"
        :id="'country'"
      />

      <x-forms.select
        title="Cidade"
        colName="city_id"
        :id="'city'"
      />

      <x-forms.select-foreach
        title="Estado civil"
        colName="maritalstatus_id"
        :id="'marital-status'"
        :array="$maritalStatus"
      />

      <x-forms.select-foreach
        title="Ocupação"
        colName="occupation_id"
        :id="'occupation'"
        :array="$occupations"
      />
     
    </form>
  </div>
</div>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
    
@endsection