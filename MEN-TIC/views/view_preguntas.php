<?php 
/*
  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../controllers/controller_register_login.php");
    exit;
		
	}*/
?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MENTIC - Preguntas destacadas</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
<link href='../css/nightmode.css' rel='stylesheet'>
<link rel="icon" href="../img/favicon-16x16.png" type="image/png" sizes="16x16">


<style>
body {
    background: whitesmoke;
}

/*Color Estrellas dificultad */
.ratings i {
    color: orangered;
}

.install span {
    font-size: 12px
}

.col-md-4 {
    margin-top: 27px
}

</style>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</head>



<body oncontextmenu='return false' class='snippet-body night-mode-available'>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #007bff;">
    <a class="navbar-brand" href="../controllers/controller_menu_principal.php">
      
      <!-- Icono de Home -->
      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </svg>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Modulos
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../controllers/controllers_modulos/controller_modulo1.php">Modulo 1</a>
            <a class="dropdown-item night-mode-available" href="#">Modulo 2</a>
          </div>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../controllers/controller_temario.php">Temario</a>
            <a class="dropdown-item night-mode-available" href="../controllers/controller_preguntas.php">Preguntas destacadas</a>
          </div>
        </li>
        
      </ul>

      <!-- ----------NIGHT MODE------------ -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <div class="night-mode-button">
          <input type="checkbox" class="checkbox" id="night-mode">
          <label for="night-mode" class="label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="blob"></div>
          </label>
        </div>
      </li>
    </ul>


      <ul class="navbar-nav mr-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION["name"]) ?>
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../controllers/controller_perfil.php">Tu perfil</a>
            <a class="dropdown-item night-mode-available" href="#">Configuración</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item night-mode-available" href="../controllers/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </div>
        </li>
         <li class="nav-item">
          <a class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo getPuntos($_SESSION["id_user"]); ?> <i class="fa fa-star" style="color:yellow">&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
        </li>
        
      </ul>
     
      
    </div>
  </nav>
  
  <!-- Bootstrap FAQ - START -->
<div class="container night-mode-available">


    <div class="panel-group" id="accordion">
        <div class="faqHeader">General</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Qué es MENTIC?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    MENTIC es una aplicación web diseñada por tres programadores y estudiantes del Grado Superior de Desarrollo de Aplicaciones Web (DAW): Lucas, Javier y Pedro. Ha sido diseñada como proyecto de fin de grado para una profesora del centro IES Leonardo Da Vinci.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">¿Cuál es la finalidad de MENTIC?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Esta aplicación tiene la finalidad de ayudar a profundizar y/o aclarar contenidos relacionados con el módulo, además de poder proporcionaros una herramienta más para poder repasar los contenidos teóricos y prácticos del módulo y de cada una de las unidades de trabajo que se ven a lo largo del módulo.
                </div>
            </div>
        </div>

        <div class="faqHeader">Niveles</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">¿Cómo funciona el sistema de niveles?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    Cada nivel está dividido en 5 subniveles con diferentes preguntas sobre los contenidos de la unidad de trabajo. Cada nivel y subnivel se irá abriendo progresivamente a medida que se vayan superando los anteriores.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Tienen los puntos alguna finalidad?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    Los puntos no tienen ninguna finalidad en concreto (de momento). El objetivo de esta aplicación no es ni mucho menos crear competitividad entre los usuarios, si no una manera de marcar en qué "lugar" en cuanto a contenidos del módulo esta cada usuario.
                </div>
            </div>
        </div>

        <div class="faqHeader">Módulos y Unidades de Trabajo</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">¿Qué módulo/s esta/n incluidos en esta aplicación?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    El único módulo incluido en la aplicación, por el momento, es el módulo de Atención y Apoyo Psicosocial.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMoo">¿Qué unidades de trabajo están incluidas? (en el caso del módulo de Atención y Apoyo Psicosocial)</a>
                </h4>
            </div>
            <div id="collapseMoo" class="panel-collapse collapse">
                <div class="panel-body">
                    Se recogen todas las unidades de trabajo y diferentes niveles, relacionados cada uno con una unidad de trabajo.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseModulo">¿La aplicación consta solo de las unidades de trabajo del módulo?</a>
                </h4>
            </div>
            <div id="collapseModulo" class="panel-collapse collapse">
                <div class="panel-body">
                    No. Cada unidad de trabajo es un nivel. Y cada nivel tiene su teoría. Para acceder a ella podeis acceder desde la barra superior -> Más -> Temario. También, desde el menú del módulo (Módulos -> nombre del módulo), en cada nivel hay un icono de un libro. Haz clic en el libro de cada nivel para acceder a su correspondiente teoría.
                </div>
            </div>
        </div>

        <div class="faqHeader">Preguntas Técnicas</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseDatos">¿Qué tratamiento tienen mis datos?</a>
                </h4>
            </div>
            <div id="collapseDatos" class="panel-collapse collapse in">
                <div class="panel-body">
                    Los únicos datos que se registran son: el nombre, apellido, correo, contraseña (siempre 100% segura) y fecha de registro. Tus datos estarán guardados en la base de datos de MENTIC y no serán distribuidos.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePatata">¿Para qué es el icono del medio en la barra superior?</a>
                </h4>
            </div>
            <div id="collapsePatata" class="panel-collapse collapse">
                <div class="panel-body">
                    El icono del medio en la barra superior es el modo noche o modo oscuro. El objetivo del mismo es ayudar a reducir la fatiga visual, haciendo que el impacto de la pantalla sobre nuestros ojos sea menor y resulte más cómodo leer lo que sale en la misma. Puedes activar o desactivarlo dándole click. El modo noche o modo oscuro funciona en toda la aplicación.
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
        font-weight: bolder;
    }

    .container
    {
        margin-top: 70px;
        padding: 50px;
        background-color: white;
        border-radius: 2rem;
    }

    @font-face {
        font-family: "Glyphicons Halflings";
        src: url("../fonts/glyphicons-halflings-regular.woff2");
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->

</div>
<script src="../js/nightmode.js" type='text/javascript'></script>
</body>
</html>