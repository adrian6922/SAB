<header class="site-header">
    <div class="hero">
            <div class="informacion-evento">
                <h1 class="nombre-sitio" id="titulo-programa">S.A.B.</h1>
            </div><!--.informacion-evento-->
    </div><!--.hero-->
</header>
<div class="menu-principal">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mantenedor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/Usuario')}}">Usuarios</a>
                        <a class="dropdown-item" href="{{url('/Proveedor')}}">Proveedores</a>
                    <a class="dropdown-item" href="{{url('/Cliente')}}">Clientes</a>
                    <a class="dropdown-item" href="{{url('/Empleado')}}">Empleados</a>
                    <a class="dropdown-item" href="{{url('/Centro')}}">Centros</a>
                    <a class="dropdown-item" href="{{url('/Material')}}">Materiales</a>
                    <a class="dropdown-item" href="{{url('/Servicio')}}">Servicios</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Solicitud
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Materiales</a>
                        <a class="dropdown-item" href="#">Servicios</a>
                        <a class="dropdown-item" href="#">Estado</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingreso
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Transito</a>
                        <a class="dropdown-item" href="#">Bodega</a>
                        <a class="dropdown-item" href="#">Cambio Ubicación</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Egreso
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Materiales</a>
                        <a class="dropdown-item" href="#">Servicios</a>
                        <a class="dropdown-item" href="#">Buscador</a>
                        <a class="dropdown-item" href="#">Traslados</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inventario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Reporte Kardex</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Compras
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{'/OrdenCompra'}}">Solicitud</a>
                        <a class="dropdown-item" href="#">Estado</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Movimiento Historico</a>
                        <a class="dropdown-item" href="#">Consulta Stock</a>
                        <a class="dropdown-item" href="#">Consulta Proveedor</a>
                        <a class="dropdown-item" href="#">Consulta Ingreso</a>
                        <a class="dropdown-item" href="#">Consulta Egreso</a>
                        <a class="dropdown-item" href="#">planificación</a>
                        <a class="dropdown-item" href="#">Proveedor Compras</a>
                        <a class="dropdown-item" href="#">Centros Compras</a>
                        <a class="dropdown-item" href="#">Centro de Costos Compras</a>
                        <a class="dropdown-item" href="#">Materiales Compras</a>
                        <a class="dropdown-item" href="#">Servicios Compras</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link enlace" id="cerrar-sesion" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </ul>
        </div>
    </nav>
</div> <!--.menu-principal-->