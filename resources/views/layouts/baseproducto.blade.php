@extends('Layouts.app')


<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="/img/logo.jpg" width="60">
            </div>
            <div class="col-md-10 my-auto">
                <h4>Modulo de Gestion Producto</h4>
            </div>
        </div>
    </div>
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


