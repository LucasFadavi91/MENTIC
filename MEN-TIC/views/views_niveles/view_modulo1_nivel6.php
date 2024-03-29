<?php 
/*
  session_start();

  if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
    //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../controllers/controller_register_login.php");
    exit;
    
  }
  */
?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MENTIC - Nivel 3</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
<link href='../../css/nightmode.css' rel='stylesheet'>
<link rel="icon" href="../../img/favicon-16x16.png" type="image/png" sizes="16x16">

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
<link rel="stylesheet" href="../../css/tarjetas.css">
</head>
<body oncontextmenu='return false' class='snippet-body night-mode-available'>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #007bff;">
    <a class="navbar-brand" href="../../controllers/controller_menu_principal.php">
      
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
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Módulos
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
              <?php foreach($userModulos=getUserModulos($_SESSION["id_user"]) as $value) : ?>
                  <a class="dropdown-item night-mode-available" href="../../controllers/controllers_modulos/controller_modulo<?php echo getNumeroModulo($value); ?>.php">
                  <?php echo $value ?> </a>   
              <?php endforeach; ?>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../../controllers/controller_temario.php">Temario</a>
            <a class="dropdown-item night-mode-available" href="../controller_preguntas.php">Preguntas destacadas</a>    
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
            <a class="dropdown-item night-mode-available" href="../controller_perfil.php">Tu perfil</a>
            <a class="dropdown-item night-mode-available" href="#">Configuración</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item night-mode-available" href="../../controllers/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo getPuntos($_SESSION["id_user"]); ?> <i class="fa fa-star" style="color:yellow">&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
        </li>
        
      </ul>
     
      
    </div>
  </nav>
  
<!--  -------- EMPIEZAN LAS TARJETAS --------  -->


<div class="container mt-5">
    <div class="row night-mode-available">
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="../../img/imagenes_subniveles/subnivel1.png" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>SUBNIVEL 1</span>
                      <span class="text-black-50">Pasaba por aquí</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <p>
                  Las técnicas para incrementar o perfeccionar conductas tienen como finalidad ofrecer refuerzos a las personas con la intención de que repitan e interioricen conductas que se consideran adecuadas con el objetivo de que las incluyan en su repertorio de manera continua.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel1">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel6/controller_modulo1_nivel6_subnivel1.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="../../img/imagenes_subniveles/subnivel2.png" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>SUBNIVEL 2</span>
                      <span class="text-black-50">Aficionado</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <p>
                  Es importante ofrecer opciones de ocio de estén por encima de las dificultades con las que se pueden encontrar las personas con diversidad funcional y posibilitar, como profesionales, lo que necesiten en este sentido.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel2">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel6/controller_modulo1_nivel6_subnivel2.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="../../img/imagenes_subniveles/subnivel3.png" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>SUBNIVEL 3</span>
                      <span class="text-black-50">Especialista</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <p>
                  Algunas de las conductas que podemos poseer pueden no ser adecuadas en las relaciones con los demás y, por lo tanto, se hace necesario aplicar diferentes técnicas de modificación de conducta que permitan eliminar o reducir la frecuencia e intensidad de la conducta.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel3">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel6/controller_modulo1_nivel6_subnivel3.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="../../img/imagenes_subniveles/subnivel4.png" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>SUBNIVEL 4</span>
                      <span class="text-black-50">Profesional</span>
                      <span class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </span></div>
                </div>
                <p>
                  Existen diferentes recursos, espacios, juegos y juguetes que se pueden utilizar para disfrutar en nuestro tiempo libre solos o en compañía. Las personas con diversidad funcional encuentran dificultades de acceso y utilización de los mismos.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel4">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel6/controller_modulo1_nivel6_subnivel4.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="../../img/imagenes_subniveles/subnivel5.png" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>SUBNIVEL 5</span>
                      <span class="text-black-50">Experto</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <p>
                  Vamos a repasar y/o profundizar en los contenidos que hemos trabajado en los subniveles anteriores a través de un caso práctico y/o diferentes situaciones prácticas, relacionadas con los contenidos de esta unidad de trabajo. 
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel5">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel6/controller_modulo1_nivel6_subnivel5.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SUBNIVEL1 -->
<div id="subnivel1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content night-mode-available">
      <div class="modal-header">
        <h4 class="modal-title">SUBNIVEL 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
      </div> <br>
      Son innegables los beneficios que el ocio tiene en la salud y el bienestar físico y mental de las personas. Este disfrute se complica en los colectivos con los que trabajamos ya que les resulta difícil encontrar actividades y/o  recursos que se adapten a sus necesidades o costearlos.<br>
      Vamos a comenzar con este subnivel viendo algunas de las técnicas que nos pueden ayudar a incrementar o perfeccionar las conductas.<br>
      ¿Comenzamos?
    </div>
  </div>
</div>

<!-- MODAL SUBNIVEL2 -->
<div id="subnivel2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content night-mode-available">
      <div class="modal-header">
        <h4 class="modal-title">SUBNIVEL 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
      </div> <br>
      Hay que tener en cuenta que para poder disfrutar de un ocio sano y saludable a la vez que relajante, esto no debe ser responsabilidad únicamente del usuario, sino que habrá varios agentes que serán los encargados de velar por esa igualdad de oportunidades.<br>
      El concepto de ocio inclusivo es básico en este sentido al igual que las funciones que desempeñas como profesional en este aspecto, haciéndose necesario definir y adaptar el proyecto de animación del ocio y tiempo libre a las necesidades y características de nuestros usuarios sin olvidar las dificultades que nos podemos encontrar.<br>
      Vamos a ver cómo de claros tienes estos conceptos.<br>
      Preparados, listos,…

    </div>
  </div>
</div>

<!-- MODAL SUBNIVEL3 -->
<div id="subnivel3" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content night-mode-available">
      <div class="modal-header">
        <h4 class="modal-title">SUBNIVEL 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
      </div> <br>
      Hemos visto técnicas para incrementar o perfeccionar conductas y otras para adquirir conductas que no se poseen. Ahora vamos a ver técnicas para reducir o eliminar conductas.<br>
      Estas técnicas van dirigidas a que desaparezcan del repertorio de conductas de una persona aquellas que no son adecuadas o que pueden llegar a ser inadecuadas o disruptivas dentro del entorno social y comportamental de un individuo.<br>
      ¡¡Vamos a repasar estos contenidos para ver sí los diferenciamos entre sí y con el resto de técnicas que ya hemos visto!!!<br>
      ¿Preparado para comprobarlo?<br>
      3, 2, 1…
    </div>
  </div>
</div>

<!-- MODAL SUBNIVEL4 -->
<div id="subnivel4" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content night-mode-available">
      <div class="modal-header">
        <h4 class="modal-title">SUBNIVEL 4</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
      </div> <br>
      Además de los diferentes tipos de juego, existen multitud de formas de ocupar el tiempo libre: en la naturaleza, aprendiendo cosas, turismo, actividades relacionadas con el arte, utilizando las nuevas tecnologías, de voluntariado, talleres,…<br>
      Todas estas actividades ayudan a las personas a realizarse, disfrutar, conocer gente nueva… en definitiva, sirve para autorrealizarse.<br>
      También se utilizan juegos para divertirse en el tiempo libre. Las personas con diversidad funcional necesitarán  juegos adaptados que puedan utilizar en funciones de su situación y esté adaptado a las características de su diversidad funcional. Esta es una de las dificultades que se encuentran las personas con diversidad funcional para poder acceder y disfrutar de los juegos y de los juguetes.<br>
      Este es el último paso para comprobar los aprendizajes de este nivel.<br>
      ¿Jugamos?
    </div>
  </div>
</div>

<!-- MODAL SUBNIVEL5 -->
<div id="subnivel5" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content night-mode-available">
      <div class="modal-header">
        <h4 class="modal-title">SUBNIVEL 5</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
      </div> <br>
      Una vez vistos todos los contenidos de la primera unidad de trabajo, vamos a comprobar los mismos aplicados a una situación práctica.<br>
      Para ello, se te plantea un caso práctico relacionado con dichos contenidos teóricos y se te formulará una serie de preguntas al respecto con la finalidad de relacionar los contenidos teóricos con o en la situación práctica.<br>
       La mayor parte del camino ya la has realizado. Ahora sólo queda el último paso.<br>
       ¿Preparado/a para darlo?<br>
       ¡Vamos allá!
    </div>
  </div>
</div>

<script src="../../js/nightmode.js" type='text/javascript'></script>
</body>
</html>