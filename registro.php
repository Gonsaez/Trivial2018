<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/CSS.css" rel="stylesheet" type="text/css"/>

    </head>
    <body style="background-color:  #9932CC; color:white; ">

        <div class="container" id="principal">
            <div class ="row">
                <div id="banner" class="col-12">
                    <p><a class="btn btn-block btn-info disabled" style="color: white" >Bienvenido al Trivial De La Evau 2018</a></p>
                </div>
                <div id="botonLogin" class="col-9">
                    <button onclick="showModalDialog()" style="background-color:#9932CC" ><img src="homer.png"></button>
                    <h1 id="enunciadoRegistro">HAZ CLICK PARA REGISTRARTE</h1>
                </div>
            </div>
            <div class ="row">
                <div class="col-4">
                </div>
                <div id="login" class="col-4">
                    <br/><br/>
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br/>
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                    <br/>
                    <button id="boton1" class="btn btn-primary btn-block" type="submit">Primary</button>
                    <br/><br/>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
                        // document ready se ejecuta cuando toda la página se ha cargado correctamente
                        $(document).ready(function () {
                            //$('#cajaNombre').hide();

//                            $('#login').hide();

                        });

                        $.validate({
                            lang: 'es'
                        });

                        //Mostrar login pulsando a homer
//                        if ($('#botonLogin').click(function)) {
//                            $('#login').show();
//                        }

                        $('#boton1').click(function () {
                            //leo el contenido de las cajas de nombre y contraseña
                            var _cajaNombre = $('#cajaNombre').val();
                            var _cajaPassword = $('#cajaPassword').val();

                            $('#principal').load("login.php", {
                                cajaNombre: _cajaNombre,
                                cajaPassword: _cajaPassword
                            });
                        });
    </script>
</html>