{{-- Input field with an inline label --}}
<div class="mb-3 row">
    <label 
      for="" 
      class="col-sm-{{$labelSize}} col-form-label"
      >
      {{$title}}
      <span style="color: red">{{ $req }}</span>
    </label>
    <div class="col-sm-{{$colSize}}">
      <select name="{{$colName}}" id="{{$id}}" class="form-select form-select-sm">
        <option value="">Selecione</option>
        @foreach ($array as $item)
          <option value="{{$item->id}}"{{ $item->id == $reqValue ? 'selected' : "" }}
          >
            {{$item->name}}
          </option>
        @endforeach
      </select>
    </div>
</div>

{{-- 
    title => field title
    colName => table column
    array => to be used in foreach
    id => regular id
    colSize => bootstrap col size of input
    labelSize => bootstrap col size of label
    req => shows a red * to require a mandatory field
    reqValue => value from controller request. Used to retrieve selected option 
                  in foreach and keep it when page is reloaded
    --}}