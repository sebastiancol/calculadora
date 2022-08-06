$(document).ready(function(){

    $('#operaciones').change(function(){

        if( $('#operaciones').val()==1)
            console.log('suma');
        else if( $('#operaciones').val()==2)   
            console.log('resta');
        else if( $('#operaciones').val()==3)   
            console.log('multiplicacion');
        else
         console.log('division');    

        $.ajax({
            type: "post",
            url: "/index.php",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                console.log('todo esta ok');
            },
            error: function (response) {
                console.log('se ha producido un error');
            }
        });
    });
    $('#calcular').click(function(){

        let numero1=$('#numero1').val();
        console.log(numero1);
        let numero2=$('#numero2').val();
        console.log(numero2);
        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                alert('todo esta ok');
            },
            error: function (response) {
                alert('se ha producido un error');
            }
        });
    });
    
    $('#limpiar').click(function(){
        $('#datos')[0].reset();
        console.log('limpiar')
    });
    
});

/*function peticionAjax(url, datos, contenedor) {
    $.ajax({
        url : url,
        data : datos,
        type : 'GET',
        dataType: 'html',
        success : function (datos_respuesta) {

            if (contenedor === "principal") {
                $("#contenido-principal").html(datos_respuesta);

            } else {
                $("#sub-contenido").html(datos_respuesta);
            }

        },
        error:  function (xhr) {
            console.error("Se ha presentado un error :", xhr.status);
        }
    });
}*/

$(document).ready(function(){

    /*$('#table-resultado').DataTable({

        $.ajax({
            url : url,
            data : datos,
            type : 'GET',
            dataType: 'html',
            success : function (datos_respuesta) {
    
                if (contenedor === "principal") {
                    $("#contenido-principal").html(datos_respuesta);
    
                } else {
                    $("#sub-contenido").html(datos_respuesta);
                },
                columns[
                    data {},
                ] 
            },
            error:  function (xhr) {
                console.error("Se ha presentado un error :", xhr.status);
            }
        });
    });*/

    $('#menu').css('backgroundColor','gray');
    console.log(1)

    function mensaje(){
        console.log('dentro de la funcion');
    }

    $('#accion').on('click',mensaje());
    $('#accion').addClass('refuerzo');
    $('#accion').removeClass('paloma');
    

});


