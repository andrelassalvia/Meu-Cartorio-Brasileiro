<div class="mb-3 row">
    <label 
        class="col-sm-2 col-form-label"
    >
        Telefone <span style="color: red">{{ $req }}</span>
    </label>
    <div class="col-sm-2">
      <select class="form-select form-select-sm" name="countryCode">
        <option value="">Selecione</option>
        @foreach ($countries as $country)
            <option value="{{$country->tel_code}}">{{$country->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-sm-{{ $colSize }}">
      <input type="text" class="form-control form-control-sm" name="{{ $colName }}">
    </div>
  </div>

  {{-- 
    req
    colSize
    colName
    countries
    --}}