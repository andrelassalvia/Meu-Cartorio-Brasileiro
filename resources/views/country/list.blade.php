@foreach ($countries as $country)

  <tr>
    <td class="countryName">{{ $country->name }}</td>
    <td width=130px>
      <a href="#" class="btn btn-danger btn-sm">Apagar</a>
      <a href="#" class="btn btn-secondary btn-sm">Editar</a>
    </td>
  </tr>
    
@endforeach