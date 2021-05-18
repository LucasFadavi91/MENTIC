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
<title>Perfil</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link href='../css/perfil.css' rel='stylesheet'>



<style>
body {
    background: whitesmoke;
}
#position
{
    margin-top: 120px;
}
label{
    font-weight: bold;
}
</style>
</head>



<body oncontextmenu='return false' class='snippet-body'>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #007bff;">
    <a class="navbar-brand" href="../views/LandingPage.php">
      
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
          <a class="nav-link" href="../controllers/controller_menu-principal.php">Aprender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controllers/controller_historias.php">Historias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Temario</a>
            <a class="dropdown-item" href="../controllers/controller_preguntas.php">Preguntas destacadas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Alguna cosilla mas</a>
          </div>
        </li>
        
      </ul>


      <ul class="navbar-nav mr-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION["name"]) ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../controllers/controller_perfil.php">Tu perfil</a>
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

  <!-- PERFIL -->

  <h1 style="text-align: center; font-size: 40pt; margin-top: 50px;">PERFIL</h1>
  
  <div class="container emp-profile" id="position">
            <form method="post" enctype="multipart/form-data">

                <!--
                <div class="row">
                    <div class="col-md-3" style="left: 38%;">
                        <div>
                            <img src="#" alt="" id="imagen" width="150px"/>
                        </div>
                    </div>
                    <div class="col-md-3" style="left: 38%;">
                        <form enctype="multipart/form-data" method="post" action="upload.php">
                            <div>
                                <img src="#" alt="" id="imagen" width="150px"/>
                                Cambiar imagen:
                                <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> 
                                <input type="file" name="file" id="elinput"/>
                                <input type="submit" name="submit" value="Cambiar imagen de perfil">
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                -->

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label> <!-- NOMBRE -->
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo htmlspecialchars($_SESSION["name"]) ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellidos</label> <!-- APELLIDOS -->
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo htmlspecialchars($_SESSION["apellidos"]) ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"> 
                                                <label>Email</label> <!-- EMAIL -->
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo htmlspecialchars($_SESSION["email"]) ?></p>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

</body>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Asignamos el atributo src a la tag de imagen
                    $('#imagen').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // El listener va asignado al input
        $("#elinput").change(function() {
        readURL(this);
        });
    </script>
</html>