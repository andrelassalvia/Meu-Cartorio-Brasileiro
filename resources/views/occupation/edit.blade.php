{{-- Content of Modal to show occupation that will be edited --}}
<div  class="modal-body" id="editModalBlade">
  <form  action="http://localhost:8000/occupations/" method="post">
    @csrf
    @method('PATCH')

    <div class="mb-3 row">
      <label 
        for="name" 
        class="col-sm-3 col-form-label modal--title"
      > 
        Ocupação 
      </label>
      <div class="col-sm-8">
        <input 
          type="text" 
          class="form-control form-control-sm modal--input" 
          name="name"
          value="{{ $occupation->name ?? "" }}"
        >
      </div>
      @if ($errors->has('name'))
        <p class="error">{{ $errors->first('name') }}</p>
      @endif
    </div>
  </form>
  <div class="modal-footer">
    <button 
      type="button" 
      class="btn btn-secondary btn-sm" 
      data-bs-dismiss="modal"
    >
      Voltar
    </button>
  
    <button 
      id="okButton"
      class="btn btn-primary btn-sm"
      data-id="{{ $occupation->id }}"
    >
      Salvar
    </button>
  </div>
</div>

<script type="text/javascript" src="{{ asset("js/triggerEdit.js") }}"></script>

