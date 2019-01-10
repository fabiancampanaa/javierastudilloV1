@extends('layouts.baseproducto')

@section('contentproduct')
<h3 class="text-center">Agregar Producto</h3>
<hr>
<div class="container">
    <form action="{{ route('Product.store') }}" method="POST">
            @csrf
            <div class="row">
                    <div class="col-md-12">
                        <strong>Producto:</strong>
                        <input type="text" name="Producto" class="form-control" placeholder="Nombre Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Costo</strong>
                        <input type="number" name="Costo" class="form-control" placeholder="Costo Producto">
                    </div>
                    <div class="col-md-12">
                        <strong>Precio de Venta</strong>
                        <input type="number" name="PrecioVenta" class="form-control" placeholder="Precio de Venta">
                    </div>
                    <div class="col-md-12 text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
        
        
            </div>
    </form>
</div>


@endsection