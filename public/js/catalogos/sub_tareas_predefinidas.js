$(function () {

    tabla_tareas();

    $('#fk_id_tareas_predefinidas.select2').select2({

        theme: "classic",
        dropdownParent: $('#add-tarea')
    });

    $('#fk_id_tareas_predefinidased.select2').select2({

        theme: "classic",
        dropdownParent: $('#edit-tarea')
    });



    $("#formNuevaSubTareaPredefinida").on("submit", function(e){

        e.preventDefault();

        let datos = $(this).serialize() ;

        Swal.fire({
            title: "¿Esta seguro que desea agregar un nuevo registro?",
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
            url:'new_subtareas_predefinidas',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){
                limpiar();
                tabla_tareas();
                $('#cerrarModalNuevaSubTareaPredefinida').trigger("click");
                Swal.fire("¡Éxito!", "Se agrego un nuevo registro.", "success");
            },
            error: function(response) {
                $('#agregar_subtarea_predefinida').trigger("click");
            // console.log(response.responseJSON.errors);
                // $( "#errors" ).append(json.errors );

            }
         });
        }
      });

     });



});


function tabla_tareas(){

    $('#sub_tareas_predefinidas').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'api/lista_sub_tareas_predefinidas',
            dataSrc: function(json){

            // console.log(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'tarea_predefinida', defaultContent: "---", title: "Tarea Predefinida"},
            {data:'sub_tarea_predefinida', defaultContent: "---", title: "Sub Tarea Predefinida"},
            {data:'categoria_tarea', defaultContent: "---", title: "Categoria"},
            {data:function(row, type){
                const classname = (row.activo == 1) ? 'bg-light-success text-success' : 'bg-light-warning text-warning';
                const text = (row.activo == 1) ? 'Activo' : 'Inactivo';
                if(type == "display"){

                    return ` <span class="badge  ${classname} fw-normal">${text}</span>`;
                }
                if(type == "filter"){
                    return text;
                }
            }, defaultContent: "---", title: "Status"},

              {data:function(row, type){
               const id = row.id;

               if(row.activo == 0){

                $bloquear = 'style="display:none";';
                $desbloquear = ''
               } else {

                $bloquear = '';
                $desbloquear = 'style="display:none";'

               }

                return `<button title="Editar" onclick="editar_tarea(${id})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#edit-tarea"><i class="fa fa-edit" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_tarea(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button title="Bloquear"  ${$bloquear} id="bloquear" onclick="bloquear(${id})" class="btn text-center btn-small btn-link font-weight-bold botonchecklock"><i class="fa fa-lock" aria-hidden="true"></i></button>
                        <button title="Desbloquear"  ${$desbloquear} id="desbloquear" onclick="desbloquear(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckunlock"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>`;

              }, title: "Acciones"}
        ],
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, 'All']
        ],
        destroy: true,
        paging:true,
        info:true,
        responsive: true,
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }

    });
}





function editar_tarea(id){
// console.log(id);
$("#id_subtareaPredeterminada").val(id);
$.ajax({
    type:'POST',
    url:'api/detalle_sub_tareas_predefinidas',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{id:id},
    success:function(data){
    //    console.log(data);
       $('#sub_tarea_predefinidaed').val(data[0].sub_tarea_predefinida);
       $('#fk_id_tareas_predefinidased').val(data[0].idtareapredeterminada).change();
          }
 });

 $("#formEditarSubTareaPredefinida").on("submit", function(e){

    e.preventDefault();

    let datos = $(this).serialize() ;

    Swal.fire({
        title: "¿Esta seguro que desea editar este registro?",
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
        url:'edit_subtareas_predefinidas',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:datos,
        success:function(data){

            tabla_tareas();

            $('#cerrarModalEditarSubTareaPredefinida').trigger("click");
            Swal.fire("¡Éxito!", "Se agrego edito el registro de usuario.", "success");
        },
        error: function(response) {
            $('#agregar_subtarea_predefinida').trigger("click");
        // console.log(response.responseJSON.errors);


        }
     });

    }

  });


 });

}



function delete_tarea(id){
    console.log(id);
    Swal.fire({
        title: "¿Esta seguro que quiere eliminar este registro?",
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
            url:'delete_subtareas_predefinidas',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){

                tabla_tareas();

                // $('#cerrarModalEditar').trigger("click");
                Swal.fire("¡Éxito!", "Se elimino el registro", "success");

            }
        });

    }
});
}


function limpiar(){

    $("#sub_tarea_predefinida").val("");

}



function bloquear(id){

    Swal.fire({
        title: "¿Esta seguro que quiere desactivar esta tarea?",
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
            url:'bloquear_subtareas_predefinidas',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){
                tabla_tareas();

                // $('#cerrarModalEditar').trigger("click");
                Swal.fire("¡Éxito!", "Se inactivo esta tarea.", "success");

            }
        });

    }
});
}


function desbloquear(id){

    Swal.fire({
        title: "¿Esta seguro que quiere desbloquear esta tarea?",
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
            url:'desbloquear_subtareas_predefinidas',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){
                tabla_tareas();
                Swal.fire("¡Éxito!", "Se activo esta tarea.", "success");

            }
        });

    }
});
}
