$(function () {

    $("#formNuevoCliente").on("submit", function(e){

        e.preventDefault();

        Swal.fire({
            title: "¿Esta seguro que desea agregar un nuevo cliente?",
            // text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Aceptar",
          }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:'POST',
                    url:'nuevo_cliente',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data:datos,
                    success:function(data){

                        tabla_clientes();
                        $('#cerrarModalNuevo').trigger("click");
                        Swal.fire("¡Éxito!", "Se agrego un nuevo registro de cliente.", "success");

                    }
                 });

            }
          });


        let datos = $(this).serialize() ;




      });

      $("#formEditarCliente").on("submit", function(e){

        e.preventDefault();




         Swal.fire({
            title: "¿Esta seguro que quiere modificar este cliente?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Aceptar",
          }).then((result) => {
            if (result.value) {

                let datos = $(this).serialize() ;

                $.ajax({
                    type:'POST',
                    url:'editar_cliente',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data:datos,
                    success:function(data){
                        console.log(data);
                        tabla_clientes();
                        $('#cerrarModalEditar').trigger("click");
                        Swal.fire("¡Éxito!", "Se modifico la información del cliente.", "success");

                    }
                });

            }
          });

      });


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
                        '<td><div class="dropdown dropstart">'+
                        '<a href="table-basic.html#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">'+
                          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>'+
                        '</a>'+
                        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">'+
                          '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info-header-modal-2" onclick="cargarInfoCliente('+ ele.id +')" >Editar</a></li>'+
                          '<li><a class="dropdown-item" href="table-basic.html#">Borrar</a></li>'+
                        '</ul>'+
                      '</div></td>'+
                    '</tr>';

        });
        $('#detallesLista').append(tabla);

    });


}

function cargarInfoCliente(id){

    $.get('api/datos_cliente',{id:id},function(data){

        $.each(data,function(i,ele){

            $('#editar_'+i).val(ele);

            if( i == 'direcciones' ){
                $.each(ele,function(j,ele2){
                    $.each(ele2,function(a,ele3){
                        $('#editar_'+a+'_'+j).val(ele3).change();

                        if( a == 'telefonos' ){

                            $.each(ele3,function(b,ele4){
                                $.each(ele4,function(c,ele5){

                                    $('#editar_telefonos_'+c+'_'+b).val(ele5).change();
                                });
                            });
                        }

                    });
                });
            }

        });
    });

}

