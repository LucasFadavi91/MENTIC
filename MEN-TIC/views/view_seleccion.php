<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MENTIC</title>

<link href='../css/seleccion.css' rel='stylesheet'>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="icon" href="../img/favicon-16x16.png" type="image/png" sizes="16x16">

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</head>

<body>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

 <form class="formulario" action="../controllers/controller_seleccion.php" method="POST">
    <div class="row d-flex justify-content-center mt-100">
        <div class="col-md-6"> 
            <select id="choices-multiple-remove-button" name="categories" placeholder="Selecciona hasta 5 asignaturas" multiple>
                <?php foreach($categories as $category) : ?>
                        <option><?php echo $category ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
      <!--<input type="submit" value="Agregar" name="agregar">-->
  <input type="submit" value="Enviar" name="alta">
</form>


<!-- Scripts -->
<script>
$(document).ready(function(){

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
            });
    });

</script>
 
</body>
</html>