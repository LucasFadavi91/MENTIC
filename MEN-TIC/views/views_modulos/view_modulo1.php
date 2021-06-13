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
<title>MENTIC - Modulo</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
<link href='../../css/nightmode.css' rel='stylesheet'>
<link href='../../css/levels.css' rel='stylesheet'>
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


/* 
SOMBRA DE TARJETAS
.card-sl
{
  box-shadow: 2px 2px 12px 5px black;
}*/

</style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <script type='text/javascript'></script>
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

  <!-- ------------------------------ -->
  
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img src="../../img/imagenes_niveles/nivel1.png" width="350px" height="233px" />
                  </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema1.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                          Nivel 1
                    </div>
                     <div class="card-text night-mode-available">
                        <h5>Introducción a la Intervención Psocisocial</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      Conocer los diferentes aspectos que conforman la dimensión BIOPSICOSOCIAL de las personas, así como diferentes aspectos relacionados con la conducta y las funciones cognitivas de ada individuo es necesario para poder centrar el contenido del módulo.
                    </div>
                    <div class="card-text night-mode-available">
                        <p class="test1"></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel1">Leer más</button>
                        <div id="nivel1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- CONTENIDO -->
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Introducción a la Intervención Psocisocial</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                              La primera unidad de trabajo recoge diferentes aspectos relacionados con conceptos básicos que serán necesarios para entender de manera completa la dimensión biopsicosocial de las personas y usuarios con los que trabajaréis en el futuro. <br>
                              Se incluyen también aspectos importantes relacionados con la psicología y las funciones cognitivas del ser humano, tanto básicas como superiores, así como la importancia de las emociones y sentimientos y de la inteligencia emocional en las personas.<br>
                              En cada subnivel se trabajarán unos contenidos, existiendo la posibilidad de repasar contenidos o de ampliarlos con los diferentes subniveles y las actividades que se incluyen en máster o en historias.<br>¡Ánimo!!! Comenzamos una aventura que te dirige a profundizar y afianzar los contenidos trabajados y los conocimientos que irás adquiriendo a lo largo de este curso y de este módulo.
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel1.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img src="../../img/imagenes_niveles/nivel2.png" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema2.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 2
                    </div>
                    <div class="card-text night-mode-available">
                        <h5>Las relaciones sociales</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      Saber cómo relacionarnos de manera adecuada y sana en diferentes contextos de interacción social se hace imprescindible a todos los niveles. Como profesionales debemos contar con ciertas habilidades sociales en la interacción con los usuarios y con estrategias para poder orientarles y ayudarles para que ellos puedan mejorar las suyas.
                    </div>
                    <div class="card-text night-mode-available">
                    <!-- CONTENIDO -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel2">Leer más</button>
                    <div id="nivel2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Las relaciones sociales</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                              La segunda unidad de trabajo recoge diferentes aspectos relacionados con las habilidades sociales y los diferentes componentes que estas tienen.<br>
                              También se recogen diferentes estrategias que pueden ser útiles para el entrenamiento de las habilidades sociales en diferentes situaciones, prestando especial atención a una seria de técnicas específicas que podríamos utilizar con nuestros usuarios.<br>
                              Otros aspectos que se recogen son aspectos relacionados con los déficits en habilidades sociales que presentan los colectivos con los que trabajaremos, así como diferentes recursos que pueden ayudarles a establecer o fomentar relaciones sociales.<br>
                              ¿Estás preparado o preparada para comprobar tus conocimientos en relación a estos contenidos? Las relaciones sociales son necesarias para cualquier persona y, como profesional, tienes que conocer determinados aspectos para identificarlos y, quizás, ponerlos en práctica.<br>
                              ¿Estás listo o lista? ¡¡¡Vamos a comprobarlo!!!
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel2.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                            <img src="../../img/imagenes_niveles/nivel3.png" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema3.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 3
                    </div>
                    <div class="card-text night-mode-available">
                      <h5>Motivación y aprendizaje en la atención psicosocial</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      En este nivel veremos aspectos relacionados con la inteligencia y cómo aprende el ser humano y la influencia que tiene la motivación de las personas en relación a cómo se produce este aprendizaje, destacando algunas estrategias que pueden resultar útiles con personas con diversidad funcional.
                    </div>
                    <div class="card-text night-mode-available">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel3">Leer más</button>
                    <div id="nivel3" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- CONTENIDO -->
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Motivación y aprendizaje en la atención psicosocial</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                                La tercera unidad de trabajo recoge diferentes aspectos relacionados con el aprendizaje humano en general y la inteligencia, resaltando la teoría de las Inteligencias Múltiples de Howard Gardner.<br>
                                Se incluyen también otros aspectos relacionados o que pueden influir en el aprendizaje como la actitud, la motivación, la maduración y la experiencia.Se incluyen algunas de las principales corrientes y/o teorías del aprendizaje que se han usado y se siguen usando en la actualidad y que pueden explicar las diferentes formas de aprender que tienen las personas.<br>
                                Se recogen, asimismo, aspectos relacionados con las dificultades de motivación y de cara al aprendizaje de colectivos específicos y algunas estrategias que se podrían utilizar para ayudarles.<br>
                                ¡Ánimo!!! Veremos sí tu motivación te ayuda o no en este proceso de aprendizaje. <br>
                                ¡Date una oportunidad… o dos!!!
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel3.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img src="../../img/imagenes_niveles/nivel4.png" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema4.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 4
                    </div>
                    <div class="card-text night-mode-available">
                      <h5>Técnicas de modificación de conducta</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      Cada persona tiene diferentes formas de comportarse antes determinadas situaciones. Algunas querremos que se mantengan, otras no. Aquí veremos las principales técnicas de modificación de conducta que podremos utilizar en diferentes situaciones, según lo que necesitemos.
                    </div>
                    <div class="card-text night-mode-available">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel4">Leer más</button>
                    <div id="nivel4" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- CONTENIDO -->
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Técnicas de modificación de conducta</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                              La cuarta unidad de trabajo recoge diferentes técnicas de modificación de conducta que podemos utilizar en diferentes situaciones.<br>
                              Las personas tienen conductas socialmente adecuadas que es necesario reforzar para mantenerlas, pero en ocasiones tienen maneras de comportarse o relacionarse que no son adecuadas y que dificultan las interacciones y el día a día con las demás personas.<br>
                              Existen una serie de técnicas que pueden ayudar a mantener, modificar o incluso adquirir determinadas conductas con la finalidad de mantener relaciones más sanas y positivas con las personas que nos rodean.<br>
                              Esto es lo que vamos  a trabajar a lo largo de este nivel.<br>
                              Qué me dices, ¿te animas a comprobarlo?
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel4.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img src="../../img/imagenes_niveles/nivel5.png" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema5.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 5
                    </div>
                    <div class="card-text night-mode-available">
                     <h5>Técnicas de mantenimiento y rehabilitación de las funciones cognitivas</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      Existe un conjunto de técnicas y/o actividades que se pueden aplicar con las personas en situación de dependencia para mejorar, mantener o recuperar las funciones cognitivas de las personas con diversidad funcional.
                    </div>
                    <div class="card-text night-mode-available">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel5">Leer más</button>
                    <div id="nivel5" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- CONTENIDO -->
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Técnicas de mantenimiento y rehabilitación de las funciones cognitivas</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                              Ya hemos hablado de las funciones cognitivas en la primera unidad de trabajo. Vamos a recordar esos conceptos y a profundizar en técnicas concretas para trabajarlas. <br>
                              SLas funciones cognitivas están presentes en la totalidad de las tareas que realizamos en nuestro día a día. Por eso es de vital importancia su adecuado funcionamiento.<br>
                              Pero eso siempre es así, ya que en muchas ocasiones están afectados y o no funcionan del todo bien, o no funcionan en absoluto, dificultando las diferentes tareas, pero sencillas que sean, que realiza la persona.<br>
                              En ocasiones no se puede recuperar lo perdido, pero se puede ayudar a ralentizar el avance, realizando diferentes actividades y/o aplicando distintas técnicas que tienen como objetivo trabajar las funciones cognitivas y mejorar la calidad de vida de los usuarios.<br>
                              Este es el contenido sobre el que trabajaremos en este nivel.<br>
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel5.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img src="../../img/imagenes_niveles/nivel6.png" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="../../controllers/controllers_temas/controller_tema6.php"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 6
                    </div>
                    <div class="card-text night-mode-available">
                      <h5>Animación y dinamización del ocio y tiempo libre en colectivos específicos</h5>
                    </div>
                    <div class="card-text night-mode-available">
                      Todas las personas, con diversidad funcional o sin ella, tienen derecho a poder elegir entre diferentes y variadas opciones de ocio para poder disfrutar, solos o en compañía, durante su tiempo libre desconectando de la rutina de su día a día.
                    </div>
                    <div class="card-text night-mode-available">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivel6">Leer más</button>
                    <div id="nivel6" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- CONTENIDO -->
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content night-mode-available">
                              <div class="modal-header">
                                <h4 class="modal-title">Animación y dinamización del ocio y tiempo libre en colectivos específicos</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="night-mode-available" aria-hidden="true">×</span></button>
                              </div> <br>
                              Todas las personas tienen un ritmo de personal y laboral ajetreado, lo que hace casi imprescindible que se tenga tiempo libre para disfrutar  haciendo aquello que nos gusta y nos hace sentir verdaderamente bien, realmente relajados y nos permita desconectar de las obligaciones del día a día.<br>
                              En las personas con diversidad funcional, encontrar ofertas de ocio para disfrutar en su tiempo libre se hace bastante complicado puesto que no se tiene en cuenta sus necesidades reales y, en muchas ocasiones, ni tan siquiera existen opciones acordes o que puedan realizar.<br>
                              Es por eso que tiene una importancia vital que se vayan creando servicios y recursos de ocio accesibles y que lleguen a todas las personas, con o sin diversidad funcional.<br>
                              Hay que sensibilizar y dar visibilidad, para que se normalicen las opciones de ocio para todos, las opciones en las que puedan participar en igualdad de oportunidades.<br>
                              Este es el contenido sobre el que trabajaremos en este nivel.<br>
                              ¡Empezamos!<br>
                            </div>
                          </div>
                        </div>
                    </div>
                    <a href="../../controllers/controllers_niveles/controller_modulo1_nivel6.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>
  </div>  

<script src="../../js/nightmode.js" type='text/javascript'></script>
</body>
</html>