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
<title>MENTIC - Historias</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
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
<link rel="stylesheet" href="../../css/nightmode.css">
<link rel="stylesheet" href="../../css/temas.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha256-ybRkN9dBjhcS2qrW1z+hfCxq+1aBdwyQM5wlQoQVt/0=" crossorigin="anonymous" />
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Modulos
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../../controllers/controller_modulo1.php">Modulo 1</a>
            <a class="dropdown-item night-mode-available" href="#">Modulo 2</a>
          </div>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más
          </a>
          <div class="dropdown-menu night-mode-available" aria-labelledby="navbarDropdown">
            <a class="dropdown-item night-mode-available" href="../../controllers/controller_temario.php">Temario</a>
            <a class="dropdown-item night-mode-available" href="../../controllers/controller_preguntas.php">Preguntas destacadas</a>
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
            <a class="dropdown-item night-mode-available" href="../../controllers/controller_perfil.php">Tu perfil</a>
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

  <div class="container night-mode-available">
  <h1> Tema 4. </h1>
    <h2> Técnicas de modificación de conducta </h2> <br><br><br>
    <img width="700px" class="centrarimagen" src="../../img/temas/tema4/intro.png"> <br><br><br>
    <div> <!-- Párrafo 1 -->
      <img width="600px" src="../../img/temas/tema4/frases.png" style="float:right; margin-left:20px;">
      <h3> Introducción. </h3>
      <p>Ya hemos visto en anteriores unidades que la mayoría de los comportamientos se aprenden. Muchísimas cosas que hacemos y pensamos, las hemos aprendido por IMITACIÓN. Otras cosas las hemos aprendido a través de los <span class="sub">RESULTADOS o CONSECUENCIAS</span> que obtenemos de nuestro comportamiento.</p><br>
      Por lo tanto, los procedimientos por los que aprendemos conductas son fundamentalmente:
      <ul class="minus">
        <li>Por las CONSECUENCIAS que siguen a las conductas.</li>
        <li>Por IMITACIÓN de otras personas (modelos).</li>
        <li>Por asociación de estímulos.</li>
      </ul>
      Es importante que recuerdes que LA CONDUCTA es todo lo que hace, dice y está directamente relacionado con lo que piensa o siente un ser humano.<br>
      Las conductas NO ocurren en el vacío porque sí, sino que se realizan:
      <ul class="ticks">
        <li>En un lugar.</li>
        <li>En una situación.</li>
        <li>En un momento.</li>
        <li>Con otras personas.</li>
      </ul>
      Antes de que ocurra una conducta hay unos <span class="negrita">ANTECEDENTES</span> que “avisan” de lo que va a ocurrir y nos predisponen para comportarnos de una manera adecuada.<br>
      Después, hay unas <span class="negrita">CONSECUENCIAS</span> que afectan a la aparición futura de dichas conductas.<br><br>
      <h5>ANTECEDENTES-CONDUCTA-CONSECUENCIA</h5>
      <div class="cuadro centrarimagen">
        <span class="negrita">TEN EN CUENTA:</span><br>
        Una misma conducta no obtiene siempre las mismas consecuencias (depende de las circunstancias y de las personas).<br><br>
        Si queremos modificar una conducta debemos de fijarnos en los ANTECEDENTES, pues quizá haya que modificarlos también.
      </div><br><br>
      Las CONSECUENCIAS que OBTIENE UNA CONDUCTA, pueden ser <span class="negrita">AGRADABLES</span> O <span class="negrita">DESAGRADABLES</span>. <br>
      SI LA CONDUCTA VA SEGUIDA DE consecuencias AGRADABLES, lo más probable es que vuelva a producirse en un futuro. <br>
      Si la conducta va seguida de CONSECUENCIAS DESAGRADABLES, lo más probable es que se reduzca o desaparezca.<br>
      Para enseñar, incrementar o hacer desaparecer determinadas conductas existen unas técnicas que veremos en los siguientes apartados, denominadas TÉCNICAS DE MODIFICACIÓN DE CONDUCTA (que ya conocemos).<br>
    </div><br><br>
    <div> <!-- Párrafo 2 -->
      <h3>Las técnicas de modificación de conducta</h3>
      Son las <span class="negrita">estrategias</span> y <span class="negrita">procedimientos</span> destinados a conseguir el aumento de la frecuencia o el perfeccionamiento de una conducta que ya se posee, también para adquirir una conducta nueva o reducir o eliminar una conducta.<br>
      Las Técnicas de modificación de conducta se basan en la relación entre la conducta y las consecuencias que se derivan de su ejecución. <br>
      Repetimos aquellas conductas que nos proporcionen consecuencias agradables y evitaremos las que supongan consecuencias molestas o desagradables.<br>
      A continuación se exponen las diferentes técnicas que estudiaremos en esta unidad:<br><br>
      <h5>- TÉCNICAS PARA INCREMENTAR O PERFECCIONAR CONDUCTAS</h5>
      <ul>
        <li>Refuerzo positivo.</li>
        <li>Refuerzo negativo.</li>
      </ul>
      <h5>- TÉCNICAS PARA LA ADQUISICIÓN DE NUEVAS CONDUCTAS</h5>
      <ul>
        <li>Moldeado.</li>
        <li>Modelado.</li>
        <li>Encadenamiento.</li>
      </ul>
      <h5>- TÉCNICAS PARA REDUCIR O ELIMINAR CONDUCTAS</h5>
      <ul>
        <li>Coste de respuesta (o castigo negativo).</li>
        <li>Castigo positivo.</li>
        <li>Extinción.</li>
        <li>Refuero de conductas incompatibles.</li>
        <li>Sobrecprrección.</li>
        <li>Tiempo fuera o aislamiento.</li>
      </ul>
      <h5>- OTRAS TÉCNICAS</h5>
      <ul>
        <li>Economía de fichas.</li>
        <li>El contrato de conducta.</li>
      </ul><br>
      <hr class="night-mode-available"><br>
      <ul class="mayus">
        <li> <span class="negrita"><span class="sub"> TÉCNICAS PARA INCREMENTAR O PERFECCIONAR CONDUCTAS </span></span><br><br>
          <span class="sub">El REFUERZO POSITIVO:</span> Se emplea para incrementar la frecuencia o el perfeccionamiento de una respuesta proporcionando un estímulo agradable al sujeto.<br><br>
          Los refuerzos positivos pueden ser:
          <ul>
            <li>Refuerzos sociales.</li>
            <li>Refuerzos materiales.</li>
            <li>Refuerzos basados en actividades.</li>
            <li>Refuerzos canjeables (economía de fichas).</li>
          </ul><br>
          <span class="negrita">Orientaciones para aplicar bien el refuerzo positivo: </span>
          <ul>
            <li>Elegir los refuerzos adecuados según el usuario y el momento.</li>
            <li>El refuerzo se aplica inmediatamente después de la ejecución de la conducta deseada, nunca antes ni pasado mucho tiempo.</li>
            <li>Decidir la frecuencia de la aplicación del refuerzo: continua o intermitente.</li>
            <li>Una vez aprendida la conducta, se <span class="sub">RETIRAN PROGRESIVAMENTE LOS REFUERZOS</span>.</li>
          </ul><br>
          <span class="sub">El REFUERZO NEGATIVO:</span> Consiste en retirar una situación molesta o desagradable para el usuario cuando ejercite una determinada conducta.<br>
          <ul>
            <li>Podemos suprimir para conseguir mayor bienestar del usuario: objetos, circunstancias o acciones que no le apetece hacer,…</li>
            <li>El refuerzo negativo debe ser inmediato y de aplicación continua o intermitente.</li>
            <li>Tanto en el REFUERZO POSITIVO como en el REFUERZO NEGATIVO, lo que se da y lo que se quita tiene consecuencias agradables para el usuario, por lo que se incrementa la frecuencia de la conducta deseada.</li>
            <li>Un refuerzo intermitente es más efectivo que uno continuo, salvo al principio.</li>
          </ul>
        </li><br><br>
        <li> <span class="negrita"><span class="sub"> TÉCNICAS PARA LA ADQUISICIÓN DE NUEVAS CONDUCTAS </span></span><br><br>
          <span class="sub">El MODELADO </span>
          <ul>
            <li>Es un proceso de aprendizaje basado en la <span class="negrita">observación de un modelo</span> cuya conducta, pensamientos o actitudes se consideran adecuadas.</li>
            <li>Se trata de que el usuario tome de referencia e imite conductas que observa en otra persona. El TAS tiene que tener presente que puede ser un modelo a imitar por el usuario.</li>
            <li>Esta técnica sirve para aprender conductas que todavía no sabe hacer o para aumentar conductas que ya sabe paro que no realiza casi nunca.</li>
            <li>En el modelado es fundamental la elección del modelo y será fundamental la importancia que tenga el modelo para el usuario.</li>
            <li>La mayor parte de la conducta humana se aprende por observación mediante modelado.</li>
            <li>Pero no imitamos todas las conductas, sino SOLO ALGUNAS. Es decir... SELECCIONAMOS las conductas a imitar en base a si estas tienen CONSECUENCIAS POSITIVAS para quien las realiza.</li>
          </ul><br>
          También, observando los comportamientos de unos MODELOS, <span class="sub">podemos aprender a no hacer o dejar de hacer</span> aquellas conductas por las que el modelo obtiene CONSECUENCIAS NEGATIVAS O AVERSIVAS.<br>
          No imitamos todos los comportamientos que vemos a nuestro alrededor y tampoco imitamos a todas las personas.<br><br>
          <p style="text-align: center; font-weight: bolder; font-size: 18pt;">..................ELEGIMOS MODELOS!!</p><br>
          Los mejores modelos son:
          <ul>
            <li><span class="negrita">Las personas</span> que nos son <span class="negrita">más cercanas</span> (por edad, sexo, ambiente...).</li>
            <li>Las <span class="negrita">personas de “prestigio”</span> para nosotros (padres, amigos, maestros...).</li>
            <li>Las personas “valoradas” en nuestra sociedad (deportistas, modelos, actrices y actores, superhéroes...).</li>
          </ul><br>
          Con los niños pequeños o personas con una diversidad funcional intelectual, es necesario, en un principio que el modelo esté delante y realizando esa acción para imitarlo.<br>
          Una vez aprendida la conducta, no es necesario que el modelo esté presente para imitarlo. Realizan la conducta en las mismas situaciones.<br>
          En un momento evolutivo más avanzado, recordarán la conducta del modelo y la imitarán en situaciones distintas de la original.<br>
          La técnica de modelado es muy útil para enseñar o aumentar conductas del tipo:
          <ul>
            <li><span class="negrita">AYUDA Y COOPERACIÓN</span> (colaborar en las tareas de casa, ordenar sus cosas, independencia personal).</li>
            <li><span class="negrita">RELACIONES SOCIALES</span> (saludar, dar gracias, decir cosas agradables, conversar con otros...).</li>
            <li><span class="negrita">CONDUCTAS ESCOLARES/TALLERES</span> (Hacer tareas, interesarse por las manualidades, leer...).</li>
            <li><span class="negrita">CONDUCTAS COGNITIVAS</span> (creencias, asumir determinados valores,...).</li>
          </ul><br>
          <h5>PASOS A SEGUIR EN EL USO DE LA TÉCNICA DEL MODELADO:</h5>
          <ul class="numeros">
            <li><span class="sub">DEFINIR</span> CONCRETAMENTE LA CONDUCTA QUE QUEREMOS TRABAJAR.</li>
            <li><span class="sub">HACER LA CONDUCTA</span> FRECUENTEMENTE DELANTE DEL USUARIO. TAMBIÉN PODEMOS REFORZAR A OTROS COMPAÑEROS O AMIGOS DELANTE DE ÉL POR HACER ESA CONDUCTA.</li>
            <li><span class="sub">REFORZAR</span> SIEMPRE AL USUARIO E INMEDIATAMENTE DESPUÉS <span class="negrita">DE QUE HAGA O INTENTE HACER</span> LA CONDUCTA</li>
            <li><span class="sub">MEDIR</span> LA CONDUCTA PARA COMPROBAR LOS AVANCES.</li>
            <li>CUANDO LA CONDUCTA SEA MÁS FRECUENTE, REFUÉRZALE DE MANERA MÁS INTERMITENTE.</li>
          </ul><br><br>
          <span class="sub">El MOLDEADO </span>
          <ul>
            <li>Es un procedimiento que consiste en <span class="negrita">reforzar</span> de manera selectiva las conductas más aproximadas a la que se quiere instaurar, de manera que el usuario consiga realizar dicha conducta a través de aproximaciones sucesivas.</li>
            <li>Esta técnica se utiliza para adquirir conductas que no figuran en el repertorio del sujeto y que son difíciles de adquirir, o bien porque la conducta sea compleja o porque el usuario esté muy limitado.</li>
            <li>Se utiliza en programas de rehabilitación de funciones motoras y en educación especial.</li>
          </ul><br>
          <h6>Consideraciones para la aplicación del moldeado:</h6>
          <ul>
            <li>Definir claramente la meta.</li>
            <li>Definir los pasos intermedios.</li>
            <li>Refuerzos continuos al principio y exigencia menor.</li>
            <li>Mayor exigencia a medida que se avance en el aprendizaje.</li>
            <li>Refuerzos intermitentes a medida que se adquiere la conducta.</li>
          </ul><br>
          <span class="sub">El ENCADENAMIENTO </span>
          <ul>
            <li>Consiste en la formación de una conducta compleja a partir de otras más sencillas que el individuo ya posee en su repertorio.</li>
            <li>Esta técnica se utiliza sobre todo en el área de autonomía personal (aseo, vestirse, comer,…), cuando el usuario conoce muchos de los pasos de la conducta final pero no puede coordinarlos para completarla.</li>
            <li>Secuencia detallada de cepillado de dientes:<br><br>
              <img width="850px" class="centrarimagen" src="../../img/temas/tema4/cepillado.png">
            </li>
          </ul>
          Esta técnica se puede complementar con otras técnicas (refuerzos, moldeado, modelado...).<br><br>
          <h6>Aplicación del encadenamiento:</h6>
          <ul>
            <li>Especificar la conducta definitiva que se quiere alcanzar con todas las subconductas necesarias para llegar a ella.</li>
            <li>Secuenciar las instrucciones detalladamente para cada una de las subconductas, en función de la capacidad de la persona usuaria.</li>
            <li>Entrenar cada subconducta.</li>
            <li>Encadenar, en orden de ejecución, las diferentes subconductas para llegar a la ejecución de la conducta completa.</li>
          </ul>
        </li><br><br>
        <li> <span class="negrita"><span class="sub"> TÉCNICAS PARA REDUCIR O ELIMINAR CONDUCTAS </span></span><br><br>
          Cuando empleemos cualquier castigo o técnica aversiva, es imprescindible que el usuario conozca el motivo y que se le ofrezca la posibilidad de seguir conductas alternativas adecuadas.<br>
          Las técnicas que se utilicen para eliminar o reducir conductas no deben de aplicarse bajo:
          <ul>
            <li>Amenazas.</li>
            <li>Chantaje emocional.</li>
            <li>Indiferencia o desprecio.</li>
            <li>Reprimendas.</li>
            <li>Comentarios críticos.</li>
          </ul><br>
          <span class="sub">EL COSTE DE RESPUESTA O CASTIGO NEGATIVO </span>
          <ul>
            <li>Consiste en retirar algo agradable tras la ejecución de una conducta no deseada.</li>
            <li>El objetivo es que esta conducta desaparezca o se reduzca.</li>
            <li>Algunos ejemplos son: eliminar gestos de aprobación, palabras cariñosas, privación de actividades que le son gratas,…</li>
          </ul><br>
          <span class="sub">EL CASTIGO POSITIVO </span>
          <ul>
            <li>Aplicación de una consecuencia aversiva tras la realización de una conducta que se considera inadecuada o no deseable.</li>
            <li>Se aplican especialmente para corregir conductas agresivas o autolesivas (una reprimenda, una prohibición,...).</li>
            <li>Son eficaces al principio, pero a largo plazo son contraproducentes: <span class="negrita">no educan</span> y pueden provocar <span class="negrita">habituación</span> (la persona se acostumbra).</li>
          </ul><br>
          <span class="sub"> LA EXTINCIÓN  </span>
          <ul>
            <li>La extinción se aplica en aquellas situaciones en las que se desea eliminar o reducir la frecuencia de una determinada conducta.</li>
            <li>Ignorar una conducta no deseada es fácil de aplicar y muy eficaz para eliminar conductas inadaptadas.</li>
            <li>Se debe aplicar siempre que se produzca la conducta y de forma continua (no intermitente) y combinada con el refuerzo de conductas alternativas.</li>
          </ul><br>
          <span class="sub"> EL REFUERZO DE CONDUCTAS INCOMPATIBLES </span><br>
          Administración de recompensas de manera continua a aquellas conductas que son incompatibles con la que se quiere eliminar y no aplicar ningún refuerzo a la que se pretende que desaparezca (extinción).<br><br>
          <span class="sub"> LA SOBRECORRECCIÓN </span><br>
          <ul>
            <li>Consiste en que el usuario que ha realizado una conducta incorrecta, corrija los efectos provocados por su acción y a la vez repita la conducta deseable.</li>
            <li> Está formada por dos elementos:
              <ul>
                <li><span class="negrita">La restitución:</span> dejar el entorno tal y como estaba antes de su conducta.</li>
                <li><span class="negrita">La práctica positiva:</span> efectuar repetidamente la conducta alternativa</li>
              </ul>
            </li>
          </ul><br>
          <span class="sub"> EL TIEMPO FUERA O AISLAMIENTO </span><br>
          <ul>
            <li>Consiste en retirar un refuerzo o impedir el acceso a él, en respuesta a una conducta inapropiada.</li>
            <li> Según el refuerzo que se retira:
              <ul>
                <li><span class="negrita"><span class="cursiva">Tiempo fuera de actividad:</span></span> Se le retira de la actividad que para él es agradable si mientras la está realizando hace cosas inapropiadas.</li>
                <li><span class="negrita"><span class="cursiva">Tiempo fuera de lugar:</span></span> Se le retira del lugar donde se encuentra a gusto.</li>
              </ul>
            </li>
            <li>La retirada debe ser breve para que no se deshabitúe a los ambientes agradables.</li>
          </ul>
        </li><br><br>
        <li> <span class="negrita"><span class="sub"> OTRAS TÉCNICAS DE CONTROL DE CONDUCTAS </span></span><br><br>
          Existen otras técnicas de modificación de conducta en las que se establece una negociación y un acuerdo entre profesional y usuario.<br>
          Estas técnicas son eficaces tanto para incrementar conductas como para eliminar o disminuir conductas no adecuadas.<br>
          Las técnicas más importantes son la <span class="sub">economía de fichas</span> y el <span class="sub">contrato de conductas</span>.
          <br><br>
          <span class="sub"> LA ECONOMÍA DE FICHAS  </span>
          <ul>
            <li>La <span class="negrita">Economía de Fichas</span> es una técnica psicológica, muy utilizada con los niños, que se ha probado muy útil a la hora de fomentar conductas sociales que el usuario no realiza tanto como sería de esperar</li>
            <li>Es una técnica que combina el <span class="negrita">refuerzo positivo</span> (gana fichas cuando emite la conducta deseada) con el <span class="negrita"><a href="http://es.wikipedia.org/wiki/Castigo" target="blank">castigo negativo</a></span> (pierde fichas cuando las conductas no son deseadas) y el manejo del <span class="negrita"><a target="blank" href="http://es.wikipedia.org/wiki/Autocontrol">autocontrol</a></span>.</li>
            <li>Al poner en práctica esta técnica, definimos con el usuario una serie de conductas deseables, que son las que queremos fomentar, y otras negativas, y premiarle con un <span class="negrita"><a target="blank" href="http://es.wikipedia.org/wiki/Reforzador">reforzador</a></span> simbólico, unas fichas que pueden ser cruces en un cuadro, tabas, pegatinas,..., que podrá <span class="sub">canjear cuando llegue a determinada cantidad por un premio material o social</span>. Del mismo modo que se recompensan las conductas deseables, aquellas que son inadecuadas se castigan con la retirada de fichas</li>
            <li>El propio hecho de ir acumulando fichas es un refuerzo para el usuario y bien manejado (más como un juego que como una amenaza) servirá además para fomentar la <span class="negrita"><a target="blank" href="http://es.wikipedia.org/wiki/Cohesi%C3%B3n">cohesión</a></span> grupal.</li>
          </ul><br>
          <span class="sub"> EL CONTRATO DE CONDUCTA </span>
          <ul>
            <li>El Contrato Conductual es una técnica de la terapia de conducta en la que se llega a un acuerdo que se plasma en un contrato, generalmente escrito, que recoge las conductas a realizar por los firmantes del contrato, así como los premios y castigos que se aplicarán tras su cumplimiento o incumplimiento</li>
          </ul>
        </li>
      </ul>
    </div><br> <!-- FOOTER -->
      <hr class="night-mode-available">
      <div class="footer">
        <p class="profe cursiva">
              Profesora: Miriam Díaz Hortal
        </p>
        <p class="modulo cursiva">
              Módulo: Atención y Apoyo Psicosocial
        </p>
      </div>
  </div> 
  

  <script src="../../js/nightmode.js" type='text/javascript'></script>
  
</body>
</html>