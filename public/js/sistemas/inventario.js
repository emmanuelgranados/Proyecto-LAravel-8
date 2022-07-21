$(function () {

    tabla_equipos();



    $('.select2').select2({

        theme: "classic",
        dropdownParent: $('#nuevo_equipo')
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
                tabla_equipos();
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


function tabla_equipos(){

    $('#equipos').DataTable({
        searchDelay: 400,
        ajax: {
            url: 'api/lista_inventario',
            dataSrc: function(json){

            console.log(json);
                return json;
            }
        },
        order: [[0, 'asc']],
        ordering:true,
        columns:[
            {data:'id', defaultContent: "---", title: "ID"},
            {data:'user.name', defaultContent: "---", title: "Usuario"},
            {data:'nombre_equipo', defaultContent: "---", title: "Equipo"},
            {data:'marca.marca', defaultContent: "---", title: "Marca"},
            {data:'modelo', defaultContent: "---", title: "Modelo"},
            {data:'tipo', defaultContent: "---", title: "Tipo"},
            {data:'disco_duro', defaultContent: "---", title: "Disco Duro"},
            {data:'memoria_ram', defaultContent: "---", title: "Memoria Ram"},
            {data:'numero_de_serie', defaultContent: "---", title: "Numero de Serie"},
            {data:'procesador', defaultContent: "---", title: "Procesador"},
            {data:'fecha_alta',render:function (data, type, full) { return data == null ? "" : moment(data).format("MM/DD/YYYY h:mm A");},defaultContent: "---", title: "Fecha Alta"},
            {data:'fecha_asignacion',render:function (data, type, full) { return data == null ? "" : moment(data).format("MM/DD/YYYY h:mm A");}, defaultContent: "---", title: "Fecha Asignación"},
            {data:'garantia', defaultContent: "---", title: "Garantia"},
            {data:'fecha_garantia', render:function (data, type, full) { return data == null ? "" : moment(data).format("MM/DD/YYYY");}, defaultContent: "---", title: "Fecha Garantia"},
            {data:'mac_wifi', defaultContent: "---", title: "Mac Wifi"},
            {data:'mac_address', defaultContent: "---", title: "Mac Address"},
            {data:'serial_key_windows', defaultContent: "---", title: "Serial Key Windows"},
            // {data:'sistema_operativo', defaultContent: "---", title: "Sistema Operativo"},
            {data:function(row, type){
                const classname = (row.status == 1) ? 'bg-light-success text-success' : 'bg-light-warning text-warning';
                const text = (row.status == 1) ? 'Activo' : 'Inactivo';
                if(type == "display"){

                    return ` <span class="badge  ${classname} fw-normal">${text}</span>`;
                }
                if(type == "filter"){
                    return text;
                }
            }, defaultContent: "---", title: "Status"},
              {data:function(row, type){
               const id = row.id;
                return `<button title="Editar" onclick="editar_obligacion(${id})"   class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#edit-obligacion"><i class="fa fa-edit" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_obligacion(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button title="Codigo QR"  onclick="generarqr(${id})"   class="btn text-center btn-small btn-link font-weight-bold botoncheqrcode"  data-bs-toggle="modal" data-bs-target="#codigoqr_equipo"><i class="fa fa-qrcode" aria-hidden="true"></i></button>
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





function editar_obligacion(id){
console.log(id);
$("#id_obligacion").val(id);
$.ajax({
    type:'POST',
    url:'api/detalle_obligacion',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{id:id},
    success:function(data){
       console.log(data);
       $('#obligacion_ed').val(data[0].obligacion);
          }
 });

 $("#formEditarObligacion").on("submit", function(e){

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
        url:'edit_obligaciones',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:datos,
        success:function(data){

            tabla_obligaciones();

            $('#cerrarModaleditarObligacion').trigger("click");
            Swal.fire("¡Éxito!", "Se agrego edito el registro de usuario.", "success");
        },
        error: function(response) {
            $('#cerrarModaleditarObligacion').trigger("click");
        console.log(response.responseJSON.errors);


        }
     });

    }

  });


 });

}



function delete_obligacion(id){
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
            url:'delete_obligaciones',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){

                tabla_obligaciones();

                // $('#cerrarModalEditar').trigger("click");
                Swal.fire("¡Éxito!", "Se elimino el registro", "success");

            }
        });

    }
});
}


function limpiar(){

    // $("#obligacion").val("");
}


function generarqr(id){
console.log(id);
$('#barcode').empty();
$.ajax({
  type: "GET",
  url: "/api/datos_equipo",
  data: {id: id},
  success: function (response) {
  console.log(response);
 const nombre = response[0].nombre_equipo;
 const serie = response[0].numero_de_serie;
 const usuario = response[0].user.name;
  // $('#nombreprint').val(response['nombre_equipo']);
 // $('#numserieprint').val(response['numero_de_serie']);
 var options = {
       text: "Nombre > "+nombre+"\n"+"No.Serie > "+serie+"\n"+"No.Serie > "+usuario+"", // Content
       width: 240, // Widht
       height: 240, // Height
       colorDark: "#000000", // Dark color
       colorLight: "#ffffff", // Light color
       quietZone: 15,
       logo: "/../../assets/images/logos/logo2.png", // LOGO
       logoWidth:90,
       logoHeight:70,
       logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
       logoBackgroundTransparent: false, // Whether use transparent image, default is false
       correctLevel: QRCode.CorrectLevel.H // L, M, Q, H
              };
          // Create QRCode Object
 new QRCode(document.getElementById("barcode"), options);

     }
    });
}


$("#mac_address").on("keydown", function(event) {
    const BACKSPACE_KEY = 8
    const COLON_KEY = 186
    const _colonPositions = [2, 5, 8, 11, 14]
    const _newValue = $(this).val().trim()
    const _currentPosition = _newValue.length
    if (event.keyCode === COLON_KEY) {
      event.preventDefault()
    }
    if (event.keyCode !== BACKSPACE_KEY) {
      if (_colonPositions.some(position => position === _currentPosition)) {
        $("#mac_address").val(_newValue.concat(':'))
      }
    }
  })

  $("#mac_wifi").on("keydown", function(event) {
    const BACKSPACE_KEY = 8
    const COLON_KEY = 186
    const _colonPositions = [2, 5, 8, 11, 14]
    const _newValue = $(this).val().trim()
    const _currentPosition = _newValue.length
    if (event.keyCode === COLON_KEY) {
      event.preventDefault()
    }
    if (event.keyCode !== BACKSPACE_KEY) {
      if (_colonPositions.some(position => position === _currentPosition)) {
        $("#mac_wifi").val(_newValue.concat(':'))
      }
    }
  })

function mayus(e) {
    e.value = e.value.toUpperCase();
}
