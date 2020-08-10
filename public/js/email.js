
$(document).ready(function() {
    $('#btn_enviar_correo').prop("disabled", true);
});


function enviar_correo(){

    var mail_usuario = document.getElementById("mail_usuario").value;
    console.log(mail_usuario);

    $.ajax({
            type: 'POST',
            url: 'gosendemail',
            data: {
                _token: $("#btn_enviar_correo").data('token'),
                data: {
                  "email" : mail_usuario
                },
                "accion": "Envio para el restablecimiento de contraseña.",
                "vista": "Login de Inicio de Session",
                "detalle": "Validar si el correo existe en la base de datos."
            },
            dataType: 'json',
            beforeSend: function() {
              console.log("Procesando si el email existe, espere por favor...");
              Swal.fire({
                icon: 'question',
                title: 'Procesando',
                text: 'Procesando si el email existe, espere por favor...',
                showConfirmButton: false,
                allowOutsideClick: false
              })
            },
            success: function(response) {
              console.log(response);
              if(response.resultado == "success"){
                Swal.fire({
                    icon: 'success',
                    title: 'Successfully',
                    text: 'El correo fue enviado, revise su buzon!'
                  })
                  document.getElementById("mail_usuario").value = "";
                  $('#btn_enviar_correo').prop("disabled", true);
              }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error, Algo fallo en la función de envio en el controlador !'
                  })
                  document.getElementById("mail_usuario").value = "";
                  $('#btn_enviar_correo').prop("disabled", true);
              }
            },
            error: function() {
             console.log("Error, Fallo completo en el servidor");
             Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error, Algo fallo en las configuraciones del servidor smtp!'
              })
              document.getElementById("mail_usuario").value = "";
              $('#btn_enviar_correo').prop("disabled", true);
            }
        });
}

function validarEmail() {
    var email = document.getElementById("mail_usuario").value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error, Ingrese un email valido!'
          })
        document.getElementById("mail_usuario").value = "";
    }else{
        $('#btn_enviar_correo').prop("disabled", false);
    }
}
