@foreach ($occupations as $occupation)
  
  <tr> 
    <td class="occupationName">{{ $occupation->name }}</td>
    @if (empty($occupation->clients[0]))
      <td width=130px>
        <button 
        class="btn btn-danger btn-sm "
        data-bs-toggle="modal"
        data-bs-target="#mainSupportModal"
        id="deleteButton"
        data-id="{{ $occupation->id }}"
        >
          Apagar
        </button>
        <button 
          class="btn btn-secondary btn-sm"
          data-bs-toggle="modal"
          data-bs-target="#mainSupportModal"
          data-id="{{ $occupation->id }}"
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
          title="Ação não permitida: ocupação vinculada a cliente"
        >
          Apagar
        </button>
        <button 
          class="btn btn-secondary btn-sm"
          data-bs-toggle="modal"
          data-bs-target="#mainSupportModal"
          data-id="{{ $occupation->id }}"
          id="editButton"
        >
          Editar
        </button>
      </td>
    @endif
  </tr>
    
@endforeach

