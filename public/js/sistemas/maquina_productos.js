$(function () {

    tabla_productos();



    $('.select2').select2({

        theme: "classic",
        dropdownParent: $('#nuevo')
    });

    $("#formAddEquipos").on("submit", function(e){

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
            url:'nuevo_equipo',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){
                limpiar();
                tabla_productos();
                $('#cerrarModalAgregarEquipo').trigger("click");
                Swal.fire("¡Éxito!", "Se agrego un nuevo registro.", "success");
            },
            error: function(response) {
                $('#agregar_equipo').trigger("click");
            console.log(response.responseJSON.errors);
                // $( "#errors" ).append(json.errors );

            }
         });
        }
      });

     });



});


function tabla_productos(){

    $('#maquinas').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'lista_productos',
            dataSrc: function(json){

            console.log(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'maquina', defaultContent: "---", title: "Maquina"},
            {data:'producto', defaultContent: "---", title: "Productos"},
              {data:function(row, type){
               const id = row.id;
                return `<button title="Editar" onclick="editar_obligacion(${id})"   class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#edit-obligacion"><i class="fa fa-edit" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_obligacion(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button title="Codigo QR"  onclick="generarqr(${id})"   class="btn text-center btn-small btn-link font-weight-bold botoncheqrcode"  data-bs-toggle="modal" data-bs-target="#codigoqr_equipo"><i class="fa fa-qrcode" aria-hidden="true"></i></button>
                        <button title="Historial"  onclick="historial(${id})"   class="btn text-center btn-small btn-link font-weight-bold botonchearchivo"  data-bs-toggle="modal" data-bs-target="#historial_equipo"><i class="fa fa-archive" aria-hidden="true"></i></button>
                      `;

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
        buttons: ["copy", "csv", "excel", "pdf"],
        language : {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }

    });
}

