{{-- Create a checked checkbox with inline label --}}
<div class="search--check--item">
    <label class="col-form-label" for="">{{ $title }}</label>
    <input 
        class="form-check-input" 
        type="checkbox" 
        name="{{ $colName }}"
        value="1"
        checked
    >
  </div>

  {{-- 
    title => checkbox label title
    colName => column name on table
    --}}