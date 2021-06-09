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
<title>MENTIC - Nivel 2</title>
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
            Modulos
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../../controllers/controllers_modulos/controller_modulo1.php">Modulo 1</a>
            <a class="dropdown-item night-mode-available" href="#">Modulo 2</a>
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
                  Las habilidades sociales nos permiten adecuar nuestra manera de comportarnos a diferentes entornos y/o contexto. Estos pueden ser más o menos favorables, más o menos amables. Una buena competencia social nos permitirá reajustar nuestra conducta a dichas situaciones y/o personas.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel1">Leer más</button>
                  <a href="../../views/tests/tests_subniveles_nivel1/test1"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></a>
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
                  No nacemos con un repertorio en habilidades sociales que nos permitan adaptarnos y gestionar todas las situaciones que se nos vayan presentando de manera correcta, pero existen diferentes técnicas que nos permiten entrenarlas y poder perfeccionarlas a lo largo de nuestra vida.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel2">Leer más</button>
                  <a href="../../views/tests/tests_subniveles_nivel1/test2"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  Las personas con diversidad funcional presentan diversas carencias de cara a establecer relaciones sociales sanas y duraderas. Esto se debe en parte a la falta de habilidades sociales derivadas de su situación y en parte a la respuesta que reciben de su entorno. ¡Vamos a conocerlas!
                </p>
                <div class="d-flex justify-content-between install mt-3">
                   <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel3">Leer más</button>
                  <a href="../../views/tests/tests_subniveles_nivel1/test3"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  Son varios los recursos que pueden ayudar o favorecer las relaciones sociales de las personas con diversidad funcional. Por eso, es importante que las conozcas y sepas que pueden aportar a nuestros usuarios para poder guiarles y orientarles cuando lo necesiten.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                    <!-- CONTENIDO -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel4">Leer más</button>
                  <a href="../../views/tests/tests_subniveles_nivel1/test4"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  <a href="../../views/tests/tests_subniveles_nivel1/test5"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
        Las habilidades sociales nos permiten adecuar nuestra manera de comportarnos a diferentes entornos y/o contexto. Estos pueden ser más o menos favorables, más o menos amables. Una buena competencia social nos permitirá reajustar nuestra conducta a dichas situaciones y/o personas.<br>
        Qué nuestra actitud sea “adecuada” dependerá o estará relacionado con los diferentes componentes con los que están relacionadas las habilidades sociales: los conductuales, los cognitivos y los fisiológicos.<br>
	      Vamos a ver ahora si los contenidos vistos han echado raíces o tenemos que seguir regándolos.<br>
        ¿Estás preparado o preparada para comprobarlo?<br>
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
        No nacemos con un repertorio en habilidades sociales que nos permitan adaptarnos y gestionar todas las situaciones que se nos vayan presentando de manera correcta, pero existen diferentes técnicas que nos permiten entrenarlas y poder perfeccionarlas a lo largo de nuestra vida.<br>
        Estas técnicas hacen un recorrido desde la enseñanza directa o a través de modelos hasta las técnicas específicas que se enfocan a dotar a la persona de un conjunto de estrategias que le permitan desenvolver con soltura en situaciones tanto positivas como en aquellas que puedan resultar más difíciles y/o conflictivos.<br>
        Revisa los contenidos teóricos antes de empezar si lo necesitas. Si ya estás preparado o preparada, ¡empezemos!
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
        El hecho de que todas las personas no somos iguales ni nos relacionamos de la misma manera o con la misma facilidad o dificultad con las personas se puede aplicar a las personas con diversidad funcional, haciéndose necesario conocer sus características a nivel social.<br>
        Normalmente presentarán déficits en las habilidades sociales, mantener o iniciar relaciones con otras personas, capacidad para gestionar situaciones  difíciles,… siendo obligado para nosotros, como profesionales, conocer estas características, en aras de poder ayudarles y/o proporcionales herramientas que les pueden resultar útiles.<br>
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
        Las personas no siempre saben qué hacer o dónde acudir para buscar ayuda a los diferentes problemas que se les pueden presentar en su vida cotidiana. Si estas dificultades son a nivel social, todavía resulta más difícil saber qué hacer o dónde acudir.<br>
        Son varios los recursos que pueden ayudar o favorecer las relaciones sociales de las personas con diversidad funcional. Por eso, es importante que las conozcas y sepas que pueden aportar a nuestros usuarios para poder guiarles y orientarles cuando lo necesiten.<br>
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