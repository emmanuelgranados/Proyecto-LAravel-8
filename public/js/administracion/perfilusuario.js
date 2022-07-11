$(function () {

    $('#estado.select2').select2({

        theme: "classic",

    });


    $.ajax({
        url:'api/perfil_usuario',
        dataSrc: function(json){
                return json;
            },
        success: function(data){
            console.log(data[0].name);
        //Datos de Perfil
            $("#perfilusuario").val(data[0].name);
            $("#perfilestado").val(data[0].estado);
            $("#perfilemail").val(data[0].email);
            $("#perfilphone").val(data[0].phone);
            $("#perfilmessage").val(data[0].message);

//Editar
            $("#name").val(data[0].name);
            $("#email").val(data[0].email);
            $("#phone").val(data[0].phone);
            $("#message").val(data[0].message);
            $("#estado").val(data[0].idEstado).change();



        },
           statusCode: {
           404: function() {
              alert('web not found');
           }
        },
        error:function(x,xs,xt){
           window.open(JSON.stringify(x));
           //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
        }
     });

});

