@foreach ($maritalStatus as $item)

  <tr>
    <td class="maritalName">{{ $item->name }}</td>
    @if (empty($item->clients[0]))
    <td width=130px>
      <button 
      class="btn btn-danger btn-sm "
      data-bs-toggle="modal"
      data-bs-target="#mainSupportModal"
      id="deleteButton"
      data-id="{{ $item->id }}"
      >
        Apagar
      </button>
      <button 
        class="btn btn-secondary btn-sm"
        data-bs-toggle="modal"
        data-bs-target="#mainSupportModal"
        data-id="{{ $item->id }}"
        id="editButton"
      >
        Editar
      </button>
    </td>
    @else
    <td width=130px>
      <button 
        class="btn btn--disabled btn-sm"
        data-bs-toggle="tooltip"
        title="Ação não permitida: estado civil vinculado a cliente"
      >
        Apagar
      </button>
      <button 
        class="btn btn-secondary btn-sm"
        data-bs-toggle="modal"
        data-bs-target="#mainSupportModal"
        data-id="{{ $item->id }}"
        id="editButton"
      >
        Editar
      </button>
    </td>
    @endif
    
  </tr>
    
@endforeach
