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

cargarUsuarios();

function cargarUsuarios(){

    $.get( 'api/obtener_usuarios',function(data){

        let listaUsuariosGrupo = '';
        let selectUsuarios = '';

        $.each(data,function(i,ele){

            listaUsuariosGrupo += '<li class="mb-3">'+
                                    '<a href="javascript:void(0)">'+
                                        '<div class="d-flex align-items-center">'+
                                            '<img src="../../assets/images/users/1.jpg" class="rounded-circle" width="40">'+
                                            '<div class="ms-3">'+
                                                '<h5 class="mb-0">'+ ele.name +'</h5>'+
                                                '<small class="text-success">'+ 'admin' +'</small>'+
                                            '</div>'+
                                            '<div class="ms-auto chat-icon">'+
                                                '<button type="button" class="btn btn-light-success text-success btn-circle btn-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-sm"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>'+
                                                '<button type="button" class="btn btn-light-info text-info btn-circle btn-circle ms-2">'+
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle feather-sm"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>'+
                                                '</button>'
                                            '</div>'+
                                        '</div>'+
                                    '</a>'+
                                '</li>';

            selectUsuarios += '<option value="'+ ele.id +'">'+ ele.name +'</option>';


        });
        $('#listaUsuariosGrupo').append(listaUsuariosGrupo);
        $('#selectUsuarios').append(selectUsuarios);

    });


}

cargarClientes();

function cargarClientes(){
    alert();
    $.get('api/obtener_clientes',function(data){

        $.each(data,function(i,ele){
            console.info(i,ele);
            selectClientes += '<option value="'+ ele.id +'">'+ ele.nombre_razon_social +'</option>';

        });

        $('#selectClientes').append(selectClientes);

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
