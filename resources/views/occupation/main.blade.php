@extends('layouts.base')

@section('content')

	<x-cards.card-main
		:id="'occupationsManagement'"
		title=""
	>
		<x-slot name="buttons">
			<x-buttons.button
				color="danger"
				type="button"
				title="Voltar"
				:id="'back-from-occupations'"
			/>
		</x-slot>

		<div class="row d-flex">

			{{-- LIST OF OCCUPATIONS --}}
			<div 
				class="main--list col-sm-6"
				data-route="{{ route('occupations.index') }}"
			>
				<x-cards.card-main
					:id="'occupationsList'"
					title="Lista de ocupações"
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

			{{-- CREATE OCCUPATION --}}
			<div 
				class="main--create col-sm-6" 
				id="create-body"
				data-create="{{ route('occupations.create') }}"
				>
			</div>

		</div>

	</x-cards.card-main>

    {{-- SHOW MODAL TO DELETE OR EDIT --}}
		<x-modals.no-header/>

    {{-- Script to load list of occupations --}}
    <script type="text/javascript" src="{{ asset('js/loadSupportLists.js') }}"></script>

		{{-- Script to show create form --}}
		<script type="text/javascript" src="{{ asset('js/createSupportRegister.js') }}"></script>

    {{-- Script to load the spinner --}}
    <script type="text/javascript" src="{{ asset('js/spinner.js') }}"></script>

    {{-- Script to show a modal when delete or edit button are triggered --}}
    <script type="text/javascript" src="{{ asset('js/occupationModal.js') }}"></script>

@endsection