$(function () {

    $('#selectPais').val(42).change();

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

            var cp = '';

            $.each(data,function(i,ele){

                cp += '<option value="'+ ele.cp +'">'+ ele.cp +'</option>';

            });
            $('.codigosPostales').empty();
            $('.codigosPostales').append(cp);

        });

    }).change();

    $(".formNuevoCliente").on("submit", function(e){

        e.preventDefault();

        var check = document.getElementsByClassName('formNuevoCliente')[0].reportValidity();

        if (check) {

            let datos = $(this).serialize() ;

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
                        url:'nuevo_cliente_contabilidad',
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

        }else{
            errorFaltanCampos();
        }





      });

      $(".formEditarCliente").on("submit", function(e){

        e.preventDefault();

        var check = document.getElementsByClassName('formEditarCliente')[0].reportValidity();

        if (check) {

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
                        url:'editar_cliente_contabilidad',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:datos,
                        success:function(data){

                            tabla_clientes();
                            $('#cerrarModalEditar').trigger("click");
                            Swal.fire("¡Éxito!", "Se modifico la información del cliente.", "success");

                        }
                    });

                }
            });
        }else{
            errorFaltanCampos();
        }

      });


});

tabla_clientes();

function tabla_clientes(){

    $('#detallesLista').empty();

    $.get( 'api/lista_clientes',{tipo_servicio:1,prospecto:1},function(data){

        let tabla = '';

        $.each(data,function(i,ele){

            tabla += '<tr>'+
                        '<td>'+ ele.id +'</td>'+
                        '<td>'+ ele.nombre_cliente +'</td>'+
                        '<td>'+ ele.razon_social +'</td>'+
                        '<td>'+ ele.rfc +'</td>'+
                        '<td>'+ ele.email +'</td>'+
                        '<td>'+ ele.fecha_ingreso +'</td>'+
                        '<td>'+ ele.usuario.name +'</td>'+
                        '<td><div class="dropdown dropstart">'+
                        '<a href="table-basic.html#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">'+
                          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>'+
                        '</a>'+
                        '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">'+
                          '<li><a class="dropdown-item" onclick="convertirACliente('+ ele.id +')" >Convertir a Cliente</a></li>'+
                          '<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info-header-modal-2" onclick="cargarInfoCliente('+ ele.id +')" >Editar</a></li>'+
                          '<li><a class="dropdown-item" onclick="eliminarCliente('+ ele.id +')">Borrar</a></li>'+
                        '</ul>'+
                      '</div></td>'+
                    '</tr>';

        });
        $('#detallesLista').append(tabla);

    });

}

lista_usuarios();

function lista_usuarios(){

    $('#personalAsignado').empty();
    $('#editar_fk_usurio_asignado').empty();

    $.get( 'api/obtener_usuarios',function(data){

        var lista = '';
        $.each(data,function(i,ele){

            lista += '<option value="'+ele.id+'">'+ele.name+'</option>';

        });
        $('#personalAsignado').append(lista);
        $('#editar_fk_usurio_asignado').append(lista);

    });

}


lista_obligaciones();

function lista_obligaciones(){

    $('#listaObligaciones').empty();
    $('#editarListaObligaciones').empty();

    $.get( 'api/obtener_obligaciones',function(data){
        var lista = '';
        var listaEditar = '';

        $.each(data,function(i,ele){

            lista += '<div class="col-md-4">'+
                        '<div class="mb-3">'+
                            '<div class="col-md-12">'+
                                '<div class="form-check">'+
                                    '<input class="form-check-input" type="checkbox" name="cliente[obligaciones][][fk_id_obligaciones]" value="'+parseInt(ele.id)+'" id="obligaciones_'+ele.id+'">'+
                                    '<label class="form-check-label" for="obligaciones_'+ele.id+'">'+ ele.obligacion + '</label>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

            listaEditar += '<div class="col-md-4">'+
                '<div class="mb-3">'+
                    '<div class="col-md-12">'+
                        '<div class="form-check">'+
                            '<input class="form-check-input" type="checkbox" name="obligaciones[][fk_id_obligaciones]" value="'+parseInt(ele.id)+'" id="editar_obligaciones_'+ele.id+'">'+
                            '<label class="form-check-label" for="obligaciones_'+ele.id+'">'+ ele.obligacion + '</label>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';

        });
        $('#listaObligaciones').append(lista);
        $('#editarListaObligaciones').append(listaEditar);

    });

}

lista_tareas_estandar();

function lista_tareas_estandar(){

    $('#listaTareasEstandar').empty();
    $('#editarListaTareasEstandar').empty();

    $.get( 'api/obtener_tareas_estandar',function(data){

        var lista = '';
        var listaEditar = '';

        $.each(data,function(i,ele){

            lista += '<div class="col-md-4">'+
                        '<div class="mb-3">'+
                            '<div class="col-md-12">'+
                                '<div class="form-check">'+
                                    '<input class="form-check-input" type="checkbox" name="cliente[tereas_estandar][][fk_id_tareas_estandar]" value="'+ele.id+'" id="tareas_estandar_'+ele.id+'">'+
                                    '<label class="form-check-label" for="tareas_estandar_'+ele.id+'">'+ ele.tarea_estandar + '</label>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

            listaEditar += '<div class="col-md-4">'+
                '<div class="mb-3">'+
                    '<div class="col-md-12">'+
                        '<div class="form-check">'+
                            '<input class="form-check-input" type="checkbox" name="tereas_estandar[][fk_id_tareas_estandar]" value="'+ele.id+'" id="editar_tareas_estandar_'+ele.id+'">'+
                            '<label class="form-check-label" for="tareas_estandar_'+ele.id+'">'+ ele.tarea_estandar + '</label>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';

        });
        $('#listaTareasEstandar').append(lista);
        $('#editarListaTareasEstandar').append(listaEditar);

    });

}


lista_tareas_predefinidas(1);
// lista_tareas_predefinidas(2);

function lista_tareas_predefinidas(id){

    let nombreLisata = '';

    if( id == 1 ){
        nombreLisata = 'listaTareasContabilidad';
    }else{
        nombreLisata = 'listaTareasDefensa';
    }
    $('#'+nombreLisata).empty();

    $.get( 'api/obtener_tareas_predefinidas',{fk_id_categorias_tareas:id},function(data){
        var lista = '';

        $.each(data,function(i,ele){

            var listaSubTareas = '';

            if( ele.sub_tareas_predefinidas.length > 0 ){

                $.each(ele.sub_tareas_predefinidas,function(j,subTareas){



                    listaSubTareas += '<li class="list-group-item">'+
                                        '<div class="form-check">'+
                                            '<input class="form-check-input" type="checkbox" value="" id="list1">'+
                                            '<label class="form-check-label" for="list1">'+subTareas.sub_tarea_predefinida+'</label>'+
                                        '</div>'+
                                    '</li>';

                });
            }


            lista += '<li class="list-group-item">'+
                        '<div class="form-check">'+
                            '<input class="form-check-input" type="checkbox" value="" id="list1">'+
                            '<label class="form-check-label" for="list1">'+ele.tarea_predefinida+'</label>'+
                        '</div>'+
                        '<ul class="list-group">'+
                            listaSubTareas+
                        '</ul>'+
                    '</li>';

        });
        $('#'+nombreLisata).append(lista);

    });

}


function cargarInfoCliente(id){

    $('#id_cliente').val(id);

    $.get('api/datos_cliente',{id:id},function(data){

        $.each(data,function(i,ele){

            $('#editar_'+i).val(ele);

            if( i == 'direcciones' ){
                $.each(ele,function(j,ele2){
                    $.each(ele2,function(a,ele3){
                        $('#editar_'+a+'_'+j).val(ele3).change();

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

            if( i == 'obligaciones' ){

                $.each(ele,function(j,ele2){

                    $('#editar_obligaciones_'+ele2.fk_id_obligaciones).prop('checked', true);

                });
            }

            if( i == 'tareas_estandar' ){

                $.each(ele,function(j,ele2){

                    $('#editar_tareas_estandar_'+ele2.fk_id_tareas_estandar).prop('checked', true);

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
                url:'eliminar_cliente_contabilidad',
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

function convertirACliente(id){

    Swal.fire({
        title: "¿Esta seguro que quiere convertir este prospecto a cliente?",
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
                url:'convertir_prospecto_contabilidad',
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

            if( parseInt(seleccion) != ele.id ){
                municipios += '<option value="'+ ele.id +'">'+ ele.municipio +'</option>';
            }else{

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


function errorFaltanCampos(){

    Swal.fire({
        title: "Alerta!",
        text: "Faltan campos por llenar.",
        type: "warning",
        timer: 3000,
        showConfirmButton: false,
      });

}

(function () {
    "use strict";
    window.addEventListener(
      "load",
      function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName("needs-validation");
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(
          forms,
          function (form) {
            form.addEventListener(
              "submit",
              function (event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              },
              false
            );
          }
        );
      },
      false
    );
  })();
