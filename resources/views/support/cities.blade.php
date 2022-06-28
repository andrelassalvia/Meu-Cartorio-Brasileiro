{{-- HTML to load list of cities on dropdown list --}}
{{-- Cities in Brazil --}}
<option value="">Selecione</option> 
@isset($brazilCities)
  @foreach ($brazilCities as $brazilCity)
    <option value="{{$brazilCity->id}}">{{$brazilCity->name}}</option> 
  @endforeach 
@endisset

{{-- Cities in Europe --}}
<option value="">Selecione</option> 
@isset($cities)
  @foreach ($cities as $city)
    <option value="{{$city->id}}">{{$city->name}}</option> 
  @endforeach 
@endisset