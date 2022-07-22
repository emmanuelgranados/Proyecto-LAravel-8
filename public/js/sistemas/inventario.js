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
                const text = (row.status == 1) ? 'Disponible' : 'Ocupado';
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


function historial(id){
console.log(id);


$('#historialequipos').DataTable({
    searchDelay: 400,
    ajax: {
        type: "GET",
        url: 'api/historial_equipo',
        data: {id: id},
        dataSrc: function(json){

        console.log(json);
            return json;
        }
    },
    order: [[0, 'asc']],
    ordering:true,
    columns:[
        {data:'id', defaultContent: "---", title: "ID"},
        {data:'equipo.nombre_equipo', defaultContent: "---", title: "Equipo"},
        {data:'user.name', defaultContent: "---", title: "Atendio"},
        {data:'user_adquiere.name', defaultContent: "---", title: "Usuario"},
        {data:'fecha', defaultContent: "---", title: "Fecha"},
        {data:function(row, type){
            const classname = (row.evento == 1) ? 'bg-light-success text-success' : 'bg-light-warning text-warning';
            const text = (row.evento == 1) ? 'Entrada' : 'Salida';
            if(type == "display"){

                return ` <span class="badge  ${classname} fw-normal">${text}</span>`;
            }
            if(type == "filter"){
                return text;
            }
        }, defaultContent: "---", title: "Evento"},
          {data:function(row, type){
           const id = row.id;
            return `
                    <button title="Eliminar" onclick="delete_historial(${id})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            url:'salida_equipo',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{id:id},
            success:function(data){
                console.log(data);
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
  const id = response[0].id;
 const nombre = response[0].nombre_equipo;
//  const serie = response[0].numero_de_serie;
//  const usuario = response[0].user.name;
  // $('#nombreprint').val(response['nombre_equipo']);
 // $('#numserieprint').val(response['numero_de_serie']);
 var options = {
      //    quietZone: 15,
       title: 'EQUIPO '+nombre,
       titleFont: "normal normal bold 18px Arial",
       titleColor: "#fff",
       titleBackgroundColor: "#b3a716",
       titleHeight: 40,
       titleTop: 25,
       text: "http://127.0.0.1:8000/salida_equipo/"+id, // Content
       width: 240, // Widht
       height: 240, // Height
       colorDark: "#000000", // Dark color
       colorLight: "#ffffff", // Light color

       timing: '#b3a716',
       timing_H: '#b3a716', // Horizontal timing color

       AI:'#b3a716',
       AO:'#b3a716',
       PO: '#b3a716',
       PI: '#b3a716',
       PI_TL: '#b3a716',
       PO_TR: '#b3a716',
       PI_TR: '#b3a716',

       logo: "/../../assets/images/logos/logo2.png", // LOGO
       logoWidth:90,
       logoHeight:70,
       logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
       logoBackgroundTransparent: false, // Whether use transparent image, default is false
       timing_V: '#b3a716', // Vertical timing color


       correctLevel: QRCode.CorrectLevel.Q, // L, M, Q, H

       dotScale: 0.9

              };
          // Create QRCode Object
 new QRCode(document.getElementById("barcode"), options);

     }
    });
}


document.getElementById("descargarQR").addEventListener("click", function() {

    html2canvas(document.querySelector('#barcode')).then(function(canvas) {

        // console.log(canvas);
        saveAs(canvas.toDataURL(), 'codigoQR.png');
    });
});


function saveAs(uri, filename) {

    var link = document.createElement('a');

    if (typeof link.download === 'string') {

        link.href = uri;
        link.download = filename;

        //Firefox requires the link to be in the body
        document.body.appendChild(link);

        //simulate click
        link.click();

        //remove the link when done
        document.body.removeChild(link);

    } else {

        window.open(uri);

    }
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
