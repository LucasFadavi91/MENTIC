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
                  Repasamos en este subnivel las funciones cognitivas básicas y superiores, conocemos algunos test o escalas para evaluar las funciones cognitivas de los usuarios con los que podemos trabajar y empezar a ver cómo son las mismas en las personas mayores.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel1">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel5/controller_modulo1_nivel5_subnivel1.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></a>
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
                  Seguimos conociendo las características que presentan diferentes colectivos con los que vamos a trabajar en cuanto al déficit o deterioro de sus funciones cognitivas, tanto básicas como superiores...
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel2">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel5/controller_modulo1_nivel5_subnivel2.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  Todos los programas de entrenamiento cognitivo tiene unos objetivos generales que marcan las líneas a seguir, así como que todas las técnicas de mantenimiento, estimulación y rehabilitación se centran en alguna función cognitiva: TOR, memoria, orientación y reminiscencia.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel3">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel5/controller_modulo1_nivel5_subnivel3.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  En este subnivel vemos el resto de técnicas para el mantenimiento, estimulación y rehabilitación de las funciones y que se utilizan en los centros en los que puedes desempeñar tú labor profesional: lenguaje, razonamiento y cálculo, psicomotricidad, musicoterapia y otras técnicas, técnicas de relajación y PPI.
                </p>
                <div class="d-flex justify-content-between install mt-3">
                <!-- CONTENIDO -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subnivel4">Leer más</button>
                  <a href="../../controllers/controllers_subniveles_nivel5/controller_modulo1_nivel5_subnivel4.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
                  <a href="../../controllers/controllers_subniveles_nivel5/controller_modulo1_nivel5_subnivel5.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
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
      Cómo ya hemos visto, las funciones cognitivas se dividen en dos tipos: funciones cognitivas básicas (atención, percepción y memoria) y funciones cognitivas superiores (pensamiento, razonamiento y lenguaje).<br>
      Para comprobar el real funcionamiento de estas funciones existen escalas que pueden aplicarse para ver el nivel de deterioro que pueden tener los diferentes colectivos con los que podemos trabajar.<br>
      Comenzaremos viendo en este subnivel también, el deterior de las funciones cognitivas de las personas mayores que están ocasionados por el paso de los años.<br>
      ¿Quieres comprobar tus conocimientos?
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
      Cada colectivo o grupo de usuarios con los que vamos a trabajar pueden presentar ciertas dificultades en algunas de las funciones cognitivas, tanto básicas como superiores.<br>
      Como hemos dicho, en muchas ocasiones no se podrá recuperar la funcionalidad o reestablecer el normal funcionamiento de dichas funciones, pero sí se podrá proporcionar medios y/o estrategias que ayuden a mantenerlas el máximo tiempo posible o ralentizar su avance.<br>
      Para ello, es importante que como futuros profesionales conozcamos las características principales que estos colectivos presentan en cuanto al deterioro o déficit en dichas funciones cognitivas.<br>
      ¿Preparado/preparada para poner en acción tus funciones cognitivas?<br>
      ¿Te acompaño?
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
      Una vez que tenemos una noción general de las características que presentan los grupos de población con los que podemos desarrollar nuestra labora profesional, vamos a conocer los objetivos que tienen los programas de Entrenamiento cognitivo y algunos de esas técnicas que tienen como finalidad el mantenimiento, estimulación y rehabilitación de las funciones cognitivas.<br>
      EEn este subnivel vamos a conocer en qué consiste la terapia de orientación a la realidad (TOR), el entrenamiento de la memoria, la orientación (espacial, temporal y personal) y la reminiscencia. Todas ellas con cierta relación entre sí en cuanto a que una de las funciones cognitivas que se trabajan en todas es la memoria.<br>
      ¡Vamos a ver cómo está tú memoria después de trabajar los contenidos en clase!.<br>
      ¿Te acordarás?<br>
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
      En este subnivel continuamos viendo técnicas para el mantenimiento, estimulación y rehabilitación de las funciones cognitivas.<br>
      En esta ocasión veremos el lenguaje y el razonamiento y cálculo dentro de las técnicas para trabajar las funciones cognitivas superiores.<br>
      También veremos otras técnicas como la psicomotricidad, la musicoterapia, las técnicas de relajación y otras técnicas, así como los programas de psicoestimulación integral (PPI).<br>
      La elección de una técnica u otro dependerá de cada usuario y de los criterios profesionales y a cómo avance el diagnóstico del usuario, pero siempre se velará con la elección de las técnicas más adecuadas para conseguir mejorar la calidad de vida de las personas.<br>
      ¡Vamos a comprobar cuánto de “claro” lo tienes!<br>
      ¿Te apetece intentarlo?<br>
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
     	Para ello, se te plantea un caso práctico relacionado con dichos contenidos teóricos y se te formulará una serie de preguntas al respecto con la finalidad de relacionar los contenidos teóricos con o en la situación práctica. <br>
       La mayor parte del camino ya la has realizado. Ahora sólo queda el último paso.<br>
       ¿Preparado/a para darlo?<br>
       ¡Vamos allá!
    </div>
  </div>
</div>

<script src="../../js/nightmode.js" type='text/javascript'></script>
</body>
</html>