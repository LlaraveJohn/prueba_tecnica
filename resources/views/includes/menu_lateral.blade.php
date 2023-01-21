<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="text-align: center;">
                    <span>
                        <a href="{{url('/')}}">
                            <img alt="image" width="90" height="100" src="{{asset('img/avatar.png')}}">
                        </a>
                    </span>
                </div><br>
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold" style="color: #FFFFFF;">John Alexander Llarave</strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    IT
                </div>
            </li>

            <li>
                <a href="{{url('/')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-label">
                        Inicio
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/route')}}">
                    <i class="fas fa-map-marked-alt fa-fw"></i>
                    <span class="nav-label">
                        Rutas
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/client')}}">
                    <i class="fas fa-users fa-fw"></i>
                    <span class="nav-label">
                        Clientes
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/')}}">
                    <i class="fas fa-location-arrow fa-fw"></i>
                    <span class="nav-label">
                        Mapa
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>