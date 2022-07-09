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

{{-- Script to submit create form --}}
<script type="text/javascript" src="{{ asset('js/submitForm.js') }}"></script>