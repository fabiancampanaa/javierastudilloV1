@extends('layouts.baseproducto')

@section('contentproduct')
<h3 class="text-center">Modificar Producto</h3>
<hr>    

<div class="container">
<form action="{{ route('Product.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $product->id}}" class="form-control">
                    <strong>Producto:</strong>
                    <input type="text" name="Producto" value="{{ $product->Producto}}" class="form-control" placeholder="Nombre Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Costo:</strong>
                        <input type="number" name="Costo" value="{{ $product->Costo}}" class="form-control" placeholder="Costo Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Precio de Venta:</strong>
                        <input type="number" name="PrecioVenta" value="{{ $product->PrecioVenta}}" class="form-control" placeholder="Precio de Venta">
                    </div>
                    <hr>
                    <div class="col-md-12 text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary btn-sm">Modificar Producto</button>
                    </div>
            </div>
    </form>
    <div class="col-md-12 text-center">
            <form action="{{ route('Product.destroy', $product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $product->id}}" class="form-control">
                    <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar Producto</button>
                    </div> 
            </form>
    </div>
</div>
           
@endsection