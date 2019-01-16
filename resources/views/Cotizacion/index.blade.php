@extends('layouts.basecotizacion')

@section('contentcotizacion')
<hr>



    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Ingreso Datos</h3>
                <hr>
                <div class="row mp-0">
                    <div class="col form-group">
                        <label for="name" class="m-0">Nombre Cliente:</label>
                        <input class="form-control form-control-sm" type="text" name="nomcliente" id="nomcliente" placeholder="Ingrese Nombre Cliente">
                    </div>
                    <div class="col my-auto col-lg-2">
                        <button class="btn btn-outline-success btn-sm" id="masnombre">+</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <select class="form-control form-control-sm" id="cbxproducto">
                                    @foreach ($products as $product)
                                        <option>{{$product->Producto}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-sm" type="number" id="cantidad" placeholder="Ingrese Cantidad">
                            </div>
                        </div>
                    </div>
                    <div class="col my-auto col-lg-2">
                        <a href="javascript:llena({{$products->toJson()}})" class="btn btn-outline-success btn-sm" id="masproducto">+</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" id="btncalcular" disabled>Calcular</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <table class="table" id="tablacot">
                            <thead>     
                                <tr>
                                    <th colspan="1">Sr(a).: </th>
                                    <th colspan="3" id="nombrecliente">....</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio Unitario</th>
                                    <th>Cantidad</td>
                                    <th>Total</th>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection