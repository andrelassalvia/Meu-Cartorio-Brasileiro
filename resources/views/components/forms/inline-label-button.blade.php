<div class="mb-3 row">
    <label for="{{ $colName }}" class="col-sm-{{ $labelSize }} col-form-label"
    >
      {{ $title }} 
      <span style="color: red">{{ $req }}</span>
    </label>
    <div class="col-sm-{{ $colSize }} d-flex client--button">
      <input type="text" name="{{ $colName }}" class="form-control form-control-sm" value="" disabled>
      <a class="btn btn-sm btn-outline-secondary d-flex align-items-center" href="{{ $route }}">
        <i class="bx bx-search-alt-2 search--button pe-1"><span class="ps-1">Buscar</span></i>
      </a>
    </div>
  </div>
  
  {{-- 
    colName
    labelSize
    title
    req
    colSize
    route
    --}}