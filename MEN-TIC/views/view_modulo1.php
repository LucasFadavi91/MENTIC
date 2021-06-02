<?php 

  session_start();

  if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
    //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../controllers/controller_register_login.php");
    exit;
    
  }
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
<link href='../css/nightmode.css' rel='stylesheet'>
<link href='../css/levels.css' rel='stylesheet'>
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
        <li class="nav-item">
          <a class="nav-link" href="../controllers/controller_menu_principal.php">Aprender <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="controller_historias.php">Historias</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Modulos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../controllers/controller_modulo1.php">Modulo 1</a>
            <a class="dropdown-item" href="#">Modulo 2</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Temario</a>
            <a class="dropdown-item" href="controller_preguntas.php">Preguntas destacadas</a>    
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
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="controller_perfil.php">Tu perfil</a>
            <a class="dropdown-item" href="#">Configuración</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../controllers/logout.php"><i class="fa fa-sign-out"></i> Cerrar sesión</a>
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
                      <img
                            src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 1
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Pasaba por aquí...
                    </div>
                    <a href="../controllers/controller_modulo1_nivel1.php" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img
                            src="https://mediapool.bmwgroup.com/cache/P9/202010/P90403620/P90403620-bmw-m4-competition-x-kith-10-2020-2002px.jpg" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 2
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Aficionado
                    </div>
                    <a href="#" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img
                            src="https://soymotor.com/sites/default/files/styles/mega/public/imagenes/noticia/bmw_m2_1.jpg?itok=zbJu7fej" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 3
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Aventajado
                    </div>
                    <a href="#" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img
                            src="https://www.km77.com/images/medium/3/8/6/9/bmw-m5-cs-frontal-lateral.353869.jpg" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 4
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Profesional
                    </div>
                    <a href="#" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img
                            src="https://phantom-marca.unidadeditorial.es/4d64bcff7eac5a945a58a6ea25ac81cd/resize/1320/f/jpg/assets/multimedia/imagenes/2020/10/15/16027503427472.jpg" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 5
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Especialista
                    </div>
                    <a href="#" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>

            <div class="col-md-4">
              <div class="card-sl">
                  <div class="card-image">
                      <img
                            src="https://cdn.motor1.com/images/mgl/43OlM/s1/2021-lexus-ls-facelift.jpg" width="350px" height="233px" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-book"></i></a>
                    <div class="card-heading night-mode-available">
                        Nivel 6
                    </div>
                    <div class="card-text night-mode-available">
                        Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                    </div>
                    <div class="card-text night-mode-available">
                        Maestro
                    </div>
                    <a href="#" class="card-button acceder_tarjeta night-mode-available"> Acceder al nivel </a>
                </div>
            </div>
  </div>  

<script src="../js/nightmode.js" type='text/javascript'></script>
</body>
</html>