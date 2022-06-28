<div class="mb-3 row">
    <label 
        :for="$colName" 
        class="col-sm-2 col-form-label"
    > 
        {{ $title }} 
        <span style="color: red">{{ $req }}</span> 
    </label>
    <div class="col-sm-{{ $colSize }}">
      <input 
        type="{{ $type }}" 
        class="form-control form-control-sm" 
        :name="$colName">
    </div>
</div>

{{-- 
    colName
    title
    colSize
    type
    req
    --}}