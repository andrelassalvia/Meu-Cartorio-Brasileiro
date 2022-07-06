@extends('layouts.base')

@section('content')

    <x-cards.card-main
        :id="'countriesManagement'"
        title=""
    >
    <x-slot name="buttons"></x-slot>

        <div class="row d-flex">

            {{-- LIST OF COUNTRIES --}}
            <div class="countries--list col-sm-6">
                <x-cards.card-main
                    :id="'countriesList'"
                    title="Lista de ocupações"
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
                        <tbody id="country-list-body">
                            @include('country.list')
                        </tbody>
                    </table>
                </x-cards.card-main>
            </div>

            {{-- CREATE COUNTRY --}}
            <div class="countries--create col-sm-6">
                <x-cards.card-main
                    :id="'countriesCreate'"
                    title="Inserir novo país"
                >
                    <x-slot name="buttons">
                        <x-buttons.button
                            color="success"
                            type="submit"
                            title="Salvar"
                        />
                    </x-slot>

                    <form action="{{ route('countries.store') }}" method="post">
                        @csrf
                        <x-forms.inline-label
                            colName="name"
                            title="País"
                            colSize="8"
                            labelSize="3"
                            type="text"
                            req=""
                        />

                        <x-forms.inline-label
                            colName="tel_code"
                            title="Código de área"
                            colSize="4"
                            labelSize="3"
                            type="text"
                            req=""
                        />
                    </form>
                </x-cards.card-main>
            </div>
        </div>

    </x-cards.card-main>

@endsection