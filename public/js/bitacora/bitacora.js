$(function () {

    // $( ".estados" ).change(function () {

    //     var fk_id_estados = $(this).val();

    //     $.get('api/obtener_municipios',{fk_id_estados:fk_id_estados},function(data){
    //         var municipios = '';

    //         $.each(data,function(i,ele){

    //             municipios += '<option value="'+ ele.id +'">'+ ele.municipio +'</option>';

    //         });
    //         $('.municipios').empty();
    //         $('.municipios').append(municipios);

    //     });

    //     $.get('api/obtener_codigos_postales',{fk_id_estados:fk_id_estados},function(data){
    //         console.info(data);
    //         var cp = '';

    //         $.each(data,function(i,ele){

    //             cp += '<option value="'+ ele.cp +'">'+ ele.cp +'</option>';

    //         });
    //         $('.codigosPostales').empty();
    //         $('.codigosPostales').append(cp);

    //     });

    // }).change();

    $("#formNuevaTarea").on("submit", function(e){

        e.preventDefault();

        Swal.fire({
            title: "¿Esta seguro que desea agregar una nueva tarea?",
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
                    url:'nueva_tarea',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data:datos,
                    success:function(data){

                        // tabla_clientes();
                        cargarListaComentarios();
                        $('#cerrarModalNuevo').trigger("click");
                        Swal.fire("¡Éxito!", "Se agrego una nueva tarea.", "success");

                    }
                 });

            }
          });

        let datos = $(this).serialize() ;

      });

    //   $("#formEditarCliente").on("submit", function(e){

    //     e.preventDefault();

    //      Swal.fire({
    //         title: "¿Esta seguro que quiere modificar este cliente?",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor: "#d33",
    //         cancelButtonText: "Cancelar",
    //         confirmButtonText: "Aceptar",
    //       }).then((result) => {
    //         if (result.value) {

    //             let datos = $(this).serialize() ;

    //             $.ajax({
    //                 type:'POST',
    //                 url:'editar_cliente',
    //                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //                 data:datos,
    //                 success:function(data){
    //                     console.log(data);
    //                     tabla_clientes();
    //                     $('#cerrarModalEditar').trigger("click");
    //                     Swal.fire("¡Éxito!", "Se modifico la información del cliente.", "success");

    //                 }
    //             });

    //         }
    //       });

    //   });

    $("#formComentarios").on("submit", function(e){

        e.preventDefault();

        Swal.fire({
            title: "¿Esta seguro que desea agregar un nuevo comentario?",
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
                    url:'nuevo_comentarios',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data:datos,
                    success:function(data){

                        // tabla_clientes();
                        cargarListaComentarios($('#fk_id_tareas').val());
                        $('#nuevoComentario').val('');
                        $('#cerrarModalNuevo').trigger("click");
                        Swal.fire("¡Éxito!", "Se agrego una nueva tarea.", "success");

                    }
                 });

            }
          });

        let datos = $(this).serialize() ;

      });


});

cargarUsuarios();

function cargarUsuarios(){



    $.get( 'api/obtener_usuarios',function(data){

        let listaUsuariosGrupo = '';
        let selectUsuarios = '';

        $('#listaTareasActivas').empty();


        $.each(data,function(i,ele){
            console.log(i,ele);
            listaUsuariosGrupo += '<li class="mb-3">'+
                                    '<a href="javascript:void(0)" onclick="cargarListaTareasActivas('+ ele.id +')">'+
                                        '<div class="d-flex align-items-center">'+
                                            '<img src="../../assets/images/users/1.jpg" class="rounded-circle" width="40">'+
                                            '<div class="ms-3">'+
                                                '<h5 class="mb-0">'+ ele.name +'</h5>'+
                                                '<small class="text-success">'+ ele.roles[0].name +'</small>'+
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

    $.get('api/obtener_clientes',function(data){

        $.each(data,function(i,ele){

            selectClientes += '<option value="'+ ele.id +'">'+ ele.nombre_razon_social +'</option>';

        });

        $('#selectClientes').append(selectClientes);

    });

}



function cargarListaTareasActivas(id){

    $('#listaTareasActivas').empty();
    $('#listaComentarios').empty();

    $.get( 'api/obtener_lista_tareas_activas',{fk_id_users:id},function(data){

        let listaTareasActivas = '';

        $.each(data,function(i,ele){

            if( ele.fk_id_prioridades == 1 ){
                prioridad = 'border-info';
            }else if( ele.fk_id_prioridades == 2 ){
                prioridad = 'border-warning';
            }else if( ele.fk_id_prioridades == 3 ){
                prioridad = 'border-danger';
            }

            listaTareasActivas += '<li class="list-group-item border-0 mb-0 pb-3 pe-3 ps-0" data-role="task">'+
                                    '<div class="form-check border-start border-2 '+ prioridad +' ps-1">'+
                                        // '<input type="checkbox" class="form-check-input ms-2" id="inputSchedule" name="inputCheckboxesSchedule">'+
                                        '<label for="inputSchedule" class="form-check-label ps-2 fw-normal">'+
                                            '<a href="#" onclick="cargarListaComentarios('+ ele.id +');"><span>'+ ele.tarea +'</span></a>'+
                                        '</label>',
                                    '</div>',
                                   '</li>';

        });


        $('#listaTareasActivas').append(listaTareasActivas);
        cargarListaTareas(id);

    });


}


function cargarListaTareas(fk_id_users){
    $('#detallesLista').empty();
    $.get( 'api/obtener_lista_tareas',{fk_id_users:fk_id_users},function(data){

        let listaTareas = '';
        console.log(data);
        $.each(data,function(i,ele){

            listaTareas += '<tr>'+
                                '<td>'+ ele.id +'</td>'+
                                '<td>'+ ele.clientes.nombre_razon_social +'</td>'+
                                '<td>'+ ele.tarea +'</td>'+
                                '<td>'+ ele.prioridades.prioridad +'</td>'+
                                '<td>'+ ele.usuarios_alta.name +'</td>'+
                                '<td>'+ ele.usuarios_asignado.name +'</td>'+
                                '<td>'+ ele.fecha_inicio +'</td>'+
                                '<td>'+ ele.fecha_final +'</td>'+
                                '<td>'+ ele.estatus.estatus +'</td>'+
                                '<td>'+
                                    '<div class="dropdown dropstart">'+
                                        '<a href="table-basic.html#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">'+
                                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm">'+
                                                '<circle cx="12" cy="12" r="1"></circle>'+
                                                '<circle cx="19" cy="12" r="1"></circle>'+
                                                '<circle cx="5" cy="12" r="1"></circle>'+
                                            '</svg>'+
                                        '</a>'+
                                        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">'+
                                            '<li>'+
                                                '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info-header-modal-2" onclick="cargarInfoTarea('+ele.id+')">Editar</a>'+
                                            '</li>'+
                                            '<li>'+
                                                '<a class="dropdown-item" onclick="eliminarCliente(1)">Borrar</a>'+
                                            '</li>'+
                                        '</ul>'+
                                    '</div>'+
                                '</td>'+
                            '</tr>';




        });


        $('#detallesLista').append(listaTareas);
    });
}


function cargarInfoTarea(id){

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



function cargarListaComentarios(id){

    $('#listaComentarios').empty();

    $.get( 'api/obtener_lista_comentarios',{fk_id_tareas:id},function(data){

        let listaComentarios = '';
        let idUsuarioLogin = $('#id_usuario').val();

        $.each(data,function(i,ele){

            if( parseInt(idUsuarioLogin) == ele.fk_id_users ){

                listaComentarios += '<li class="odd mt-4">'+
                                    '<div class="chat-content ps-3 d-inline-block text-end">'+
                                        '<div class=" message fs-3 bg-light-inverse d-inline-block mb-2 font-weight-medium">'+ ele.comentario +'</div>'+
                                        '<br>'+
                                    '</div>'+
                                    '<div class="chat-time d-inline-block text-end fs-2 font-weight-medium">'+ ele.fecha +'</div>'+
                                   '</li>';
            }else{

                listaComentarios += '<li class="mt-4">'+
                                        '<div class="chat-img d-inline-block align-top">'+
                                            '<img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">'+
                                        '</div>'+
                                        '<div class="chat-content ps-3 d-inline-block">'+
                                        '   <h5 class="text-muted fs-3 fw-normal">'+ele.usuarios.name+'s</h5>'+
                                            '<div class="message fs-3 bg-primary text-white d-inline-block mb-2 fw-normal shadow">'+ ele.comentario +'</div>'+
                                        '</div>'+
                                        '<div class="chat-time d-inline-block text-end fs-2 font-weight-medium">'+ ele.fecha +'</div>'+
                                    '</li>';

            }




        });
        $('#fk_id_tareas').val(id);
        $('#listaComentarios').append(listaComentarios);

    });


}

// function eliminarCliente(id){

//     Swal.fire({
//         title: "¿Esta seguro que quiere eliminar este cliente?",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         cancelButtonText: "Cancelar",
//         confirmButtonText: "Aceptar",
//         }).then((result) => {
//         if (result.value) {

//             $.ajax({
//                 type:'POST',
//                 url:'eliminar_cliente',
//                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//                 data:{id:id},
//                 success:function(data){
//                     tabla_clientes();
//                     $('#cerrarModalEditar').trigger("click");
//                     Swal.fire("¡Éxito!", "Se elimino el registro del cliente.", "success");

//                 }
//             });

//         }
//     });
// }


