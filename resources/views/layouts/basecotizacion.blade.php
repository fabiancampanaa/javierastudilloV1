@extends('Layouts.app')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="/img/logo.jpg" width="60">
            </div>
            <div class="col-md-10 my-auto">
                <h3>Gestion cotizacion</h3>
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ URL('/inicio') }}">Volver</a>
                        </li> 
                    </ul>
            </nav>
    </div>
</div>
@yield('contentcotizacion')