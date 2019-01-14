$(document).ready(function(){
    $("#masnombre").click(function(){
        var nom = $('#nomcliente').val();
        $('#nombrecliente').html(nom);
    });

    $("#btncalcular").click(function(){
        var tabla = document.getElementById('tablacot');
        var tdsTabla = tabla.getElementsByTagName("td");
        console.log(tdsTabla[5]);
        var i =0;
        for (i=0; i<tdsTabla.length; i++){
            console.log(tdsTabla[i]);
        }
    });

});

function llena(obj) {
    var cadena = obj.data
    var producto = $('#cbxproducto').val();
    var cantidad = $('#cantidad').val();
    var d = '';
    for(f=0;f<cadena.length;f++)
        {
            if(producto == cadena[f].Producto){
                var total = cadena[f].PrecioVenta * cantidad;
                d+= '<tr>'+
                '<td>'+cadena[f].Producto+'</td>'+
                '<td>'+cadena[f].PrecioVenta+'</td>'+
                '<td>'+cantidad+'</td>'+
                '<td>$'+total+'</td>'+
                '</tr>';
                $("#tablacot").append(d);
                //alert(d);
                //alert(cadena[f].Producto);
                break;
            }
            
        };
}
