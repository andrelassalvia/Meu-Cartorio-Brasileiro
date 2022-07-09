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
			<div class="occupations--list col-sm-6">
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
							:id="'save-occupation'"
						/>
					</x-slot>

					<form id="occupationStore" action="{{ route('occupations.store') }}" method="post">
						@csrf
						<div class="mb-3 row">
							<label 
								for="name" 
								class="col-sm-3 col-form-label"
							> 
								Nome da ocupação 
							</label>
							<div class="col-sm-8">
								<input 
									type="text" 
									class="form-control form-control-sm" 
									name="name">
							</div>
							@if ($errors->has('name'))
									<p class="error">{{ $errors->first('name') }}</p>
							@endif
						</div>
					</form>
								
				</x-cards.card-main>
			</div>

		</div>

	</x-cards.card-main>

    {{-- SHOW MODAL TO DELETE OR EDIT --}}
    @include('occupation.modal')

    {{-- Script to load list of occupations --}}
    <script type="text/javascript" src="{{ asset('js/loadSupportLists.js') }}"></script>

    {{-- Script to submit create form --}}
    <script type="text/javascript" src="{{ asset('js/submitForm.js') }}"></script>

    {{-- Script to load the spinner --}}
    <script type="text/javascript" src="{{ asset('js/spinner.js') }}"></script>

    {{-- Script to show a modal when delete or edit button are triggered --}}
    <script type="text/javascript" src="{{ asset('js/occupationModal.js') }}"></script>

@endsection