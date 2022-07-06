@foreach ($maritalStatus as $item)

  <tr>
    <td class="maritalName">{{ $item->name }}</td>
    <td width=130px>
      <a href="#" class="btn btn-danger btn-sm">Apagar</a>
      <a href="#" class="btn btn-secondary btn-sm">Editar</a>
    </td>
  </tr>
    
@endforeach
