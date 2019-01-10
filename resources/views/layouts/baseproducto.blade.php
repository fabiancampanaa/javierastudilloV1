@extends('Layouts.app')


<div class="container">
    <h3>Gestion de Productos</h3>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ URL('/inicio') }}">Volver</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('Product.index') }}">Listado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Product.create') }}">Crear Producto</a>
            </li>

        </ul>
        </div>
    </nav>
    @yield('contentproduct')
</div>


