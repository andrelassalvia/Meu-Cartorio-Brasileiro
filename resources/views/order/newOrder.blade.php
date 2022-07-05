@extends('layouts.base')

@section('content')

<x-cards.card-main
  :id="'newOrder'"
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

  <form action="{{ route('service-orders.store') }}" method="POST">
    @csrf

    {{-- DATE --}}
      {{-- date dibled --}}
      <div class="mb-3 row">
        <label for="" class="col-sm-1 col-form-label">Data</label>
        <div class="col-sm-2">
          <input class="form-control form-control-sm" type="text" disabled value="{{ $today }}">
        </div>
      </div>

    {{-- CLIENT NAME --}}
    <x-forms.inline-label-button
    colName="client_id"
    labelSize="1"
    title="Cliente"
    req="*"
    colSize="4"
    route="#"
    tooltip="Seleciona clientes em uma lista"
    />

    <input type="hidden" name="client_id" value="">

    {{-- SERVICE TYPE --}}
    <x-forms.select-foreach
      title="Demanda"
      colName="servicetype_id"
      :array="$serviceTypes"
      :id="'service-type'"
      colSize="2"
      labelSize="1"
      req="*"
    />

    {{-- PROVIDER --}}
    <x-forms.inline-label-button
    colName="provider_id"
    labelSize="1"
    title="Fornecedor"
    req="*"
    colSize="4"
    route="#"
    tooltip="Seleciona cartório"
    />

    <input type="hidden" name="provider_id" value="">

    {{-- INCOME --}}
    <div class="mb-3 row">
      <label for="income" class="col-sm-1 col-form-label">Valor</label>
      <div class="col-sm-2 ">
        <input type="number" name="income" step="0.01" class="form-control form-control-sm">
      </div>
    </div>

    {{-- COMMENT --}}
    <x-forms.comment/>
  </form>

</x-cards.card-main>

<script src="{{ asset('js/tooltip.js') }}"></script>

@endsection