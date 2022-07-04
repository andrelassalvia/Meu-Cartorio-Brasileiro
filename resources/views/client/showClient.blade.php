@extends('layouts.base')

@section('content')

<x-cards.card-main
  :id="'showClient'"
  title="Cliente: {{$client->name}}"
>
  <x-slot name="buttons">
    <x-buttons.button
      color="danger"
      type="button"
      title="Voltar"
    />
    <x-buttons.a-link-param
      route="clients.edit"
      param="{{ $client->id }}"
      color="warning"
      title="Inativar"
    />
    <x-buttons.a-link-param
      route="clients.edit"
      param="{{ $client->id }}"
      color="primary"
      title="Alterar"
    />
  </x-slot>

  <div class="show--client">
    <div class="client--data">
      <div class="general--data">
        <p>Cliente desde: <span>{{ $client->created_at ?? '' }}</span></p>
        <p>Telefone: <span>{{ $client->tel ?? '' }}</span></p>
        <p>E-mail: <span>{{ $client->email ?? '' }}</span></p>
        <p>Estado civil: <span>{{ $client->maritalStatus->name ?? '' }}</span></p>
        <p>Ocupação: <span>{{ $client->occupation->name ?? '' }}</span></p>
      </div>
      <div class="place--data">
        <p>Estado: <span>{{ $client->brazilState->name ?? '' }}</span></p>
        <p>Cidade: <span>{{ $client->brazilCity->name ?? '' }}</span></p>
        <p>País: <span>{{ $client->country->name ?? '' }}</span></p>
        <p>Cidade no exterior: <span>{{ $client->city->name ?? '' }}</span></p>
      </div>
      <div class="documentations--data">
        <p>Firma aberta: 
          @if (empty($client->firma_abrta))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
        <p>CNH: 
          @if (empty($client->cnh))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
        <p>CPF: 
          @if (empty($client->cpf))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
        <p>Certificação digital: 
          @if (empty($client->digital_certification))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
        <p>RG: 
          @if (empty($client->rg))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
        <p>Passaporte: 
          @if (empty($client->passport))
            <span><i class='bx bxs-no-entry icon--null'></i></span>
          @else
            <span><i class='bx bxs-check-circle icon--check'></i></span>
          @endif
        </p>
      </div>
    </div>
    <div class="client--orders">
      <x-cards.card-main
        :id="'clientListOrders'"
        title="Ordens de: {{ $client->name }}"
      >
        <x-slot name="buttons"></x-slot>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Data</th>
              <th>Demanda</th>
              <th>Status</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
              <tr>
                <td>{{ $order->updated_at }}</td>
                <td>{{ $order->serviceType->name }}</td>
                <td>{{ $order->orderStatus->name }}</td>
                <td>
                  <a href="#">
                    <i class='bx bx-search-alt-2 bx-xs'></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </x-cards.card-main>
    </div>
    <div class="client--comments">
      <x-cards.card-main
        :id="'clientListComments'"
        title="Observações"
      >
        <x-slot name="buttons">
          <x-buttons.button
            color="success"
            type="button"
            title="Novo comentário"
          />
        </x-slot>
        @foreach ($comments as $comment)
            <p><b>{{ $comment->updated_at }}:</b>  <span>  {{ $comment->comment }}</span></p>
        @endforeach
      </x-cards.card-main>
    </div>
  </div>
</x-cards.card-main>
    
@endsection