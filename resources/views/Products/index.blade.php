@extends('layouts.baseproducto')

@section('contentproduct')
<hr>
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<table class="table table-sm text-center">
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
        <td><a href="{{ route('Product.edit', $product->id)}}" class="btn btn-primary btn-sm">Modificar</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $products->links() }}
@endsection