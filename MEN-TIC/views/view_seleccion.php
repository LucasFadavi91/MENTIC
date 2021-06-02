<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MENTIC</title>


<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="icon" href="../img/favicon-16x16.png" type="image/png" sizes="16x16">

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <style> 
        .tx-tfm {
            text-transform: uppercase;
        }
        .mybtn {
            border-radius: 50px;
        }
        .mt-100 {
            margin-top: 100px;
        }   
        body{
            background-color: whitesmoke;
        }
    </style>
</head>

<body>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <div class="row d-flex justify-content-center mt-100"> 
        <div class="col-md-4 text-center"> 
          <h5>Hola <b style="color:#007bff;" ><?php echo htmlspecialchars($_SESSION["name"]); ?></b>, selecciona los modulos que vas a practicar: &nbsp;&nbsp;&nbsp;</h5>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form class="formulario" action="../controllers/controller_seleccion.php" method="POST"> 
                    <select id="choices-multiple-remove-button" name="modulos[]" placeholder="Selecciona hasta 5 modulos" multiple> 
                        <?php foreach($modulos as $modulo) : ?>
                                <option><?php echo $modulo ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="row d-flex justify-content-center"> 
                        <div class="col-md-3 text-center"> 
                            <input type="submit" value="Enviar" name="alta" class=" btn btn-block mybtn btn-primary tx-tfm">
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>      



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