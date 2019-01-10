@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2">
        <img src="/img/logo.jpg" width="60">
    </div>
    <div class="col-md-10">
        <h4>Modulo de Gestion Banqueteria</h4>
        Bienvenido {{ auth()->user()->name}}
    </div>
  </div>
</div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="{{ route('Product.index') }}">Gestion de Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crear Cotizacion</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Gestión de Menús</a>
          </li>
          <li class="nav-item">
              <form action="{{ route ('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-danger btn-xs">Cerrar Sesion</button>
               </form>
          </li>
        </ul>
      </div>
    </nav>

    
@endsection