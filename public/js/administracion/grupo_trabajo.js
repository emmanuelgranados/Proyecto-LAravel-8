$(function () {

tabla_grupos();


$('#lider.select2').select2({
    dropdownParent: $('#add-group')
});

$('#fk_id_user').select2({
    multiple:true,
    theme: "classic",
    dropdownParent: $('#add-users')
});







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
     });

    }

  });


 });




});


function add(id){
    $("#fk_id_grupos").val(id);



    $("#formAddUsers").on("submit", function(e){

      e.preventDefault();

      let datos = $(this).serialize() ;

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
              $('#cerrarModalAgregarUsers').trigger("click");
              Swal.fire("¡Éxito!", "Se agrego un nuevo registro de grupos.", "success");
          },
          error: function(response) {
              $('#agregarUsuariosG').trigger("click");
          console.log(response.responseJSON.errors);
              // $( "#errors" ).append(json.errors );

          }
       });
      }
    });

   });
  }


function tabla_grupos(){

    $('#grupos').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'api/lista_grupos',
            dataSrc: function(json){
            // console.log(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'name', defaultContent: "---", title: "Nombre de Grupo"},
            {data:'lider', defaultContent: "---", title: "Lider"},
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
                        <button title="Eliminar" onclick="delete(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" data-bs-toggle="modal" data-bs-target="#delete-group"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

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
    // $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
    //   ).addClass("btn btn-cyan text-white me-1");
    }




