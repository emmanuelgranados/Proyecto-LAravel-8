$(function () {

    $( ".estados" ).change(function () {

        var fk_id_estados = $(this).val();

        $.get('api/obtener_municipios',{fk_id_estados:fk_id_estados},function(data){
            var municipios = '';

            $.each(data,function(i,ele){

                municipios += '<option value="'+ ele.id +'">'+ ele.municipio +'</option>';

            });
            $('.municipios').empty();
            $('.municipios').append(municipios);

        });

        $.get('api/obtener_codigos_postales',{fk_id_estados:fk_id_estados},function(data){
            console.info(data);
            var cp = '';

            $.each(data,function(i,ele){

                cp += '<option value="'+ ele.cp +'">'+ ele.cp +'</option>';

            });
            $('.codigosPostales').empty();
            $('.codigosPostales').append(cp);

        });

    }).change();

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

    $.get( 'api/lista_prospectos',function(data){
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
                          '<li><a class="dropdown-item" onclick="eliminarCliente('+ ele.id +')">Borrar</a></li>'+
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
                        console.info(a,ele3);
                        if( a == 'fk_id_estados' ){

                            cargarMunicipios('#editar_fk_id_municipios_'+j,ele3,ele2.fk_id_municipios);
                            cargarCodigosPostales('#editar_fk_id_codigos_postales_'+j,ele3,ele2.fk_id_codigos_postales);

                        }



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

function eliminarCliente(id){

    Swal.fire({
        title: "¿Esta seguro que quiere eliminar este cliente?",
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
                url:'eliminar_cliente',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id},
                success:function(data){
                    tabla_clientes();
                    $('#cerrarModalEditar').trigger("click");
                    Swal.fire("¡Éxito!", "Se elimino el registro del cliente.", "success");

                }
            });

        }
    });
}

function cargarMunicipios(campo,fk_id_estados,seleccion){

    $.get('api/obtener_municipios',{fk_id_estados:fk_id_estados},function(data){
        var municipios = '';

        $.each(data,function(i,ele){
            console.log( parseInt(seleccion) , ele.id);
            if( parseInt(seleccion) != ele.id ){
                municipios += '<option value="'+ ele.id +'">'+ ele.municipio +'</option>';
            }else{
                console.info('aqui ');
                municipios += '<option value="'+ ele.id +'" selected>'+ ele.municipio +'</option>';
            }

        });
        $(campo).empty();
        $(campo).append(municipios);

    });

}

function cargarCodigosPostales(campo,fk_id_estados,seleccion){

    $.get('api/obtener_codigos_postales',{fk_id_estados:fk_id_estados},function(data){
        var cp = '';

        $.each(data,function(i,ele){
            console.info(seleccion , ele.cp);
            if( parseInt(seleccion) != ele.cp ){
                cp += '<option value="'+ ele.cp +'">'+ ele.cp +'</option>';
            }else{
                cp += '<option value="'+ ele.cp +'" selected>'+ ele.cp +'</option>';
            }

        });
        $(campo).empty();
        $(campo).append(cp);

    });

}
