{{-- Content of Modal to show occupation that will be deleted --}}
<div  class="modal-body">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <p 
    class="modal--title"
    data-id="{{ $occupation->id }}"
  >
    Apagar a ocupação {{ $occupation->name }}?
  </p>
</div>
<div class="modal-footer">
  <button 
    type="button" 
    class="btn btn-secondary btn-sm" 
    data-bs-dismiss="modal"
  >
    Voltar
  </button>
  
  <a 
    id="okButton"
    class="btn btn-primary btn-sm"
  >
    Ok
  </a>
</div>

<script src="{{ asset('js/triggerDelete.js') }}"></script>

