@extends('layouts.base')

@section('content')

    <x-cards.card-main
        :id="'maritalManagement'"
        title=""
    >
    <x-slot name="buttons">
        <x-buttons.button
            color="danger"
            type="button"
            title="Voltar"
            :id="'back-from-marital-status'"
        />
    </x-slot>

        <div class="row d-flex">

            {{-- LIST OF MARITAL STATUS --}}
            <div 
                class="main--list col-sm-6"
                data-route="{{ route('marital-status.index') }}"
                >
                <x-cards.card-main
                    :id="'maritalList'"
                    title="Estado civil"
                >
                    <x-slot name="buttons"></x-slot>

                    {{-- SPINNER --}}
					<div class="spinner-border spinner-border-sm text-secondary loading" role="status"></div>

                    {{-- TABLE --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody id="listBody">
                        </tbody>
                    </table>
                </x-cards.card-main>
            </div>

            {{-- CREATE MARITAL STATUS --}}
            <div 
                class="main--create col-sm-6"
                id="create-body"
				data-create="{{ route('marital-status.create') }}"
                >
            </div>

        </div>

    </x-cards.card-main>

    {{-- SHOW MODAL TO DELETE OR EDIT --}}
    <x-modals.no-header/>

    {{-- Script to load list of marital status --}}
    <script type="text/javascript" src="{{ asset('js/loadSupportLists.js') }}"></script>

    {{-- Script to show create form --}}
    <script type="text/javascript" src="{{ asset('js/createSupportRegister.js') }}"></script>

    {{-- Script to load the spinner --}}
    <script type="text/javascript" src="{{ asset('js/spinner.js') }}"></script>

@endsection