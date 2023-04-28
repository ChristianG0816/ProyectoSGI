<li class="side-menus {{ Request::is('/') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<!--Usuarios y roles-->
<li class="side-menus {{ Request::is('usuarios') ? 'active' : '' }}">
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuario</span>
    </a>
</li>
<li class="side-menus {{ Request::is('roles') ? 'active' : '' }}">
    <a class="nav-link" href="/roles">
        <i class=" fas fa-users"></i><span>Usuario</span>
    </a>
</li>

<!--Bitacora-->
<li class="side-menus {{ Request::is('bitacora') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/bitacora/')}}">
        <i class=" fas fa-building"></i><span>Bitácora</span>
    </a>
</li>
