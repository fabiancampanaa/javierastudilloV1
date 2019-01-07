@extends('layouts.app')

@section('content')
<h3 class="text-center">Modificar Producto</h3>
<hr>
<div class="container">
<form action="{{ route('Product.update', $product->id) }}" method="PUT">
            
            <div class="row">
                    <div class="col-md-12">
                    <strong>Producto:</strong>
                    <input type="text" name="Producto" value="{{ $product->Producto}}" class="form-control" placeholder="Nombre Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Costo</strong>
                        <input type="number" name="Costo" value="{{ $product->Costo}}" class="form-control" placeholder="Costo Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Precio de Venta</strong>
                        <input type="number" name="PrecioVenta" value="{{ $product->PrecioVenta}}" class="form-control" placeholder="Precio de Venta">
                    </div>
                    <div class="col-md-12 text-center">
                        <hr>
                        <input type="submit" class="btn btn-primary btn-block" value="Modificar Producto">
                        
                    </div>
        
        
            </div>
    </form>
</div>


@endsection