$(function () {

    $('#rol_alta.select2').select2({
        multiple:true,
        theme: "classic",
        dropdownParent: $('#add-contact')
    });

    $('#rol_alta_ed').select2({
        multiple:true,
        theme: "classic",
        dropdownParent: $('#editar-contact')
    });


    $("#formNuevoUsuario").on("submit", function(e){

        e.preventDefault();

        let datos = $(this).serialize() ;

        $.ajax({
            type:'POST',
            url:'nuevo_usuario',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){
                console.log(data);
                tabla_usuarios();
                $('#cerrarModalNuevo').trigger("click");

            }
         });

      });

      tabla_usuarios();

function tabla_usuarios(){

    $('#detallesLista').empty();

    $.get( 'api/lista_usuarios',function(data){
        console.info(data);

        let tabla = '';


        $.each(data,function(i,ele){
            if(ele.activo == 1){
            $status = '<span class="badge bg-light-success text-success fw-normal"> Activo</span>';
             }else {
             $status = '<span class="badge bg-light-warning text-warning fw-normal">Inactivo</span>';
             }
             console.log(ele.roles);

            tabla += '<tr>'+
                        '<td>'+ ele.id +'</td>'+
                        '<td>'+ ele.name+'</td>'+
                        '<td>'+ ele.email +'</td>'+
                        '<td>'+ ele.roles +'</td>'+
                        '<td>'+$status+'</td>'+
                        '<td> <button title="Detalles" onclick="detalle_usuario('+ele.id+')" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#detalle-contact" ><i class="fa fa-eye" aria-hidden="true"></i></button>'+
                             '<button title="Editar" onclick="editar_usuario('+ele.id+')" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#editar-contact"><i class="fa fa-edit" aria-hidden="true"></i></button>'+
                             '<button title="Eliminar" onclick="delete_usuario('+ele.id+')" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" data-bs-toggle="modal" data-bs-target="#delete-contact"><i class="fa fa-trash" aria-hidden="true"></i></button></td>'+

                    '</tr>';

        });
        $('#detallesLista').append(tabla);

    });


}

});



function detalle_usuario(id){
    console.log(id);
}


function editar_usuario(id){
    console.log(id);
}


function delete_usuario(id){
    console.log(id);
}

