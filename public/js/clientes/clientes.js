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
            //    $("#msg").html(data.msg);
                console.log(data);
            }
         });

      })


});


function tabla_clientes(){





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

