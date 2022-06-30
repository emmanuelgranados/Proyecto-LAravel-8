$(function () {

    tabla_usuarios();
    tabla_roles();


    $('#rol_alta.select2').select2({
        multiple:true,
        theme: "classic",
        dropdownParent: $('#add-contact')
    });

    $('#rol_alta_ed').select2({
        multiple:true,
        theme: "classic",
        dropdownParent: $('#editar-contact')
    });


    $("#formNuevoUsuario").on("submit", function(e){

        e.preventDefault();

        let datos = $(this).serialize() ;

        Swal.fire({
            title: "¿Esta seguro que desea agregar un nuevo usuario?",
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
            rules: {'name': "required",'email': "required email",'password': "required",'roles': "required"},
            type:'POST',
            url:'nuevo_usuario',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){
                limpiar();
                tabla_usuarios();
                tabla_roles();
                $('#cerrarModalNuevo').trigger("click");
                Swal.fire("¡Éxito!", "Se agrego un nuevo registro de usuario.", "success");
            },
            error: function(response) {
                $('#agregar_usuario').trigger("click");
            console.log(response.responseJSON.errors);
                // $( "#errors" ).append(json.errors );

            }
         });

        }

      });


     });





});


function tabla_roles(){

    $('#ListaRoles').empty();

    $.get( 'api/lista_roles',function(data){
        console.info(data);

        let tabla = '';

        $.each(data,function(i,ele){

            tabla += '<tr>'+
                        '<td>'+ ele.name +'</td>'+
                        '<td>'+ ele.cantidad +'</td>'+
                    '</tr>';

        });
        $('#ListaRoles').append(tabla);

    });

}

function tabla_usuarios(){

    $('#usuarios').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'api/lista_usuarios',
            dataSrc: function(json){

            console.log(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'name', defaultContent: "---", title: "Nombre Usuario"},
            {data:'email', defaultContent: "---", title: "Email"},
            {data:function(row, type){
                let div = '';
                $.each(row.roles, function (i, det) {
                    div += `<span class="badge rounded-pill bg-secondary text-dark">${det.name}</span>`
                                });
                if(type == "display"){
                    return div;
                }
            }, defaultContent: "---", title: "Rol"},
            {data:'created_at', render:function (data, type, full) { return data == null ? "" : moment(data).format("M/D/YYYY h:mm A");}, defaultContent: "---", title: "Fecha creación"},
            {data:function(row, type){
                const classname = (row.activo == 1) ? 'bg-light-success text-success' : 'bg-light-warning text-warning';
                const text = (row.activo == 1) ? 'Activo' : 'Inactivo';
                if(type == "display"){

                    return ` <span class="badge  ${classname} fw-normal">${text}</span>`;
                }
                if(type == "filter"){
                    return text;
                }
            }, defaultContent: "---", title: "Estatus"},
             {data:'updated_at', render:function (data, type, full) { return data == null ? "" : moment(data).format("M/D/YYYY h:mm A"); }
              ,defaultContent: "---", title: "Fecha actualización"},
              {data:function(row, type){
               const id = row.id;
                return `<button title="Cambiar Contraseña" onclick="contrasena(${id})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#detalle-contact" ><i class="fa fa-key" aria-hidden="true"></i></button>
                        <button title="Detalles" onclick="detalle_usuario(${id})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#detalle-contact"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_usuario(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" data-bs-toggle="modal" data-bs-target="#delete-contact"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

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



function limpiar(){
    $("#name").val("");
    $("#email").val("");
    $("#password").val("");
}

function detalle_usuario(id){
    console.log(id);
}


function editar_usuario(id){
    console.log(id);
}


function delete_usuario(id){
    console.log(id);
}

