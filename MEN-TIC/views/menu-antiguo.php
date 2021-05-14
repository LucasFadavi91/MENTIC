<?php 

  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  exit("No estas logueado, datos incorrectos.");
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MENTIC - Aprende con nosotros</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <section>
        <article>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
                        <a class="navbar-brand" href="./../views/LandingPage.php">MENTIC</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Aprender <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Historias</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Más <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Temario</a></li>
                                    <li><a href="#">Preguntas destacadas</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!--
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form> -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Mis Puntos</a></li>
                            <li>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo htmlspecialchars($_SESSION["name"]) ?>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tu Perfil</a></li>
                                    <li><a href="#">Configuración</a></li>
                                    <li><a href="#">Información</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ayuda</a></li>
                                    <li><a href="../controllers/logout.php">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </article>
    </section>

    <section>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div>   
                            <div class="level">
                                <a href="../views/prueba1/index.html">Level 1</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <div class="level">
                            Level 2
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <div class="level">
                            Level 3
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <div class="level">
                            Level 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <div>
                                <hr>
                                <br>
                                <h3>Información</h3>
                                <div class="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <br>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
    </section>
     <footer>
       <p style="text-align: left;margin-left: 10px;"> &copy; Copyright 2021 Mentic<p>
    </footer>
</body>

</html>