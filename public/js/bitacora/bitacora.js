
$(function () {

    $("#formNuevaTarea").on("submit", function(e){

        e.preventDefault();

        var formData = new FormData(this);

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
                    data: formData,
                    processData:false,
                    contentType: false,
                    success:function(data){
                        console.log("Aqui ando !!!",data);
                        cargarListaComentarios();
                        $('#cerrarModalNuevo').trigger("click");
                        Swal.fire("¡Éxito!", "Se agrego una nueva tarea.", "success");

                    },
                    error: function (e) {

                        mensajeError();

                    }
                 });
            }
          });



      });

    $("#formEditarTarea").on("submit", function(e){

        e.preventDefault();

         Swal.fire({
            title: "¿Esta seguro que quiere modificar la tarea?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Aceptar",
          }).then((result) => {
            if (result.value) {

                var formData = new FormData(this);

                $.ajax({
                    type:'POST',
                    url:'editar_tarea',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData:false,
                    contentType: false,
                    success:function(data){

                        let usuariosAsignado = $('#editar_fk_id_users_asignado').val();

                        cargarListaTareasActivas(usuariosAsignado);

                        $('#cerrarModalEditar').trigger("click");
                        Swal.fire("¡Éxito!", "Se modifico la información de la tarea.", "success");

                    },
                    error: function (e) {

                        mensajeError();

                    }
                });

            }
          });

      });

    $("#formRechazarTarea").on("submit", function(e){

            e.preventDefault();
            let datos = $(this).serialize() ;
            Swal.fire({
                title: "¿Esta seguro desea rechazar la tarea?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Cancelar",
                confirmButtonText: "Aceptar",
            }).then((result) => {
            if (result.value) {

                var formData = new FormData(this);

                $.ajax({
                    type:'POST',
                    url:'rechazar_tarea',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData:false,
                    contentType: false,
                    success:function(data){

                        cargarListaComentarios();

                        $('#cerrarModalRechazar').trigger("click");
                        Swal.fire("¡Éxito!", "Se elimino el registro de la tarea.", "success");

                        cargarListaTareasActivas($('#usuarioActivo').val());


                    }
                });

            }
        });

    });

    $("#formComentarios").on("submit", function(e){

        e.preventDefault();

        Swal.fire({
            title: "¿Esta seguro que desea agregar un nuevo comentario?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Aceptar",
        }).then((result) => {
            if (result.value) {

                var datos = $(this).serialize() ;

                console.info(datos);

                $.ajax({
                    type:'POST',
                    url:'nuevo_comentarios',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: datos,
                    success:function(data){

                        cargarListaComentarios($('#fk_id_tareas').val());

                        $('#nuevoComentario').val('');
                        $('#cerrarModalNuevo').trigger("click");
                        Swal.fire("¡Éxito!", "Se agrego una nueva tarea.", "success");

                        cargarListaTareasActivas($('#usuarioActivo').val());


                    }
                });

            }
        });
    });


    $( "#fk_id_clientes" ).change(function () {

        $('#tipoTareas').empty();


        $('#tipoTareas').append('<option value="0">Nueva Tarea</option>');

        $.get('api/obtener_lista_tareas_predefinidas',{fk_id_clientes:$(this).val()},function(data){

            if(data.length != 0){

                var tareasPredefinidas = '';

                $.each(data,function(i,ele){
                    tareasPredefinidas += '<option value="predefinida_'+ ele.sub_tareas_predefinidas.fk_id_tipo_campo_html+'_'+ ele.fk_id_sub_tareas_predefinidas +'">'+ele.sub_tareas_predefinidas.tareas_predefinidas.tarea_predefinida+' - '+ ele.sub_tareas_predefinidas.sub_tarea_predefinida +'</option>';

                });

                tareasPredefinidas = '<optgroup label="Tareas Predefinidas">'+tareasPredefinidas+'</optgroup>';

                $('#tipoTareas').append(tareasPredefinidas);


            }

        });

        $.get('api/obtener_lista_obligaciones',{fk_id_clientes:$(this).val()},function(data){

            if(data.length != 0){

                 var obligaciones = '';

                $.each(data,function(i,ele){

                    obligaciones += '<option value="obligaciones_'+ ele.fk_id_obligaciones +'">'+ ele.obligaciones.obligacion +'</option>';

                });

                obligaciones = '<optgroup label="Obligaciones">'+obligaciones+'</optgroup>';

                $('#tipoTareas').append(obligaciones);
            }

        });

        $.get('api/obtener_lista_tareas_estandar',{fk_id_clientes:$(this).val()},function(data){

            if(data.length != 0){

                var tareasEstandar = '';

                $.each(data,function(i,ele){

                    tareasEstandar += '<option value="estandar_'+ ele.fk_id_tareas_estandar +'">'+ ele.tareas_estandar.tarea_estandar +'</option>';

                });
                tareasEstandar = '<optgroup label="Tareas Estandar">'+tareasEstandar+'</optgroup>';

                $('#tipoTareas').append(tareasEstandar);
            }

        });

        $( "#tipoTareas" ).change();

    }).change();


    $( "#tipoTareas" ).change(function () {

        var selectTarea = $(this).val();
        var campoDinamico = '';

        var tipoTarea = selectTarea.split("_") ;

        switch( tipoTarea[0] ){
            case 'predefinida':

                if(tipoTarea[1] == 1){

                    campoDinamico = '<div class="col-md-12">'+
                                        '<div class="mb-3">'+
                                            '<label>'+ $( "#tipoTareas option:selected" ).text() +'</label>'+
                                            '<input type="text" class="form-control" name="tarea[sub_tarea]" >'+
                                        '</div>'+
                                    '</div>'+
                                    '<input type="hidden" name="tarea[tarea]" value="'+ $( "#tipoTareas option:selected" ).text() +'">'+
                                    '<input type="hidden" name="tarea[fk_id_sub_tareas_predefinidas]" value="'+ tipoTarea[2] +'">';

                }else if( tipoTarea[1] == 2 ){

                    campoDinamico = '<div class="col-md-12">'+
                                        '<div class="mb-3">'+
                                            '<label>'+ $( "#tipoTareas option:selected" ).text() +'</label>'+
                                            '<input type="date" class="form-control" name="tarea[fecha_sub_tarea]" ></input>'+
                                        '</div>'+
                                    '</div>'+
                                    '<input type="hidden" name="tarea[tarea]" value="'+ $( "#tipoTareas option:selected" ).text() +'">'+
                                    '<input type="hidden" name="tarea[fk_id_sub_tareas_predefinidas]" value="'+ tipoTarea[2] +'">';
                }


            break;

            case 'obligaciones':
                campoDinamico =  '<input type="hidden" name="tarea[tarea]" value="'+ $( "#tipoTareas option:selected" ).text() +'">'+
                                 '<input type="hidden" name="tarea[fk_id_obligaciones]" value="'+ tipoTarea[1] +'">';
            break;

            case 'estandar':
                campoDinamico = '<input type="hidden" name="tarea[tarea]" value="'+ $( "#tipoTareas option:selected" ).text() +'">'+
                                '<input type="hidden" name="tarea[fk_id_tareas_estandar]" value="'+ tipoTarea[1] +'">';

            break;

            default:
                campoDinamico =  '<div class="col-md-12">'+
                                    '<div class="mb-3">'+
                                        '<label>Tarea a Realizar</label>'+
                                        '<textarea class="form-control" rows="5" name="tarea[tarea]" ></textarea>'+
                                    '</div>'+
                                '</div>';
            break;

        }

        $('#campoDinamico').empty();
        $('#campoDinamico').append(campoDinamico);

    });



    $('#tipoTareas').select2({
        dropdownParent: $('#modal_nueva_tarea_predefinida')
    });

});

cargarUsuarios();

function cargarUsuarios(fk_id_grupos = null){

    $('#listaUsuariosGrupo').empty();
    $('#fk_id_users_asignado').empty();
    $('#editar_fk_id_users_asignado').empty();
    $('#fk_id_users_asignado').empty();

    if( fk_id_grupos == null ){
        fk_id_grupos = 1;
    }


    $.get( 'api/obtener_usuarios_grupos',{ fk_id_grupos:fk_id_grupos },function(data){

        let listaUsuariosGrupo = '';
        let selectUsuarios = '';

        $('#listaTareasActivas').empty();

        $.each(data,function(i,ele){

            listaUsuariosGrupo += '<li class="mb-3">'+
                                    '<a href="javascript:void(0)" onclick="cargarListaTareasActivas('+ ele.id +')">'+
                                        '<div class="d-flex align-items-center">'+
                                            '<img src="../../assets/images/users/1.jpg" class="rounded-circle" width="40">'+
                                            '<div class="ms-3">'+
                                                '<h5 class="mb-0">'+ ele.name +'</h5>'+
                                                '<small class="text-success">'+ ele.roles.name +'</small>'+
                                            '</div>'+

                                        '</div>'+
                                    '</a>'+
                                '</li>';

            selectUsuarios += '<option value="'+ ele.id +'">'+ ele.name +'</option>';


        });
        $('#listaUsuariosGrupo').append(listaUsuariosGrupo);
        $('#fk_id_users_asignado').append(selectUsuarios);
        $('#editar_fk_id_users_asignado').append(selectUsuarios);

    });
}

cargarClientes();

function cargarClientes(){

    $('#fk_id_clientes').empty();
    $('#editar_fk_id_clientes').empty();

    $.get('api/obtener_clientes',function(data){

        var selectClientes = '<option value="" disabled selected hidden>Seleccionar Cliente...</option>';

        $.each(data,function(i,ele){

            selectClientes += '<option value="'+ ele.id +'">'+ ele.nombre_cliente +'</option>';

        });

        $('#fk_id_clientes').append(selectClientes);
        $('#editar_fk_id_clientes').append(selectClientes);

    });

}


cargarGrupos();

function cargarGrupos(){

    if( document.getElementById('grupos') != null ){

        $.get('api/obtener_grupos',function(data){
            var grupos = '';
            $.each(data,function(i,ele){

                grupos += ' <li><a class="dropdown-item" href="javascript:void(0)" onclick="cargarUsuarios('+ ele.id +')">'+ ele.name +'</a></li>';

            });

            $('#listaGrupos').append(grupos);

        });

    }



}


function cargarListaTareasActivas(id){

    $('#usuarioActivo').val(id);


    $('#listaTareasActivas').empty();
    $('#listaComentarios').empty();

    $.get( 'api/obtener_lista_tareas_activas',{fk_id_users:id},function(data){

        let listaTareasActivas = '';

        $.each(data,function(i,ele){

            if( ele.fk_id_prioridades == 1 ){
                prioridad = '<span class="badge bg-light-info text-info rounded-pill font-weight-medium fs-1 py-1 ">Baja</span>';
            }else if( ele.fk_id_prioridades == 2 ){
                prioridad = '<span class="badge bg-light-warning text-warning rounded-pill font-weight-medium fs-1 py-1 ">Media</span>';
            }else if( ele.fk_id_prioridades == 3 ){
                prioridad = '<span class="badge bg-light-danger text-danger rounded-pill font-weight-medium fs-1 py-1">Alta</span>';
            }

            var subTareas = '';

            if( ele.sub_tarea != null ){
                subTareas = ele.sub_tarea;
            }


            listaTareasActivas += '<div class="d-flex flex-row comment-row border-bottom p-3">'+
                                    '<div class="comment-text w-100 p-3">'+
                                        '<h5 class="font-weight-medium"><a href="#" onclick="cargarListaComentarios('+ ele.id +');"><span>'+ ele.tarea +'</span></a></h5>'+
                                        '<p class="mb-1 fs-3 text-muted">'+subTareas+'</p>'+
                                        '<div class="comment-footer mt-2">'+
                                        ' <div class="d-flex align-items-center">'+
                                                prioridad+
                                                '<span class="action-icons">'+
                                                '<a href="#" class="ps-3" data-bs-toggle="modal" data-bs-target="#info-header-modal-2" onclick="cargarInfoTarea('+ele.id+')"><i class="ti-pencil-alt"></i></a>'+
                                                '<a href="javascript:void(0)" class="ps-3" onclick="solicitarTerminarTarea('+ele.id+')"><i class="ti-check"></i></a>'+
                                                '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal_archivos_tareas" class="ps-3"><i class="ti-files" onclick="cargarListaArchivos('+ele.id+')" ></i></a>'+
                                                '</span>'+
                                            '</div>'+
                                            '<span class="text-muted ms-auto fw-normal fs-2 d-block mt-2 text-end">'+ele.fecha_registro+'</span>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';

        });



        $('#listaTareasActivas').append(listaTareasActivas);
        cargarListaTareas(id);
        cargarListaTareasPorTerminar(id);

    });

}


function cargarListaTareas(fk_id_users){

    $('#zero_config2').empty();

    $('#zero_config2').DataTable({
        searchDelay: 400,
        ajax: {
            url: "api/obtener_lista_tareas?fk_id_users="+fk_id_users,
            dataSrc: function(json){
                return json;
            }
        },
        // order: [[0, 'asc']],
        // ordering:true,
        columns:[
            //   { data: "id", defaultContent: "---", title: "#2" },
              { data: "clientes.nombre_cliente", defaultContent: "---", title: "Cliente" },
              { data: "tarea", defaultContent: "---", title: "Tarea" },
              { data: "prioridades.prioridad", defaultContent: "---", title: "Prioridad" },
              { data: "usuarios_alta.name", defaultContent: "---", title: "Asigno" },
              { data: "usuarios_asignado.name", defaultContent: "---", title: "Realiza" },
              { data: "fecha_inicio", defaultContent: "---", title: "Fecha Inicio" },
              { data: "fecha_final", defaultContent: "---", title: "Fecha Final" },
              { data: "estatus.estatus", defaultContent: "---", title: "Estatus"  },

              {data:function(row, type){
               const id = row.id;

               let botonAcciones =  (document.getElementById('nuevaTareaPredefinida') == null ) ? '' : '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal_detalle_tareas" onclick="cargarDetalleTarea('+ id +')">Detalle</a>'+
                                                                                        '</li>'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info-header-modal-2" onclick="cargarInfoTarea('+id+')">Editar</a>'+
                                                                                        '</li>'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" onclick="eliminarTarea('+ id +')">Borrar</a>'+
                                                                                        '</li>'+
                                                                                    '</ul>';


                return  '<div class="dropdown dropstart">'+
                                                '<a href="table-basic.html#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">'+
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm">'+
                                                        '<circle cx="12" cy="12" r="1"></circle>'+
                                                        '<circle cx="19" cy="12" r="1"></circle>'+
                                                        '<circle cx="5" cy="12" r="1"></circle>'+
                                                    '</svg>'+
                                                '</a>'+
                                                botonAcciones+
                                            '</div>';

              }, title: "Acciones"}
        ],
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, 'All']
        ],
        destroy: true,
        paging:true,
        info:true,
        // responsive: true,
        // dom: "Bfrtip",
        // buttons: ["copy", "csv", "excel", "pdf", "print"],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }

    });


}


function cargarListaTareasPorTerminar(fk_id_users){

    $('#zero_config1').empty();

    $('#zero_config1').DataTable({
        searchDelay: 400,
        ajax: {
            url: "api/obtener_lista_tareas_por_terminar?fk_id_users="+fk_id_users,
            dataSrc: function(json){
                return json;
            }
        },
        // order: [[0, 'asc']],
        // ordering:true,
        columns:[
            //   { data: "id", defaultContent: "---", title: "#2" },
              { data: "clientes.nombre_cliente", defaultContent: "---", title: "Cliente" },
              { data: "tarea", defaultContent: "---", title: "Tarea" },
              { data: "prioridades.prioridad", defaultContent: "---", title: "Prioridad" },
              { data: "usuarios_alta.name", defaultContent: "---", title: "Asigno" },
              { data: "usuarios_asignado.name", defaultContent: "---", title: "Realiza" },
              { data: "fecha_inicio", defaultContent: "---", title: "Fecha Inicio" },
              { data: "fecha_final", defaultContent: "---", title: "Fecha Final" },
              { data: "estatus.estatus", defaultContent: "---", title: "Estatus"  },

              {data:function(row, type){
               const id = row.id;

               let botonAcciones =  (document.getElementById('nuevaTareaPredefinida') == null ) ? '' : '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal_detalle_tareas" onclick="cargarDetalleTarea('+ id +')">Detalle</a>'+
                                                                                        '</li>'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal_rechazar_tarea" onclick="rechazarTarea('+ id +')">Rechazar</a>'+
                                                                                        '</li>'+
                                                                                        '<li>'+
                                                                                            '<a class="dropdown-item" onclick="terminarTarea('+ id +')">Terminar</a>'+
                                                                                        '</li>'+
                                                                                    '</ul>';


                return  '<div class="dropdown dropstart">'+
                                                '<a href="table-basic.html#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">'+
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm">'+
                                                        '<circle cx="12" cy="12" r="1"></circle>'+
                                                        '<circle cx="19" cy="12" r="1"></circle>'+
                                                        '<circle cx="5" cy="12" r="1"></circle>'+
                                                    '</svg>'+
                                                '</a>'+
                                                botonAcciones+
                                            '</div>';

              }, title: "Acciones"}
        ],
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, 'All']
        ],
        destroy: true,
        paging:true,
        info:true,
        // responsive: true,
        // dom: "Bfrtip",
        // buttons: ["copy", "csv", "excel", "pdf", "print"],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }

    });


}

function cargarListaArchivos(fk_id_tareas){

    $('#listaArchivosTareas').empty();

    $('#listaArchivosTareas').DataTable({
        searchDelay: 400,
        ajax: {
            url: "api/obtener_lista_tareas_archivos?fk_id_tareas="+fk_id_tareas,
            dataSrc: function(json){
                return json;
            }
        },
        columns:[
              { data: "usuarios.name", defaultContent: "---", title: "Usuario" },
              { data: "fecha_registro", defaultContent: "---", title: "Fecha Registro" },
              {data:function(row, type){

                return  '<a href="tareas/'+row.nombre_archivo+'" download>'+
                            '<label>'+row.nombre_archivo+'</label>'+
                        '</a>';

              },
            title: "Archivo"}
        ],
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, 'All']
        ],
        destroy: true,
        paging:true,
        info:true,
        // responsive: true,
        // dom: "Bfrtip",
        // buttons: ["copy", "csv", "excel", "pdf", "print"],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }

    });


}


function cargarInfoTarea(id){

    $.get('api/datos_tarea',{id:id},function(data){

        var campoDinamico = '';

        $.each(data,function(i,ele){

            $('#editar_'+i).val(ele).change();



            switch( i ){
                case 'fk_id_sub_tareas_predefinidas':

                    if( ele != null ){

                        if( data.sub_tareas_predefinidas.fk_id_tipo_campo_html == 1){

                            campoDinamico = '<div class="col-md-12">'+
                                                '<div class="mb-3">'+
                                                    '<label>'+ data.tarea +'</label>'+
                                                    '<input type="text" class="form-control" name="tarea[sub_tarea]" value="'+ data.sub_tarea +'">'+
                                                '</div>'+
                                            '</div>';

                        }else if( data.sub_tareas_predefinidas.fk_id_tipo_campo_html == 2 ){

                            campoDinamico = '<div class="col-md-12">'+
                                                '<div class="mb-3">'+
                                                    '<label>'+ data.tarea +'</label>'+
                                                    '<input type="date" class="form-control" name="tarea[fecha_sub_tarea]" value="'+ data.fecha_sub_tarea +'"></input>'+
                                                '</div>'+
                                            '</div>';
                        }

                    }

                break;


            }


        });


        $('#editarCampoDinamico').empty();
        $('#editarCampoDinamico').append(campoDinamico);
    });




}

function cargarDetalleTarea(id){

    $.get('api/detalle_tarea',{id:id},function(data){
        console.info(data);
        $.each(data,function(i,ele){
            // console.info(i,ele);
            $('#detalle_'+i).empty();
            $('#detalle_'+i).append(ele);

            if( i == 'comentarios' ){

                var listaComentarios = '';

                $.each(ele,function(j,comentarios){


                    listaComentarios += '<li class="d-flex align-items-start">'+
                                            '<img class="me-3 rounded" src="../../assets/images/users/2.jpg" alt="Generic placeholder image" width="60">'+
                                            '<div class="media-body">'+
                                                '<h5 class="mt-0 mb-1">'+comentarios.usuarios.name+'</h5>'+
                                                comentarios.comentario+
                                            '</div>'+
                                        '</li>'+
                                        '<hr>';

                });

                $('#detalle_'+i).empty();
                $('#detalle_'+i).append(listaComentarios);

            }

            if( i == 'estatus' ){

                var estatus = '';

                switch( ele.id ){

                    case 1:
                        estatus = '<span class="badge bg-primary">'+ ele.estatus +'</span>';
                    break;
                    case 2:
                        estatus = '<span class="badge bg-warning">'+ ele.estatus +'</span>';
                    break;
                    case 3:
                        estatus = '<span class="badge bg-success">'+ ele.estatus +'</span>';
                    break;
                    case 4:
                        estatus = '<span class="badge bg-secondary">'+ ele.estatus +'</span>';
                    break;

                }

                $('#detalle_'+i).empty();
                $('#detalle_'+i).append(estatus);

            }

            if( i == 'usuarios_alta' ){

                $('#detalle_'+i).empty();
                $('#detalle_'+i).append(ele.name);

            }

            if( i == 'usuarios_asignado' ){

                $('#detalle_'+i).empty();
                $('#detalle_'+i+'_email').empty();

                $('.detalle_'+i).append(ele.name);
                $('#detalle_'+i+'_email').append(ele.email);

            }

            if( i == 'archivos' ){



                var archivos = '';

                $.each(ele,function(j,archivo){


                    archivos +=  '<li class="list-group-item">'+
                                    '<a href="tareas/'+archivo.nombre_archivo+'" download>'+
                                    '<label>'+archivo.nombre_archivo+'</label>'+
                                    '</a>'+
                                '</li>';

                });

                $('#detalle_'+i).empty();
                $('#detalle_'+i).append(archivos);

            }







        });


        // $('#editarCampoDinamico').empty();
        // $('#editarCampoDinamico').append(campoDinamico);
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

function eliminarTarea(id){

    Swal.fire({
            title: "¿Esta seguro que quiere eliminar este tarea?",
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
                url:'eliminar_tarea',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id},
                success:function(data){

                    let usuariosAsignado = $('#editar_fk_id_users_asignado').val();

                    cargarListaTareasActivas(usuariosAsignado);

                    $('#cerrarModalEditar').trigger("click");
                    Swal.fire("¡Éxito!", "Se elimino el registro de la tarea.", "success");

                }
            });

        }
    });
}


function solicitarTerminarTarea(id){

    Swal.fire({
            title: "¿Esta seguro desea solicitar terminar la tarea?",
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
                url:'solicitar_terminar_tarea',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id},
                success:function(data){

                    $('#cerrarModalEditar').trigger("click");
                    Swal.fire("¡Éxito!", "Se elimino el registro de la tarea.", "success");

                    cargarListaTareasActivas($('#usuarioActivo').val());
                }
            });

        }
    });
}

function rechazarTarea(id){

    $('#rechazar_tarea_id').val(id);

    // Swal.fire({
    //         title: "¿Esta seguro desea rechazar la tarea?",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor: "#d33",
    //         cancelButtonText: "Cancelar",
    //         confirmButtonText: "Aceptar",
    //     }).then((result) => {
    //     if (result.value) {

    //         $.ajax({
    //             type:'POST',
    //             url:'rechazar_tarea',
    //             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //             data:{id:id},
    //             success:function(data){

    //                 cargarListaComentarios();

    //                 $('#cerrarModalEditar').trigger("click");
    //                 Swal.fire("¡Éxito!", "Se elimino el registro de la tarea.", "success");

    //                 cargarListaTareasActivas($('#usuarioActivo').val());


    //             }
    //         });

    //     }
    // });
}


function terminarTarea(id){

    Swal.fire({
            title: "¿Esta seguro desea terminar la tarea?",
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
                url:'terminar_tarea',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id},
                success:function(data){

                    $('#cerrarModalEditar').trigger("click");
                    Swal.fire("¡Éxito!", "Se elimino el registro de la tarea.", "success");

                    cargarListaTareasActivas($('#usuarioActivo').val());

                }
            });

        }
    });
}

function mensajeError(){

    Swal.fire({
        type: "error",
        title: "Oops...",
        text: "¡Lo siento, ocurrió un error!",
      });

}
