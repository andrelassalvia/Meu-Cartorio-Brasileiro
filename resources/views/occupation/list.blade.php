@foreach ($occupations as $occupation)

  <tr data-id="{{ $occupation->id }}">
    <td class="occupationName">{{ $occupation->name }}</td>
    @if (empty($occupation->clients[0]))
        <td width=130px>
          <button 
          class="btn btn-danger btn-sm "
          data-bs-toggle="modal"
          data-bs-target="#showOccupation"
          id="deleteButton"
          
        >
          Apagar
        </button>
          <a href="#" class="btn btn-secondary btn-sm">Editar</a>
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
        <a href="#" class="btn btn-secondary btn-sm">Editar</a>
      </td>
    @endif
    
  </tr>
    
@endforeach

<script src="{{ asset('js/tooltip.js') }}"></script>
