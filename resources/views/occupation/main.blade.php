@extends('layouts.base')

@section('content')

    <x-cards.card-main
        :id="'occupationsManagement'"
        title=""
    >
    <x-slot name="buttons"></x-slot>

        <div class="row d-flex">

            {{-- LIST OF OCCUPATIONS --}}
            <div class="occupations--list col-sm-6">
                <x-cards.card-main
                    :id="'occupationsList'"
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
                        <tbody id="listBody">
                            @include('occupation.list')
                        </tbody>
                    </table>
                </x-cards.card-main>
            </div>

            {{-- CREATE OCCUPATION --}}
            <div class="occupations--create col-sm-6">
                <x-cards.card-main
                    :id="'occupationsCreate'"
                    title="Inserir nova ocupação"
                >
                    <x-slot name="buttons">
                        <x-buttons.button
                            color="success"
                            type="submit"
                            title="Salvar"
                        />
                    </x-slot>

                    <form action="{{ route('occupations.store') }}" method="post">
                        @csrf
                        <x-forms.inline-label
                            colName="name"
                            title="Nome da ocupação"
                            colSize="8"
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