<?php 
  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  exit("No estas logueado, datos incorrectos.");
		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="">
</head>
<body>

	<h3>Bienvenido : <?php echo htmlspecialchars($_SESSION["id_user"]) ?></h3>

<a href="../controllers/logout.php"><button>Cerrar Sesión</button></a>
<div id="menu">
<ul>
  <li><a href="">Aprender</a></li>
  <li><a href="">Estudiar</a></li>
</ul>
</div>



</body>
</html>