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

        <div id="papa">
            <div class="row"> 
                <div class="col-1"></div>
                <div class="col-8"> 
                    <h2 class="text-center" style="color: white"><a href="index.php"> <img src="homer.png"class="img-fluid" alt="pensar"></a>BIENVENIDOS AL TRIVIAL DE LA EVAU2018</h2>
                </div> 
                <div id="registro" class="col-2" style="margin-top: 3.5%" alt="Responsive image" onclick="registrate();"> <a  class="btn btn-block btn-outline-success"><img src="registro.png" alt="pensar"></a></div>

            </div>
<!--                //<div id="logo" class="col-2"> <p><a><img src="homer.png" alt="pensar" style="width:50%"></a></p></div>-->
            <!--                <div id="banner" class="col-8"><a class="btn btn-block btn-danger">BIENVENIDOS AL TRIVIAL DE LA EVAU2018</a></div>-->
            <!--                <div id="registro" class="col-2" onclick="registrate();"> <a  class="btn btn-block btn-dark"><img src="registro.png" alt="pensar" style="width:10%;"></a></div>-->



            <div class="container" id="principal" style="clear: both;">
                <br>
                <br>
                <br>
                <div class ="row">
                    <div class="col-12">
                        <h2 class="text-center" style="color:white;">Bienvenidos</h2> 
                    </div>
                </div>
                <div class ="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <br/><br/>
                        <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required" style="text-align: center">
                        <br/>
                        <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña" required="required" style="text-align: center">
                        <br/>
                        <button id="boton1" class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
                        <br/><br/>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

        <script>
<!--        //document ready se ejecuta cuando toda la página se ha cargado correctamente-->
    $(document).ready(function () {
                            //$('#cajaNombre').hide();

//                            $('#login').hide();

                });
                
                $.validate({
                            lang: 'es'
                    });
                    
                    //Mostrar login     pulsando a homer
                    //                  if ($('#botonLogin').click(function)) {
//                            $('#login').show();
//                        }

                        function inicio(){
                            $('#padre').load('app.php');
                        }

                            function registrate() {
                                $('#cabecera').hide();
                                $('#principal').load('registro.php');
}





//        $('#registro').click(function () {
//            $('#papa').hide();
//            $('#papa').load("registro.php");
//        });


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