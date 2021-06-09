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
<title>MENTIC - Nivel 1</title>
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
                  Toda persona tiene una características biológicas, psicológicas y sociales que le definen y que estarán presentes en sus manifestaciones conductuales en todas y cada una de las situaciones en las que tenga que interactuar.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel1">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel1/controller_modulo1_nivel1_subnivel1.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></a>
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
                  La atención, la percepción y la memoria son funciones cognitivas básicas que están presentes y son necesarias en nuestra vida diría. Si no prestamos atención no podemos percibir lo que ocurre a nuestro alrededor y, por lo tanto, no podrá pasar a nuestra memoria a corto y/o largo plazo.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel2">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel1/controller_modulo1_nivel1_subnivel2.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  Existen otra serie de funciones cognitivas que se denominan superiores: lenguaje, razonamiento,… que nos proporcionar la posibilidad de expresarnos, tomar decisiones, resolver problemas,… de diferentes maneras.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                   <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel3">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel1/controller_modulo1_nivel1_subnivel3.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  Todo lo anterior, junto con nuestra inteligencia emocional influye o determinan nuestra personalidad y, por lo tanto, la forma en la que nos comportamos con nosotros mismos y con los demás, cómo nos percibimos, cuánto nos queremos,…
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel4">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel1/controller_modulo1_nivel1_subnivel4.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  <a href="../../controllers/controllers_subniveles_nivel1/controller_modulo1_nivel1_subnivel5.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
      Las personas estamos influenciadas por diferentes aspectos y/o dimensiones que conforman nuestra identidad BIOPSICOSOCIAL, estando nuestras necesidades vinculadas también con estas dimensiones y que, en relación con las personas en situación de dependencia, tendremos que dirigir ahí nuestra intervención para dar respuesta a las mismas.<br>
      Tenemos que tener en cuenta que cada persona tienes una forma de comportarse diferente influenciada por estas dimensiones y por diferentes estímulos que nos afectarán de diferentes maneras, estando relacionado con los diferentes tipos de conductas que pueden tener las personas y nuestros usuarios.<br>
      ¡Vamos a ver ahora cómo de claros han quedado estos conceptos!!!!<br>
      ¿Estás lista o listo para comprobarlo?<br>
      ¡Vamos allá!
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
      Todas las personas tienen unas funciones cognitivas que les permiten y/o ayudan en su vida diaria, aunque en ocasiones no es así debido a alguna situación de diversidad funcional.<br>
      Las funciones cognitivas son básicas y superiores. Dentro de las básicas se encuentran, la atención, la percepción y la memoria que son las que ocupan los contenidos de este subnivel.<br>
      Estas funciones cognitivas se ven influenciadas no solamente por el Coeficiente Intelectual (CI) de la persona, sino también por las experiencias y/o vivencias por las que las personas atraviesan a lo largo de su vida, puesto que son funciones que evolucionan y se transforman de manera continua, adaptándose al entorno.<br>
      Revisa los contenidos teóricos antes de empezar si lo necesitas. Si ya estás preparado o preparada, ¡empezemos!!

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
      Además de las funciones cognitivas básicas existentes otras funciones cognitivas que se consideran superiores debido a los procesos cognitivos que se activan o se ponen en funcionamiento cuando las usamos. Estas son el pensamiento, el razonamiento y el lenguaje. <br>
      Estas funciones cognitivas nos permiten comunicarnos, solucionar las diferentes situaciones que se nos presentar, expresar los que sentimos y queremos, desarrollar nuestra creatividad y, en definitiva, desarrollarnos de una manera más profunda.<br>
       ¡¡Vamos a comprobar si estos conceptos los hemos interiorizado!!!<br>
       ¿Preparado para comprobarlo?<br>
       ¡Vamos allá!
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
      Además de todo lo que hemos visto en los subniveles anteriores, hay varios aspectos que también son importantes de cara a conocer la dimensión BIOPSICOSOCIAL de las personas.  Estos contenidos son las emociones y la personalidad.<br>
      Las emociones marcan nuestras conductas y vienen dirigidas por nuestros pensamientos, por lo que es de vital importancia que aprendamos a conocer, identificar y gestionar adecuadamente nuestras emociones, pero también que identifiquemos las de los demás.<br>
      Cada persona tiene una forma concreta y específica de ser, de pensar, de actuar… esto conforma su PERSONALIDAD. Una personalidad que se puede ir reajustando a lo largo de la vida  las diferentes situaciones y/o experiencias vitales con las que se puedan encontrar.<br>
      Este es el momento de comprobar que estos conceptos están claros.<br>
      ¿Lista o listo para comprobarlo?<br>
      ¡Vamos allá!
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
      ¿Preparado para darlo?<br>
      ¡Vamos allá!
    </div>
  </div>
</div>

<script src="../../js/nightmode.js" type='text/javascript'></script>
</body>
</html>