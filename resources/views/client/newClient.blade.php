@extends('layouts.base')

@section('content')

<x-cards.card-main
  :id="'newClient'"
  :title="$title"
>
  <x-slot name="buttons">
    <x-buttons.button
      color="danger"
      type="button"
      title="Voltar"
    />
    <x-buttons.button
      color="success"
      type="submit"
      title="Salvar"
    />
  </x-slot>
  <form action="{{ route('clients.store') }}" method="post">
    @csrf

    {{-- NAME --}}
    <x-forms.inline-label
      colName="name"
      title="Nome"
      colSize="6"
      labelSize="2"
      type="text"
      req="*"
    />

    {{-- TELEPHONE --}}
    <x-forms.telefone
      req="*"
      colSize="3"
      colName="tel"
      :countries="$countries"
    />
    
    {{-- EMAIL --}}
    <x-forms.inline-label
      colName="email"
      title="E-mail"
      colSize="5"
      labelSize="2"
      type="email"
      req=""
    />

    {{-- BIRTH DATE --}}
    <x-forms.inline-label
      colName="birth_date"
      title="Data de nascimento"
      colSize="2"
      labelSize="2"
      type="date"
      req=""
    />

    {{-- CHECK FIRMA --}}
    <x-forms.check
      colName="firma_aberta"
      title="Firma aberta"
    />

    {{-- CHECK CNH --}}
    <x-forms.check
      colName="cnh"
      title="CNH"
    />

    {{-- CHECK CPF --}}
    <x-forms.check
      colName="cpf"
      title="CPF"
    />

    {{-- CHECK DIGITAL CERTIFICATION --}}
    <x-forms.check
      colName="digital_certification"
      title="Certificação digital"
    />

    {{-- CHECK PASSPORT --}}
    <x-forms.check
      colName="passport"
      title="Passaporte"
    />

    {{-- SELECT BRAZIL STATE --}}
    <x-forms.select-foreach
      title="Estado"
      colName='brazilstate_id'
      colSize="2"
      labelSize="2"
      :array="$brazilStates"
      :id="'brazil-state'"
      req=""
    />

    {{-- SELECT BRAZIL CITY --}}
    <x-forms.select
      title="Cidade"
      colName="brazilcity_id"
      colSize="2"
      labelSize="2"
      :id="'brazil-city'"
    />

    {{-- SELECT COUNTRY --}}
    <x-forms.select-foreach
      title="Pais"
      colName='country_id'
      colSize="2"
      labelSize="2"
      :array="$countries"
      :id="'country'"
      req=""
    />

    {{-- SELECT CITY  --}}
    <x-forms.select
      title="Cidade"
      colName="city_id"
      colSize="2"
      labelSize="2"
      :id="'city'"
    />

    {{-- SELECT MARITAL STATUS --}}
    <x-forms.select-foreach
      title="Estado civil"
      colName="maritalstatus_id"
      colSize="2"
      labelSize="2"
      :id="'marital-status'"
      :array="$maritalStatus"
      req=""
    />

    {{-- SELECT OCCUPATION --}}
    <x-forms.select-foreach
      title="Ocupação"
      colName="occupation_id"
      colSize="2"
      labelSize="2"
      :id="'occupation'"
      :array="$occupations"
      req=""
    />

    {{-- COMMENT --}}
    <x-forms.comment/>
  </form>
</x-cards.card-main>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
    
@endsection