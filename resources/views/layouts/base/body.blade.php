
<div id="app">
  <div class="container">
    <header class="sticky container">
      <div class="logo">
        <img src="{{ asset('img/logo-mcb-header.png') }}" alt="">
      </div>
      <div class="user--header">
        <span>Olá, {{ ucfirst(Auth::user()->name) }} |</span>
        <a 
          href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
        >
          <span>Sair</span>
        </a>
        <form 
          id="logout-form" 
          action="{{ route('logout') }}" 
          method=POST
          class="d-none"
        >
          @csrf
        </form>
      </div>
      <div class="menu--bar">
        <ul class="menu--list">
          <li>
            <a href="#">
              <i class="bx bx-home-alt"></i>
              Home
            </a>
          </li>
          <div class="dropdown dropdown--menu">
            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">Clientes</a>
            <ul class="dropdown-menu dropdown--ul">
              <x-dropdown.item 
                title="Novo" 
                route="clients.create"
                tooltip="Novo cliente"
              />

              {{-- Potential clients --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="1">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="Lista os clientes que entraram em contato mas não iniciaram uma ordem de serviço"
                >
                  Potenciais
                </button>
              </form>

              {{-- Clients with orders running --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="3">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="Lista de clientes com ordens de serviço em andamento"
                >
                  Ordens em andamento
                </button>
              </form>
              
              {{-- Clients with finished orders --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="4">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="LIsta clientes com ordens de serviço encerradas"
                >
                  Ordens encerradas
                </button>
              </form>
              
              {{-- Inactive Clients  --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="2">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="Lista contatos que não se tornaram clientes"
                >
                  Inativos
                </button>
              </form>

              {{-- All Clients  --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="Listagem de todos os clientes já cadastrados"
                >
                  Todos os clientes
                </button>
              </form>
            </ul>
          </div>
          <div class="dropdown dropdown--menu">
            <a 
              class="dropdown-toggle" 
              href="#" 
              data-bs-toggle="dropdown"
            >
              Ordens de serviço
            </a>
            <ul class="dropdown-menu dropdown--ul">
              <x-dropdown.item 
                title="Nova" 
                route="service-orders.create"
                tooltip="Nova ordem de serviço"
              />

              {{-- Finished Orders --}}
              <form action="{{ route('service-orders.index') }}" method="GET">
                <input type="hidden" name="order_status_id" value="7">
                <button 
                  type="submit"
                  class="dropdown-item"
                  data-bs-toggle="tooltip"
                  title="LIsta clientes com ordens de serviço encerradas"
                >
                  Encerradas
                </button>
              </form>
              
              {{-- Orders Running --}}
              <form action="{{ route('service-orders.index') }}" method="GET">
                <input type="hidden" name="order_status_id" value="1">
                <button 
                  type="submit"
                  class="dropdown-item"
                  data-bs-toggle="tooltip"
                  title="LIsta clientes com ordens de serviço em andamento"
                >
                  Em andamento
                </button>
              </form>
            </ul>
          </div>
          <div class="dropdown dropdown--menu">
            <a 
              class="dropdown-toggle"
              href="#"
              data-bs-toggle="dropdown"
            >
              Fornecedores
            </a>
            <ul class="dropdown-menu dropdown--ul">
              <x-dropdown.item 
                title="Novo" 
                route="providers.create"
                tooltip="Cria um novo fornecedor"
                />
              <x-dropdown.item 
                title="Lista de fornecedores" 
                route="providers.index"
                tooltip="Lista todos os fornecedores"  
              />
            </ul>
          </div>
          <div class="dropdown dropdown--menu">
            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">Apoio</a>
            <ul class="dropdown-menu dropdown--ul">
              <x-dropdown.item
                title="Ocupação"
                route="occupations-main.main"
                tooltip="Gerenciar lista de ocupações"
              />
              <x-dropdown.item
                title="Estado civil"
                route="marital-status-main.main"
                tooltip="Gerenciar estado civil"
              />
              <x-dropdown.item
                title="Países"
                route="countries.index"
                tooltip="Gerenciar lista de países"
              />
              <x-dropdown.item
                title="Cidades no exterior"
                route=""
                tooltip="Gerenciar lista de cidades"
              />
              <x-dropdown.item
                title="Tipos de demanda"
                route="service-types.index"
                tooltip="Gerenciar lista de tipos de demanda"
              />
            </ul>
          </div>
        </ul>
      </div>
    </header>
    <main class="container">
      @yield('content')
    </main>
  </div>
</div>

{{-- BOOTSTRAP JS --}}
<script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous">
</script>

{{-- script to run tooltips --}}
<script src="{{asset('js/tooltip.js')}}"></script>
