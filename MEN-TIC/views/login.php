<?php 
 

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>MENTIC</title>
    <meta charset="UTF-8">
    <meta name="title" content="MENTIC">
    <meta name="description" content="MENTIC es una web didáctica">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">-->
    <link href="./../css/login.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
</head>

<body>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div id="first">
                            <div class="myform form ">
                                <div class="logo mb-3">
                                    <div class="col-md-12 text-center">
                                        <h1><a href="./../views/LandingPage.php" id="signin">MENTIC</a></h1>
                                    </div>
                                </div>
                                <form action="" method="post" name="login">
                                    <div class="form-group">

                                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Usuario o email">
                                    </div>
                                    <div class="form-group">

                                        <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <p class="text-center small"> Al hacer clic en Registrarte, aceptas nuestros <a href="#">Terminos de uso</a></p>
                                    </div>
                                    <div class="col-md-12 text-center ">
                                        <button type="submit" name="logear" id="logear" class=" btn btn-block mybtn btn-primary tx-tfm">Entrar</button>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or">o</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p class="text-center">
                                            <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus"></i>Iniciar con Google </a>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p class="text-center">¿No tienes cuenta? <a href="#" id="signup">Registrate aqui</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div id="second">
                            <div class="myform form ">
                                <div class="logo mb-3">
                                    <div class="col-md-12 text-center">
                                        <h1>Registrarte</h1>
                                    </div>
                                </div>
                                <form action="" method="post" name="registration">
                                    <div class="form-group">
                                        <input type="text" name="firstname" id="firstname" class="form-control"  aria-describedby="emailHelp" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" id="lastname" class="form-control"  aria-describedby="emailHelp" placeholder="Apellido">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Contraseña">
                                    </div>
                                    <div class="col-md-12 text-center mb-3">
                                        <button type="submit" name="register" id="register" class=" btn btn-block mybtn btn-primary tx-tfm">Crear cuenta</button>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <p class="text-center"><a href="#" id="login">¿Ya tienes cuenta?</a></p>
                                        </div>
                                    </div>
                                    <!-- La siguiente etiqueta estaba mal cerrada, estaba en la linea 105-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
    <script src="./../js/login.js"></script>
</body>

</html>