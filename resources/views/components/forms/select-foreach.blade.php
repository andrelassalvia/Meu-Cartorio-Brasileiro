<div class="mb-3 row">
    <label for="" class="col-sm-{{$labelSize}} col-form-label">{{$title}}</label>
    <div class="col-sm-{{$colSize}}">
      <select name="{{$colName}}" id="{{$id}}" class="form-select form-select-sm">
        <option value="">Selecione</option>
        @foreach ($array as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div>
</div>

{{-- 
    title
    colName
    array
    id
    colSize
    labelSize
    --}}