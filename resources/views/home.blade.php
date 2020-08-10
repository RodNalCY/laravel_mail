<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>


        <div class="container mt-5">
            <div class="row justify-content-center">
            <div class="card text-center text-white bg-info" >
                <div class="card-header">
                    Dev. RodNal CY
                </div>
                <div class="card-body">
                  <h5 class="card-title">Servidor de Correo</h5>
                  <p class="card-text">Laravel Mail es robustos para el envio de correo personalizados.<br> <span class="bg-danger"> Ingrese un email valido y presione enter</span></p>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-light">@ Ingrese correo</span>
                    </div>
                    <input type="email" class="form-control" placeholder="example@email.com" id="mail_usuario" onchange="validarEmail();" required>
                  </div>
                  <button type="button" class="btn btn-outline-light" id="btn_enviar_correo" onclick="enviar_correo();" data-token="{{ csrf_token() }}">&nbsp;&nbsp;Enviar Email&nbsp;&nbsp;</button>

                </div>
                <div class="card-footer text-white">
                 Last updated 10 de Agosto 2020
                </div>
            </div>
        </div>
        </div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/email.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>


    </body>
</html>
