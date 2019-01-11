$(document).ready(function(){
    $("#masnombre").click(function(){
        var nom = $('#nomcliente').val();
        $('#nombrecliente').html(nom);
    });

/*
    $("#masproducto").click(function () {
        var prod = $('#cbxproducto').val();
        var d = '';
        d+= '<tr>'+
        '<td>'+prod+'</td>'+
        '</tr>';
        $("#tablacot").append(d);
       });
*/
});

