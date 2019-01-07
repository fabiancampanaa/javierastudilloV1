@extends('layouts.app')

@section('content')
   <h3>Modulo de Gestion {{ auth()->user()->user_type }}</h3>
   Bienvenido {{ auth()->user()->name}} 
<form action="{{ route ('logout') }}" method="POST">
      {{ csrf_field() }}
      <button class="btn btn-danger btn-xs">Cerrar Sesion</button>
   </form>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link" href="{{ route('Product.index') }}">Gestion de Productos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crear Cotizacion</a>
          </li>
        </ul>
      </div>
    </nav>

    
@endsection