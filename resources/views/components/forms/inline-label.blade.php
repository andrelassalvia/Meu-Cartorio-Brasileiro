<div class="mb-3 row">
    <label 
        for="{{ $colName }}" 
        class="col-sm-{{$labelSize}} col-form-label"
    > 
        {{ $title }} 
        <span style="color: red">{{ $req }}</span> 
    </label>
    <div class="col-sm-{{ $colSize }}">
      <input 
        type="{{ $type }}" 
        class="form-control form-control-sm" 
        name="{{ $colName }}"
        value="{{ old($colName) ?? $reqValue }}"
        >
    </div>
</div>

{{-- 
    colName
    title
    labelSize
    colSize
    type
    req
    reqValue
    --}}