$(document).ready(function(){
    $("#masnombre").click(function(){
        var nom = $('#nomcliente').val();
        $('#nombrecliente').html(nom);
    });

   $("#btncalcular").click(function(){
        var tabla = document.getElementById('tablacot');
        var tdsTabla = tabla.getElementsByTagName("td");
        var i = 0;
        var tot = 0
        for (i=0; i<tdsTabla.length; i++)
        {
            if (i%4 == 0){
            var producto =  {
                 Producto:tdsTabla[i].textContent,
                 Precio:tdsTabla[i+1].textContent,
                 Cantidad:tdsTabla[i+2].textContent,
                 Total:tdsTabla[i+3].textContent
                };
                tot += parseInt(producto.Total);
            }
        }
        var t = ''
        t += '<tr>'+
        '<th colspan="3">Total:</th>'+
        '<th colspan="1" id="total"></th>'+
        '</tr>';
        $("#tablacot").append(t);
        $('#total').html('$&nbsp;'+tot);
     });

});

function llena(obj) {
    var cadena = obj.data
    var producto = $('#cbxproducto').val();
    var cantidad = $('#cantidad').val();
    var d = '';
    if (cantidad < 0) {
        $('#cantidad').val('');
        $('#cantidad').focus();
        alert('La cantidad debe ser mayor que cero');
        
    }else{
        for(f=0;f<cadena.length;f++)
        {
            if(producto == cadena[f].Producto){
                var total = cadena[f].PrecioVenta * cantidad;
                d += '<tr>'+
                '<td>'+cadena[f].Producto+'</td>'+
                '<td>'+cadena[f].PrecioVenta+'</td>'+
                '<td>'+cantidad+'</td>'+
                '<td>'+total+'</td>'+
                '</tr>';
                $("#tablacot").append(d);
                break;
            }
            
        };
    }
}
