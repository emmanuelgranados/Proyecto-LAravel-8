$(function () {

    $('#estado.select2').select2({

        theme: "classic",

    });


    $("#formEditarPerfil").on("submit", function(e){

        e.preventDefault();

        let datos = $(this).serialize() ;

        Swal.fire({
            title: "¿Esta seguro que desea guardar cambios?",
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
            url:'editar_perfil',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:datos,
            success:function(data){


                Swal.fire("¡Éxito!", "Se agrego edito el registro de usuario.", "success");
                window.location.reload();
            },
            error: function(response) {

            console.log(response.responseJSON.errors);


            }
         });

        }

      });


     });

});
