@extends('layouts.base')

@section('content')

    <x-cards.card-main
        :id="'maritalManagement'"
        title=""
    >
    <x-slot name="buttons"></x-slot>

        <div class="row d-flex">

            {{-- LIST OF MARITAL STATUS --}}
            <div class="marital--list col-sm-6">
                <x-cards.card-main
                    :id="'maritalList'"
                    title="Estado civil"
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
                        <tbody id="marital-list-body">
                            @include('marital.list')
                        </tbody>
                    </table>
                </x-cards.card-main>
            </div>

            {{-- CREATE MARITAL STATUS --}}
            <div class="marital--create col-sm-6">
                <x-cards.card-main
                    :id="'maritalCreate'"
                    title="Inserir novo estado civil"
                >
                    <x-slot name="buttons">
                        <x-buttons.button
                            color="success"
                            type="submit"
                            title="Salvar"
                            :id="'save-new-marital'"
                        />
                    </x-slot>

                    <form action="{{ route('marital-status.store') }}" method="post">
                        @csrf
                        <x-forms.inline-label
                            colName="name"
                            title="Nome"
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