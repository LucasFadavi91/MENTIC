<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MENTIC - Menu principal</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
<link rel="stylesheet" href="../css/menu_categories.css">
<link rel="stylesheet" href="../css/tarjetas.css">
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
            Módulos
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">    
              <?php foreach($userModulos=getUserModulos($_SESSION["id_user"]) as $value) : ?>
                  <a class="dropdown-item night-mode-available" href="../controllers/controllers_modulos/controller_modulo<?php echo getNumeroModulo($value); ?>.php">
                   <?php echo $value ?> </a>   
              <?php endforeach; ?>
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../controllers/controller_temario.php">Temario</a>
            <a class="dropdown-item night-mode-available" href="controller_preguntas.php">Preguntas destacadas</a>    
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
            <a class="dropdown-item night-mode-available" href="controller_perfil.php">Tu perfil</a>
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

 <!-- ----------EMPIEZA EL MENU------------ -->  
 <br>
    <br>

        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                       <div class="col-md-12 text-center">
                        <h5>¡Bienvenido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-star"></i></i><b style="color:#007bff;" >&nbsp;<?php echo htmlspecialchars($_SESSION["name"]); ?>!</b></h5>
                       </div>
                       <br>
                        <div class="myform form night-mode-available">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1 style="color: #007bff;">Módulos</h1>
                                </div>
                            </div>
                            <br>
                            <!--
                            <div class="col-md-12 text-center ">
                                <button type="button" onclick="window.location.href='../controllers/controllers_modulos/controller_modulo1.php'" name="asignatura1" id="asignatura1" class=" btn btn-block mybtn btn-primary tx-tfm">Módulo 1</button>
                                <button type="button" name="asignatura2" id="asignatura2" class=" btn btn-block mybtn btn-primary tx-tfm">Módulo 2</button>
                            </div>-->

                            <!-- Esto añade la navegabilidad -->

                            <div class="col-md-12 text-center ">
                              <?php foreach($userModulos=getUserModulos($_SESSION["id_user"]) as $value) : ?>
                                
                                <button type="button" onclick="window.location.href='../controllers/controllers_modulos/controller_modulo<?php echo getNumeroModulo($value); ?>.php'" name="asignatura<?php echo getNumeroModulo($value); ?>" id="asignatura<?php echo getNumeroModulo($value); ?>" class=" btn btn-block mybtn btn-primary tx-tfm"><?php echo $value ?></button>

                              <?php endforeach; ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<script src="../js/nightmode.js" type='text/javascript'></script>
</body>
</html>