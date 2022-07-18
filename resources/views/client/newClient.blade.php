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
      :id="'back-from-new-client'"
    />
    <x-buttons.button
      color="success"
      type="submit"
      title="Salvar"
      :id="'save-new-client'"
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
      reqValue=""
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
      reqValue=""
    />

    {{-- BIRTH DATE --}}
    <x-forms.inline-label
      colName="birth_date"
      title="Data de nascimento"
      colSize="2"
      labelSize="2"
      type="date"
      req=""
      reqValue=""
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
      colName='brazil_state_id'
      colSize="2"
      labelSize="2"
      :array="$brazilStates"
      :id="'brazil-state'"
      req=""
      reqValue=""
    />

    {{-- SELECT BRAZIL CITY --}}
    <x-forms.select
      title="Cidade"
      colName="brazil_city_id"
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
      reqValue=""
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
      colName="marital_status_id"
      colSize="2"
      labelSize="2"
      :id="'marital-status'"
      :array="$maritalStatus"
      req=""
      reqValue=""
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
      reqValue=""
    />

    {{-- COMMENT --}}
    <x-forms.comment/>
  </form>
</x-cards.card-main>

{{-- Load cities to select --}}
<script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
    
@endsection