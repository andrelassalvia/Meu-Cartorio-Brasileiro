
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
              <x-dropdown.item title="Novo" route="clients.create"/>
              <x-dropdown.item title="Potenciais" route=""/>
              <x-dropdown.item title="Ordens em andamento" route=""/>
              <x-dropdown.item title="Inativos" route=""/>
              <x-dropdown.item title="Todos os clientes" route="clients.index"/>
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
              <x-dropdown.item title="Nova" route="service-orders.create"/>
              <x-dropdown.item title="Em andamento" route=""/>
              <x-dropdown.item title="Encerradas" route=""/>
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
              <x-dropdown.item title="Novo" route=""/>
              <x-dropdown.item title="Lista de fornecedores" route=""/>
            </ul>
          </div>
          <div class="dropdown dropdown--menu">
            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown">Apoio</a>
            <ul class="dropdown-menu dropdown-ul">
              <li></li>
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
<script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous">
</script>
