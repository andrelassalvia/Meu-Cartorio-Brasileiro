@extends('layouts.base')

@section('content')

    <x-cards.card-main
        :id="'serviceManagement'"
        title=""
    >
    <x-slot name="buttons"></x-slot>

        <div class="row d-flex">

            {{-- LIST OF SERVICES --}}
            <div class="service--list col-sm-6">
                <x-cards.card-main
                    :id="'serviceList'"
                    title="Lista de tipos de demandas"
                >
                    <x-slot name="buttons"></x-slot>

                    {{-- TABLE --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody id="service-list-body">
                            @include('serviceType.list')
                        </tbody>
                    </table>
                </x-cards.card-main>
            </div>

            {{-- CREATE SERVICE --}}
            <div class="service--create col-sm-6">
                <x-cards.card-main
                    :id="'serviceCreate'"
                    title="Inserir novo tipo de demanda"
                >
                    <x-slot name="buttons">
                        <x-buttons.button
                            color="success"
                            type="submit"
                            title="Salvar"
                        />
                    </x-slot>

                    <form action="{{ route('service-types.store') }}" method="post">
                        @csrf
                        <x-forms.inline-label
                            colName="name"
                            title="Tipo de demanda"
                            colSize="8"
                            labelSize="3"
                            type="text"
                            req=""
                            reqValue=""
                        />
                    </form>
                </x-cards.card-main>
            </div>
        </div>

    </x-cards.card-main>

@endsection