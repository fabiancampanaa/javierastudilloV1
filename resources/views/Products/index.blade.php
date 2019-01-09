@extends('layouts.app')

@section('content')
<h4>Gestion de Productos</h4>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('Product.create') }}">Crear Producto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Modificar Producto</a>
      </li>
    </ul>
  </div>
</nav>
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Costo</th>
      <th scope="col">Precio de Venta</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->Producto}}</td>
        <td>$&nbsp; {{ $product->Costo}}</td>
        <td>$&nbsp; {{ $product->PrecioVenta}}</td>
        <td><a href="{{ route('Product.edit', $product->id) }}">Modificar</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $products->links() }}
@endsection