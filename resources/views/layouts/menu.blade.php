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
       <i class="fa fas-solid fa-folder-open"></i>
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
    <a href="{{ route('pagoExpedintes.index') }}"
       class="nav-link {{ Request::is('pagoExpedintes*') ? 'active' : '' }}">
       <i class="fa fas-solid fa-money-bill"></i>
        <p>Pago Expedintes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('expedienteDetalles.index') }}"
       class="nav-link {{ Request::is('expedienteDetalles*') ? 'active' : '' }}">
       <i class="fa fas-regular fa-file-code"></i>
        <p>Expediente Detalles</p>
    </a>
</li>


