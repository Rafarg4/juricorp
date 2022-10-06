<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
<br>
<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('juzgados.index') }}"
       class="nav-link {{ Request::is('juzgados*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-gavel"></i>
        <p>Juzgados</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('circunscripcions.index') }}"
       class="nav-link {{ Request::is('circunscripcions*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-list"></i>
        <p>Circunscripcions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('circunscripcionJuzgados.index') }}"
       class="nav-link {{ Request::is('circunscripcionJuzgados*') ? 'active' : '' }}">
       <i class="fa fas-regular fa-file-code"></i>
        <p>Circunscripcion Juzgados</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
       <i class="fa fas-regular fa-clipboard"></i>
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('expedientes.index') }}"
       class="nav-link {{ Request::is('expedientes*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-folder"></i>
        <p>Expedientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('gastoExpedientes.index') }}"
       class="nav-link {{ Request::is('gastoExpedientes*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-money-bill"></i>
        <p>Gasto Expedientes</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('pagoExpedientes.index') }}"
       class="nav-link {{ Request::is('pagoExpedientes*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-credit-card"></i>
        <p>Pago Expedientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="fa fas-solid fa-user"></i>
        <p>Usuarios</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="fa fas-solid fa-chart-pie"></i>
        <p>Reportes</p>
    </a>
</li>

