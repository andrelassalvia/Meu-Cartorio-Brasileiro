<div class="mb-3 row">
    <div class="d-flex">
        <label for="{{ $colName }}" class="col-sm-2 col-form-label">{{ $title }}</label>
        <input 
        class="form-check-input"
        type="checkbox" 
        name="{{ $colName }}" 
        value="1" {{ old($colName) == 1 ? 'checked' : '' }}
        id="{{ $colName }}"
        >
    </div>
</div>

{{-- 
    colName
    title
    --}}
