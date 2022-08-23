$(function () {

tabla_grupos();



$("#formNuevoGrupo").on("submit", function(e){


    e.preventDefault();

    let datos = $(this).serialize() ;


    Swal.fire({
        title: "¿Esta seguro que desea agregar un nuevo grupo de trabajo?",
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
        url:'nuevo_grupo',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:datos,
        success:function(data){
            tabla_grupos();
            $('#cerrarModalNuevo').trigger("click");
            Swal.fire("¡Éxito!", "Se agrego un nuevo registro de usuario.", "success");
        },
        error: function(response) {
                $('#agregar_grupo').trigger("click");
                console.log(response.responseJSON.errors);
            // $( "#errors" ).append(json.errors );
                                  }
              });//fin ajax

                         }

                          });
});




});


function add(id){
    $("#fk_id_grupos").val(id);

    var demo2 = $('.integrantes').bootstrapDualListbox({
        nonSelectedListLabel: 'Sin Grupo de Trabajo',
        selectedListLabel: 'Integantes',
        preserveSelectionOnMove: 'moved',
        moveOnSelect: true,
        moveAllLabel: 'Mover todo',
        removeAllLabel: 'Remover todo',
      });

      demo2.empty();
      demo2.bootstrapDualListbox('refresh', true);

    $.get( 'api/lista_integrantes',{id:id},function(data){
        // console.info(data);

         $.each(data,function(i,ele){

            if(ele.selected == 0){
                var sel = '';
            }else{
                var sel ='selected="selected"';
            }


            demo2.append('<option '+sel+' value="'+ele.id+'" >'+ele.name+' '+ele.rol+'</option>');

            demo2.bootstrapDualListbox('refresh', true);

        });

    });




    $("#formAddUsers").on("submit", function(e){
      e.preventDefault();


      let datos = $(this).serialize() ;

var inte = $('#integrantess').val();

if(inte.length == 0){
    Swal.fire({
        title: "¿Esta seguro que desea vaciar el grupo?",
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
        url:'vaciar_users_grupo',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:datos,
        success:function(data){
            tabla_grupos();
          //   tabla_integrantes();
          //   $('#cerrarModalAgregarUsers').trigger("click");
            Swal.fire("¡Éxito!", "Se agrego un nuevo registro de grupos.", "success");
        },
        error: function(response) {
          //   $('#agregarUsuariosG').trigger("click");
        console.log(response.responseJSON.errors);
            // $( "#errors" ).append(json.errors );
        }
     });
    }
  });


    }else{

Swal.fire({
    title: "¿Esta seguro que desea agregar un nuevos integrantes al grupo?",
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
    url:'agregar_users_grupo',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:datos,
    success:function(data){
        tabla_grupos();
      //   tabla_integrantes();
      //   $('#cerrarModalAgregarUsers').trigger("click");
        Swal.fire("¡Éxito!", "Se agrego un nuevo registro de grupos.", "success");
    },
    error: function(response) {
      //   $('#agregarUsuariosG').trigger("click");
    console.log(response.responseJSON.errors);
        // $( "#errors" ).append(json.errors );
    }
 });
}
});
    }

    // console.log($('#integrantess').val());




   });
  }


function tabla_grupos(){

    $('#grupos').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'api/lista_grupos',
            dataSrc: function(json){
            // console.logtabla_integrantes(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'name', defaultContent: "---", title: "Nombre de Grupo"},
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
            {data:'created_at', render:function (data, type, full) { return data == null ? "" : moment(data).format("M/D/YYYY h:mm A");}, defaultContent: "---", title: "Fecha creación"},
            {data:'updated_at', render:function (data, type, full) { return data == null ? "" : moment(data).format("M/D/YYYY h:mm A"); },defaultContent: "---", title: "Fecha actualización"},
              {data:function(row, type){
               const id = row.id;
                return `<button title="Agregar Usuario" id ="agregarUsuariosG" onclick="add(${id})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#add-users"><i class="mdi mdi-account-plus"></i></button>
                        <button title="Detalles" onclick="detalle(${id})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#detalle-group"><i class="fa fa-users" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_grupo(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" data-bs-toggle="modal" data-bs-target="#delete-group"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

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



    function delete_grupo(id){
        Swal.fire({
            title: "¿Esta seguro que quiere eliminar este grupo?",
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
                url:'eliminar_grupo',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{id:id},
                success:function(data){
                    tabla_grupos();


                    // $('#cerrarModalEditar').trigger("click");
                    Swal.fire("¡Éxito!", "Se elimino el grupo", "success");

                }
            });

        }
    });
    }




    function detalle(id){

        $('#integrantes').empty();

        $.get( 'api/lista_integrantes_detalles',{id:id},function(data){
            // console.info(data);

            let tabla = '';

            $.each(data,function(i,ele){

                tabla += '<tr>'+
                            '<td>'+ ele.name +'</td>'+
                            '<td>'+ ele.rol +'</td>'+
                        '</tr>';

            });
            $('#integrantes').append(tabla);

        });

    }


