$(function () {

    $("#formNuevoCliente").on("submit", function(e){

        e.preventDefault();

        let datos = $(this).serialize() ;

        $.ajax({
            type:'POST',
            url:'nuevo_cliente',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){
                console.log(data);
                tabla_clientes();

            }
         });

      })


});

tabla_clientes();

function tabla_clientes(){

    $('#detallesLista').empty();

    $.get( 'api/lista_clientes',function(data){
        console.info(data);

        let tabla = '';

        $.each(data,function(i,ele){

            tabla += '<tr>'+
                        '<td>'+ ele.id +'</td>'+
                        '<td>'+ ele.nombre_razon_social +'</td>'+
                        '<td>'+ ele.rfc +'</td>'+
                        '<td>'+ ele.email +'</td>'+
                        '<td>'+ ele.pagina_web +'</td>'+
                    '</tr>';

        });
        $('#detallesLista').append(tabla);

    });


}

function detalle_usuario(id){
    console.log(id);
}


function editar_usuario(id){
    console.log(id);
}


function delete_usuario(id){
    console.log(id);
}

