@extends('layouts.basecotizacion')
<script type="text/javascript">
    const products = @json($products);
</script>
@section('contentcotizacion')
<hr>



    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Ingreso Datos</h5>
                <div class="row mp-0">
                    <div class="col form-group">
                        <label for="name" class="m-0">Nombre Cliente</label>
                        <input class="form-control form-control-sm" type="text" name="nomcliente" id="nomcliente" placeholder="Ingrese Nombre Cliente">
                    </div>
                    <div class="col my-auto">
                        <button class="btn btn-outline-success btn-sm" id="masnombre">+</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <select class="form-control form-control-sm" id="cbxproducto">
                            @foreach ($products as $product)
                                <option>{{$product->Producto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col my-auto">
                        <button class="btn btn-outline-success btn-sm" id="masproducto">+</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <table class="table" id="tablacot">
                            <thead>     
                                <tr>
                                    <td colspan="3">Nombre Cliente: </td>
                                    <td colspan="2" id="nombrecliente">....</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>N°</th>
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