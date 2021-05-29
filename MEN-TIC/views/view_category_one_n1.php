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
<title>MENTIC - Category one</title>
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
            <a class="dropdown-item" href="../controllers/controller_category_one.php">Modulo 1</a>
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
          <a class="nav-link" href="#">Mis Puntos</a>
        </li>
        
      </ul>
     
      
    </div>
  </nav>
  
<!--  -------- EMPIEZAN LAS TARJETAS --------  -->


<div class="container mt-5">
    <div class="row night-mode-available">
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://i.pinimg.com/originals/5d/c2/f6/5dc2f60a5b2f660efb4b96b34a1178ea.jpg" width="70">
                    <div class="d-flex flex-column ml-2"><span>Nivel 1</span>
                      <span class="text-black-50">What is Lorem Ipsum?</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>La comunidad del anillo</span>
                  <a href="../controllers/controller_category_one_n1.php"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://thumbs.dreamstime.com/z/j-r-retrato-de-tolkien-125545236.jpg" width="70">
                    <div class="d-flex flex-column ml-2"><span>Nivel 2</span>
                      <span class="text-black-50">What is Lorem Ipsum?</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>Las dos torres</span><a href="../views/prueba2"><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://st4.depositphotos.com/16418170/21369/v/1600/depositphotos_213697740-stock-illustration-moscow-russia-august-21-2018.jpg" width="70">
                    <div class="d-flex flex-column ml-2"><span>Nivel 3</span>
                      <span class="text-black-50">What is Lorem Ipsum?</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>El retorno del rey</span><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://thumbs.dreamstime.com/z/homer-portrait-125545216.jpg" width="70" height="72">
                    <div class="d-flex flex-column ml-2"><span>Nivel 4</span>
                      <span class="text-black-50">What is Lorem Ipsum?What is Lorem Ipsum?</span>
                      <span class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>What is Lorem Ipsum?</span><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://previews.123rf.com/images/marusyachaika/marusyachaika1809/marusyachaika180900074/109067988-fyodor-dostoevsky-engraved-vector-portrait-with-ink-contours-russian-novelist-short-story-writer-ess.jpg" width="70">
                    <div class="d-flex flex-column ml-2"><span>Nivel 5</span>
                      <span class="text-black-50">What is Lorem Ipsum?</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>What is Lorem Ipsum?</span><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 effect night-mode-available">
                <div class="d-flex flex-row mb-3"><img src="https://st4.depositphotos.com/16418170/22329/v/1600/depositphotos_223291458-stock-illustration-ivan-turgenev-engraved-vector-portrait.jpg" width="70">
                    <div class="d-flex flex-column ml-2"><span>Nivel 6</span>
                      <span class="text-black-50">What is Lorem Ipsum?</span>
                      <span class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span></div>
                </div>
                <h6>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</h6>
                <div class="d-flex justify-content-between install mt-3"><span>What is Lorem Ipsum?</span><span class="text-primary">Realizar Test&nbsp;<i class="fa fa-angle-right"></i></span></div>
            </div>
        </div>
    </div>
</div>

<script src="../js/nightmode.js" type='text/javascript'></script>
</body>
</html>