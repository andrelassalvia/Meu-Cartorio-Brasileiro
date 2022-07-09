<x-cards.card-main
  :id="'maritalCreate'"
  title="Inserir novo estado civil"
>
  <x-slot name="buttons">
    <x-buttons.button
      color="success"
      type="submit"
      title="Salvar"
      :id="'save'"
    />
  </x-slot>

  <form id="store" action="{{ route('marital-status.store') }}" method="post">
    @csrf
    <div class="mb-3 row">
      <label 
        for="name" 
        class="col-sm-3 col-form-label"
      > 
        Nome 
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

