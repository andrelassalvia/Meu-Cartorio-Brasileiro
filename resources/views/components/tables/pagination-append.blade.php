<div class="d-flex justify-content-between">

    {{ $array->appends($dataform)->links() }}
    <div>
      <p class="fw-bold">
        {{ $array->appends($dataform)->firstItem() }} - 
        <span>{{ $array->appends($dataform)->lastItem() }}</span> 
        <span>de {{ $array->appends($dataform)->total() }}</span>
      </p>
    </div>
  </div>

  {{-- 
    array
    dataForm

    --}}