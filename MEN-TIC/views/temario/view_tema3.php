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
    <h1> Tema 3. </h1>
    <h2> Motivación y aprendizaje en la atención psicosocial </h2> <br><br><br>
    <img width="700px" class="centrarimagen" src="../../img/temas/tema3/intro.png"> <br><br><br>
    <div> <!-- Párrafo 1 -->
      <img src="../../img/temas/tema3/frases.png" style="float:right; margin-left:20px;">
      <h3> Introducción. </h3>
      <p>Los seres vivos están en continuo aprendizaje. En todo momento y con cualquier persona, situación,… se puede aprender algo.<br> Para que este aprendizaje se produzca y además sea lo más duradero posible, la motivación es un factor muy importante y que determinada de manera directa si ese aprendizaje se va a producir o no y de qué manera,.<br> Estos elementos, aprendizaje y motivación, sufren alguna variación en las personas en situación de dependencia como veremos a lo largo de esta unidad de trabajo y es nuestra responsabilidad, como TAPSD, motivarles para que aprendan (en algunas ocasiones para que no olviden o lo hagan lo más despacio posible).</p>
    </div><br>
    <div> <!-- Párrafo 2 -->
      <h3>El aprendizaje humano</h3>
      El ser humano se adapta al medio a través del aprendizaje. Entendemos por <span class="negrita">aprendizaje</span> el <span class="sub">conjunto de procesos mediante los cuales adquirimos conceptos, conocimientos y habilidades</span>.<br> Desde que nace hasta que muere, una persona no deja de aprender. La mayoría de nuestras habilidades son aprendidas. Pero para que una persona aprenda, es necesario que exista motivación y la oportunidad de ejecutar la conducta aprendida.<br> En los ancianos y personas con discapacidad es frecuente encontrar desmotivación debido a sus dificultades (deterioro sensorial, cognitivo,..)<br> Sin embargo, tanto ancianos como en las personas con discapacidad pueden aprender con herramientas y estrategias específicas.<br> Es fundamental que el TAD conozca las necesidades de estos colectivos, empleando estrategias y recursos específicos que les ayuden a concentrarse y a interesarse por el aprendizaje de cosas nuevas.
    </div><br>
    <div> <!-- Párrafo 3 -->
      <h3>¿Qué factores favorecen el aprendizaje?</h3>
      Son varios los factores que favorecen el aprendizaje. A continuación vamos a concretar algunos de ellos:
      <ul>
        <li> <span class="negrita">La inteligencia:</span><br>
        Relacionada con la habilidad de aprender. Una persona más inteligente aprende más rápido y aplica los aprendizajes a diferentes situaciones.<br> 
        La <span class="negrita">inteligencia</span> es la <span class="sub">capacidad para razonar, tener conocimientos de las cosas, entender, comprender, crear y solucionar problemas</span>. <br>
        Otros conceptos que hay que tener en cuenta en relación con la inteligencia son el de <span class="cursiva">Inteligencia Fluida e Inteligencia Cristalizada</span>. <br>
        La <span class="negrita">Inteligencia Fluida</span> es la capacidad de la persona para adaptarse y enfrentar situaciones nuevas de forma ágil, sin que el aprendizaje previo, la experiencia o el conocimiento adquirido supongan una ayuda determinante para su manifestación. Es decir, es la <span class="cursiva">capacidad de adquirir nuevos conocimientos y adaptarse a situaciones nuevas</span>. Por ejemplo, resolver analogías, agrupar números, ordenar conjuntos,… <br>
        La <span class="negrita">Inteligencia Cristalizada</span> es el conjunto de capacidades, estrategias y conocimientos que constituyen el grado de desarrollo cognitivo logrado mediante la historia de aprendizaje de una persona. <span class="cursiva">Se refiera a la utilización de las habilidades intelectuales ya aprendidas</span>. <br>
        Depende mucho del aprendizaje obtenido de la experiencia de una persona en el contexto cultural en que vive y se relaciona. <br>
        El estrés deteriora las estructuras cerebrales y, por lo tanto, afecta a las funciones cognitivas como la memoria o la orientación espacial. Por ejemplo, debatir las causas de la pobreza.<br>
        <ul>
          <li> <span class="negrita"><span class="sub"> ¿Cómo se mide habitualmente? </span></span><br>
            La inteligencia se mide a través de lo que se conoce como <span class="negrita">cociente intelectual</span>. El cociente intelectual (C.I.) es un sistema de calificación numérica que sirve para indicar el grado de inteligencia de una persona. <br>
            Es una puntuación del rendimiento de un individuo en una prueba de inteligencia concreta y en un momento determinado. <br>
            El C.I. puede variar en sucesivas mediciones, pues depende del estado emocional y ambiental de la persona y del tipo de prueba que se utilice. <br>
            <span class="sub">Se interpreta como el cociente entre la edad mental (EM) y la edad cronológica (EC)</span>. <br>
            A través de diversos test se obtiene información del rendimiento de una persona comparado con el rendimiento de otras personas de su misma edad. <br>
            La edad mental y la cronológica deberían de ser iguales.
            <ul>
              <li>Si EM es > EC, la inteligencia es superior al promedio.</li>
              <li>Si EM es < EC, la inteligencia será inferior al promedio.</li>
            </ul>
          </li><br>
          <p class="enfasis">¡¡¡IMPORTANTE!!! NO ETIQUETAR A UNA PERSONA POR SU C.I.</p><br>
          <li> <span class="negrita"><span class="sub"> ¿Las inteligencias múltiples? </span></span><br>
            El planteamiento de las <span class="negrita">Inteligencias Múltiples</span> por parte de Howard Gardner supuso un cambio importante en cuanto a la interpretación de lo que se entiende por inteligencia y de quiénes son inteligentes.<br>
            La teoría de las inteligencias múltiples es un modelo propuesto por <span class="sub">HOWARD GARDNER</span> en el que la inteligencia no es vista como algo unitario que agrupa diferentes capacidades específicas, sino como un conjunto de inteligencias múltiples, distintas e independientes. Define la inteligencia como la «capacidad de resolver problemas y/o elaborar productos que sean valiosos en una o más culturas».
            <img src="../../img/temas/tema3/inteligencia.png" style="float:left; margin-right: 25px;">
            <span class="sub">HOWARD GARDNER</span> añade que, así como hay muchos tipos de problemas que resolver, también hay muchos tipos de inteligencia. Hasta la fecha GARDNER y su equipo de la <span class="negrita">Universidad Harvard</span> han identificado ocho tipos distintos:
            <ul>
              <li><span class="negrita">Inteligencia lingüístico-verbal</span>: el habla nos permite comunicarnos con los demás. Al hablar expresamos sentimientos, emociones, opiniones, ideas, conocimientos,… <br>
              Poseen: los líderes políticos o religiosos, escritores, poetas, redactores…</li>
              <li><span class="negrita">Inteligencia lógico-matemática</span>: utilizada para resolver problemas de lógica y de matemáticas. Se corresponde con el modo de pensamiento del hemisferio lógico y con lo que la cultura occidental ha considerado siempre como única inteligencia. <br>
              Poseen: los economistas, ingenieros, científicos,...</li>
              <li><span class="negrita">Inteligencia espacial</span>: permite construir un modelo mental del mundo en tres dimensiones.<br>
              Poseen: los marineros, pilotos, ingenieros, cirujanos, escultores, artistas, fotógrafos, arquitectos, publicistas, decoradores, diseñadores,... </li>
              <li><span class="negrita">Inteligencia musical</span>: capacidad de escuchar, oír e interpretar la música. <br>Poseen: los cantantes, críticos musicales, compositores y músicos,...</li>
              <li><span class="negrita">Inteligencia corporal-cinestésica</span>: capacidad para utilizar el propio cuerpo para realizar actividades o resolver problemas. Realizar tareas que requieren fuerzas, rapidez, coordinación, flexibilidad, equilibrio,… <br>
              Poseen: los deportistas, escultores, modelos, artesanos, cirujanos, bailarines,...</li>
              <li><span class="negrita">Inteligencia intrapersonal</span>: permite entenderse a sí mismo, detectar las propias emociones y gestionarlas. <br>
              Poseen: los buenos vendedores, los profesores, los terapeutas,...</li>
              <li><span class="negrita">Inteligencia interpersonal</span>: es la que tiene que ver con la capacidad de entender a otras personas y trabajar con ellas. <br>
              Poseen: los terapeutas, profesores, psicólogos, administradores,...</li>
              <li><span class="negrita">Inteligencia naturalista</span>: permite percibir las relaciones entre las especies y grupos de objetos y personas reconociendo las posibles diferencias o semejanzas entre ellos. Se especializa en identificar, observar y clasificar miembros de grupos o especies siendo el campo de observación el mundo natural. <br>
              Poseen: los biólogos, naturalistas, ecologistas,…</li>
            </ul><br>
            Todos los seres humanos poseen las ocho inteligencias en mayor o menor medida. Todas las inteligencias son igualmente importantes; el problema es que el sistema escolar prioriza las dos primeras de la lista.

          </li>
        </ul>
        </li><br>
        <li> <span class="negrita">La actitud:</span><br>
          La actitud es una predisposición a responder de una determinada manera frente a una situación.<br>
          La actitud es un estado mental más o menos estable, que es difícil de modificar. Las actitudes:
          <ul>
            <li>Actitudes positivas <i class="fas fa-long-arrow-alt-right"></i> favorecen la conducta.</li>
            <li>Actitudes negativas <i class="fas fa-long-arrow-alt-right"></i> dificultan la conducta.</li>
          </ul>
          Para lograr una mayor predisposición hacia algo tendremos que modificar la actitud y pasar a la motivación.
        </li><br>
        <li> <span class="negrita">La motivación:</span><br>
          La motivación es la fuerza que incita al individuo a realizar una determinada conducta. <br>
          Detrás de cada deseo siempre hay una motivación. <br>
          Las recompensas y los premios pueden llevarnos a aprender nuevas conductas y a motivar más a una persona.<br>
          Motivación y aprendizaje están unidos, pues del grado de motivación va a depender el aprendizaje de pautas de comportamiento o la adquisición de nuevas conductas.<br>
          La motivación debe ser <span class="negrita">interna</span> y no esperar que siempre venga del exterior, ya que si esto es así, podemos frustrarnos y desmotivarnos con mucha frecuencia.<br><br>
          <span class="sub">La motivación de una persona para el aprendizaje dependerá de</span>:
          <ul>
            <li>Que los contenidos sean significativos y útiles para ella.</li>
            <li>Que las probabilidades de alcanzar sus metas de aprendizaje sean altas y se sienta capacitada para conseguirlas.</li>
            <li>Que reconozca que su éxito o fracaso dependen de su esfuerzo.</li>
            <li>Que el aprendizaje elimine el aburrimiento y la ansiedad.</li>
          </ul>
          Uno de los principales objetivos de los TAPSD será motivar a los usuarios a que lleven a cabo las actividades que se le requieren.
        </li><br>
        <li> <span class="negrita">La maduración:</span><br>
        La Maduración son todos los cambios biológicos (huesos, músculos, capacidad motriz, cognitiva, emocional,…) que se dan en el ser humano y que le permitirán adquirir nuevas capacidades. <br>
        Cualquier aprendizaje debe constituirse sobre la base biológica (maduración) que lo haga posible. La maduración determina la capacidad de aprendizaje, ya que son un conjunto de procesos físicos que posibilitan el desarrollo de una conducta específica.<br>
        </li><br>
        <li> <span class="negrita">La experiencia:</span><br>
        Es el conjunto de experiencias que la persona posee y que le serán útiles para afrontar nuevos conocimientos.<br>
        El aprendizaje se construye sobre lo que ya sabemos, es decir, sobre la experiencia
        </li>
      </ul>
    </div><br>
    <div> <!--  Párrafo 4 -->
      <h3>Teorías del aprendizaje</h3>
      A continuación vamos a plantear algunos aspectos generales de las principales teorías que explican el proceso de aprendizaje de los seres humanos.
      <ul class="mayus">
        <li> <span class="negrita">Conductismo ()</span><br>
          Corriente de la psicología que se basa en la observación del comportamiento o conducta de la persona y que explica el mismo como un conjunto de relaciones entre estímulos y respuestas. 
          Considera que <span class="sub">la conducta es un producto causa-efecto</span>. Es decir, toda respuesta proviene de un estímulo y todo estímulo provoca una respuesta.<br>
          Conceptos clave:
          <ul>
            <li><span class="negrita">Refuerzos</span>: Aumentar la frecuencia de la conducta e instaurarla. Se basan en las consecuencias positivas.</li>
            <li>
            <span class="negrita">Castigo</span>: Eliminar o disminuir una conducta. Esto implica una consecuencia desagradable al realizar una conducta inadecuada.<br><br>
            <table border="2" class="tablacentro">
              <tr style="background-color: lightblue; color: black;">
                <td></td>
                <th> POSITIVOS </th>
                <th> NEGATIVOS </th>
              </tr>
              <tr style="background-color: lightgreen; color: black;">
                <th>REFUERZOS</th>
                <td>Dar algo bueno o que le guste a la persona</td>
                <td>Quitar algo malo o que no le guste a la persona</td>
              </tr>
              <tr style="background-color: lightgreen; color: black;">
                <th>CASTIGOS</th>
                <td>Dar algo malo o que no le guste a la persona</td>
                <td>Quitar algo bueno o que le guste a la persona</td>
              </tr>
            </table>    
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita">Aprendizaje por observación (A. Bandura)</span><br>
        Es aquel que se produce como consecuencia de la observación e imitación de otras personas (modelos). <br>
        La respuesta que una persona da ante una situación puede estar mediatizada por lo que ha visto hacer antes a otras personas considerables como referentes.
        </li><br>
        <li> <span class="negrita">Aprendizaje por mediación (L. Vygostsky)</span><br>
          Tres niveles:
          <ul>
            <li><span class="sub">Zona de desarrollo real</span>: situación inicial de la persona antes del aprendizaje: lo que es capaz de realizar sin ayuda y con sus posibilidades. Son las competencias adquiridas y todo lo que la persona ya ha interiorizado. Por ejemplo: sabe sumar y restar</li>
            <li><span class="sub">Zona de desarrollo potencial</span>: lo que la persona será capaz de realizar, partiendo de las capacidades que tiene y con la ayuda de otras personas como mediadora: un adulto o un compañero/a más capacitado/a. Por ejemplo: le ayudan a multiplicar y dividir</li>
            <li><span class="sub">Zona de desarrollo próximo</span>: Se encuentra entre ambas zonas anteriores, entre lo que ya sabe hacer de manera efectiva y aquello de lo que es capaz de aprender con ayuda. Es la habilidad que el niño/a quiere desarrollar por sí mismo/a sin ningún tipo de apoyo o guía, pero que aún no domina. Por ejemplo: aprender a dividir y multiplicar.</li>
          </ul><br>
          Cuando la persona puede ejecutar la conducta deseada sin ayuda, se da por concluido el proceso de aprendizaje. Por lo tanto: Desarrollo potencial pasa a ser desarrollo real.<br><br>
          <h5>Técnicas relacionadas con el aprendizaje: <span class="negrita">Moldeado y encadenamiento.</span> </h5><br>
          <img width="600px" class="centrarimagen" src="../../img/temas/tema3/aprendizaje.png">
        </li><br>
        <li> <span class="negrita">Aprendizaje por descubrimiento (J. Bruner)</span><br>
          Construimos nuestros conocimientos a través del <span class="negrita">descubrimiento de contenidos</span> que acabamos asimilando. No se proporciona el resultado final, sino que es un aprendizaje que realizamos por nosotros mismos. <br>
          Esta teoría incide especialmente en la <span class="sub">motivación y la participación</span> activa del usuario en los aprendizajes, <span class="sub">incentivándole a la resolución de problemas.</span> Los aprendizajes se realizan progresivamente por las personas. Se debe guiar este aprendizaje.
        </li><br>
        <li> <span class="negrita">Aprendizaje significativo (D. Ausubel)</span><br>
          Se fundamenta en la <span class="negrita">incorporación de nuevos contenidos de manera significativa</span> a la estructura cognitiva preexistente.<br>
          Se podrá definir como <span class="negrita">aprendizaje por comprensión</span>. La información nueva la relacionamos significativamente (o comprensivamente) con los conocimientos previos que ya poseemos.<br>
          Para que se produzcan aprendizajes significativos es necesario que se den dos <span class="sub">condiciones</span>:
          <ol>
            <li>Los nuevos conocimientos que se aprendan deben ser <span class="sub">significativos, claros, ordenados</span> para relacionarlos con las ideas que ya posee la persona.</li>
            <li>Que la persona <span class="sub">quiera aprender</span>, pues deberá hacer un esfuerzo para relacionar la nueva información con los conocimientos que ya posee</li>
          </ol>
        </li><br>
      </ul>
    </div>
    <div> <!-- Párrafo 5 -->
      <h3>Motivación y aprendizaje en grupos específicos</h3>
      En las personas en situación de dependencia la motivación es imprescindible para que adquieran nuevas habilidades o modifiquen sus comportamientos. <br>
      Las actitudes y formas de actuar de familiares y otras personas también determinan el grado de motivación, al querer hacer las “cosas por ellos”, guiados por sentimientos de pena, temor... <br>
      Es importante considerar el POTENCIAL DE APRENDIZAJE de las personas, que está relacionado con la capacidad para aprender y mejorar las propias habilidades cognitivas.<br><br>
      <ul class="mayus">
        <li> <span class="sub"><span class="negrita"> Motivación y aprendizaje en los mayores:</span></span><br>
          Los cambios en la vejez pueden ser vividos como conflictivos. Las expectativas presentes y futuras afectan a la capacidad, disponibilidad y motivación para aprendizajes nuevos. Hay que tener en cuenta:
          <ul>
            <li>Los mayores son capaces de realizar actividades de manera independiente.</li>
            <li>El declive en algunos procesos cognitivos (memoria, atención) se pueden superar a través de diferentes programas y medios.</li>
          </ul><br>
          En las personas mayores hay <span class="negrita">circunstancias</span> que favorecen o dificultan la motivación:
          <ul>
            <li><span class="negrita">La jubilación:</span> supone reestructurar tiempos y actividades. Una buena preparación hacia la jubilación evitará la desmotivación y los problemas de inadaptación.</li>
            <li><span class="negrita">Sentimiento de inadaptación:</span> sienten que la sociedad no les valora, pierden autonomía económica y personal... Una participación activa en la familia y en la sociedad favorecerá la autoestima y la calidad de vida</li>
            <li>El aprendizaje es lento en la etapa de adquisición y retención de la información.</li>
            <li>El aprendizaje está relacionado con las condiciones emocionales del momento, el nivel cultural y el grado de motivación.</li>
            <li>La capacidad de aprender está influida por limitaciones perceptivas (pérdida de visión, audición), coordinación motora, pérdida de memoria…</li>
            <li>Mayor afectación en la inteligencia fluída (agilidad mental) que en la inteligencia cristalizada (conocimientos adquiridos).</li>
          </ul>
          Las personas mayores <span class="negrita">prefieren actividades</span> de aprendizaje que impliquen:
          <ul>
            <li>Reflexión.</li>
            <li>Observación.</li>
            <li>Trabajo en grupo.</li>
            <li>Interacción personal.</li>
          </ul><br>
          <h5>PRINCIPIOS PARA FAVORECER LA MOTIVACIÓN Y EL APRENDIZAJE EN LAS PERSONAS MAYORES:</h5>
          Los principios básicos son los siguientes:
          <ul>
            <li><span class="negrita">Aprendizaje activo</span>, favoreciendo los resultados, con materiales e información para realizar las tareas</li>
            <li><span class="negrita">Experiencia:</span> recurrir a ella en cualquier proceso de intervención</li>
            <li><span class="sub">Adecuación a ritmos, tiempos y a la dificultad de las tareas</span>. </li>
          </ul><br>
          Otros aspectos que tenemos que considerar:
          <ul>
            <li><span class="sub">Observar</span> PARA encontrar TODO lo que puede hacer sin ayuda, aunque sean pequeños pasos de una actividad concreta (secarse los brazos después de la ducha).</li>
            <li><span class="sub">Comprobar</span> QUÉ tareas puede realizar y no hacer NADA que pueda hacer por sí mismo. En ocasiones será necesario recordarle que puede hacerlo y animarle a que intente realizarlo.</li>
            <li><span class="sub">Ayudarle</span> solo LO NECESARIO. ¿Cómo?
              <ul>
                <li>Diciéndole concretamente lo que queremos que haga.</li>
                <li>Si es necesario, proporcionarle una ligera ayuda física.</li>
                <li>Prestar asistencia física durante la actividad si lo requiere.</li>
                <li>Hablar y llegar al acuerdo de qué tareas va a realizar sin ayuda o que ésta sea pequeña.</li>
                <li>Cambiar el mobiliario para facilitar su desplazamiento sin riesgos.</li>
                <li>Respetar el tiempo que necesita para realizar determinadas tareas.</li>
                <li>Reconocerle el esfuerzo que pone en ello de forma directa y clara.</li>
              </ul>
            </li>
          </ul>
        </li><br>
        <li> <span class="sub"><span class="negrita"> Motivación y aprendizaje en persona con discapacidad intelectual:</span></span><br>
          <h5>Generalidades:</h5>
          <ul>
            <li>Presentan déficits en las funciones cognitivas.</li>
            <li>Tienen mayor lentitud al aprender.</li>
            <li>Para ellas es más difícil aplicar lo que han aprendido a situaciones nuevas.</li>
            <li>Este colectivo es muy heterogéneo: desde la discapacidad leve hasta la severa. Por lo tanto, no todos tienen la misma capacidad de aprendizaje.</li>
            <li>El entorno es fundamental para despertarles el interés por las cosas que les gustan y desean.</li>
            <li>El repertorio de intereses es muy limitado. Esto se traduce en su comportamiento:
              <ul>
                <li>Apego especial hacia determinados objetos.</li>
                <li>Conductas repetitivas y estereotipadas (movimientos de cuerpo, manos, balanceo...).</li>
                <li>Evitación de situaciones sociales.</li>
                <li>Dificultad de adaptación a situaciones nuevas.</li>
              </ul>
            </li>
          </ul><br>
          <h5>Dificultades de aprendizaje:</h5>
          <ul>
            <li>Ritmo más lento.</li>
            <li>Se fatigan pronto.</li>
            <li>Niceles de atención y concentración bajos.</li>
            <li>Escaso interés por la tarea.</li>
            <li>Escasa curiosidad en conocer y explorar.</li>
            <li>Dificultades de autonomía en el aprendizaje.</li>
            <li>Dificultades para aprender conocimientos de la vida diaria.</li>
            <li>Lentitud cuando tienen que responder a órdenes.</li>
            <li>No generalizan los nuevos aprendizajes.</li>
            <li>Si la tarea requiere esfuerzo o dificultad, se desmotivan: pasividad, protestas, agresividad,...</li>
          </ul><br>
          <h5>Estrategias educativas:</h5>
          <ul>
            <li>Pueden aprender mejor cuando han obtenido éxito anteriormente y si se le ha reforzado de inmediato. </li>
            <li>La participación activa en la tarea favorece el aprendizaje y disminuye el olvido.</li>
            <li>Aprenden mejor si se le enseñan las tareas de manera graduada y secuencial y ofreciendo un modelo.</li>
            <li>Los objetivos tienen que ser alcanzables.</li>
            <li>Prefieren y obtienen mejores resultados con el trabajo reiterativo y repetitivo.</li>
          </ul><br>
          <h5>Es conveniente:</h5>
          <ul>
            <li>Tareas asequibles con objetivos alcanzables</li>
            <li>Explicaciones sencillas. Asegurarse que han comprendido.</li>
            <li>Dar tiempo suficiente. Ofrecer ayuda si se considera necesario.</li>
            <li>Avisar con tiempo de los posibles cambios en las actividades.</li>
            <li>Hacerles repasar los conceptos aprendidos.</li>
            <li>Premiar el esfuerzo y los logros.</li>
            <li>Temas cercanos a su realidad.</li>
            <li>Trabajo repetitivo.</li>
          </ul><br>
          En niños y jóvenes con diversidad funcional intelectual, la utilización de las nuevas tecnologías (TIC) aumenta la motivación y la autoestima. <br>
          El aprendizaje a través de internet facilita el aprendizaje de habilidades cognitivas.<br>
          La enseñanza a través de las TIC se adapta a las capacidades y ritmos de aprendizaje.<br><br>
        </li>
        <li><span class="sub"><span class="negrita">Motivación y aprendizaje en personas con enfermedades mentales:</span></span><br>
          En las personas con enfermedad mental, los sentimientos de ansiedad, tristeza, preocupación...son permanentes y suficientemente severos para interferir de manera muy decisiva en su vida.<br><br>
          <h5>Características</h5>
          <ul>
            <li>Aislamiento social (dificultades para aprender habilidades sociales y resolver conflictos).</li>
            <li>Poca iniciativa.</li>
            <li>Ausencia de motivación.</li>
            <li>Dificultades para manejar el estrés</li>
          </ul><br>
          No podemos especificar estrategias comunes para la motivación y el aprendizaje de este colectivo, debido a la diversidad de trastornos mentales. <span class="negrita">ADAPTARSE A CADA PERSONA, ENFERMEDAD Y CIRCUNSTANCIAS.</span><br>
          <span class="sub">Nuestro objetivo:</span> motivarlos para su rehabilitación, pues no tienen conciencia de su enfermedad y, por lo tanto, en muchas ocasiones, no se toman la medicación.<br>
          Es importante trabajar para que participen en un programa de inserción social y en el tratamiento de la enfermedad.<br>
        </li><br>
        <li> <span class="sub"><span class="negrita">Motivación y aprendizaje en personas con demencias:</span></span><br>
          <h5>Características: </h5>
          <ul>
            <li>Sufren un deterioro de las funciones cognitivas.</li>
            <li>La falta de memoria es uno de los primeros síntomas (Alzheimer, ictus,...).</li>
            <li>Problemas para nuevos aprendizajes y para recordar.</li>
            <li>Pérdida de respuesta emocional. Falta de motivación. Apatía.</li>
          </ul><br>
          <h5>Estrategias para favorecer la moivación  el aprendizaje: </h5>
          <ul>
            <li><span class="sub">Ambientes estructurados</span>, para facilitar la comprensión de las situaciones.</li>
            <li>Utilizar <span class="sub">señalizaciones y marcadores</span>, ante el cambio de rutinas, entornos, personas, actividades…</li>
            <li><span class="sub">Actividades diversas</span>, teniendo en cuenta sus intereses y motivaciones.</li>
            <li><span class="sub">Objetivos alcanzables</span>.</li>
            <li><span class="sub">Refuerzos positivas</span> verbales.</li>
            <li><span class="sub">Paciencia</span>.</li>
          </ul>
        </li><br>
        <li> <span class="sub"><span class="negrita">Motivación y aprendizaje en personas con discapacidad física o sensorial:</span></span><br>
          En este colectivo existe una gran heterogenidad.<br>
          Lo primero es conocer la discapacidad que padece la persona y las limitaciones que presenta en las diferentes áreas del desarrollo.<br><br>
          <h5>Características: </h5>
          <ul>
            <li>Ausencia de experiencias perceptivas, sensoriales, manipulativas…</li>
            <li>Dificultades en las relaciones afectivas y sociales.</li>
            <li>Suelen estar muy sobreprotegidas por el entorno familiar, provocando un aumento de la dependencia.</li>
          </ul><br>
          <h5>Estrategias para favorecer la motivación y el aprendizaje: </h5>
          <ul>
            <li><span class="sub">Apoyo en la comunicación</span> y en la relación social (actividades culturales, recreativas…).</li>
            <li><span class="sub">Apoyo en la accesibilidad</span>, eliminando barreras.</li>
            <li><span class="sub">Apoyo en la realización de las actividades</span> de la vida diaria (ayudas técnicas para favorecer la autonomía).</li>
            <li><span class="sub">Integración</span> educativa y profesional.</li>
            <li><span class="sub">Objetivos</span> funcionales, relacionados con la vida diaria.</li>
            <li><span class="sub">Tareas secuenciadas</span> en pequeños pasos, teniendo en cuenta el nivel de autonomía.</li>
            <li><span class="sub">Generalizar</span> los aprendizajes en diferentes situaciones.</li>
            <li><span class="sub">Respetar ritmos</span> de respuestas</li>
            <li>Proporcionar <span class="sub">actividades</span> de calidad y participación en actividades grupales.</li>
          </ul>
        </li><br>
        <li> <span class="sub"><span class="negrita">Motivación y aprendizaje en personas enfermas:</span></span><br>
          Las personas enfermas afrontan la enfermedad de diferente manera, dependiendo de:
          <ul>
            <li>Su capacidad de afrontamiento.</li>
            <li>Su personalidad y estado emocional.</li>
            <li>El tipo de enfermedad.</li>
            <li>Los recursos y apoyos de que disponga.</li>
          </ul><br>
          La motivación y aprendizaje se ven afectadas por las propias <span class="sub">alteraciones físicas</span> de la enfermedad: cansancio, dolor, debilidad, malestar… y, en muchas ocasiones, por <span class="sub">alteraciones mentales</span> como ansiedad, estado de ánimo, conducta…<br><br>
          <h5>Cómo favorecer la motivación y el aprendizaje: </h5>
          <ul>
            <li><span class="sub">Promover su bienestar</span>: minimizar el dolor y eliminar las molestias.</li>
            <li><span class="sub">Estrategias de afrontamiento</span> que eviten centrarse en la enfermedad.</li>
            <li>A través de la <span class="sub">relación de ayuda</span>: ACOMPAÑAMIENTO-CUIDADO-APOYO.</li>
          </ul><br>
          Esto significa mantener una interacción positiva y clima adecuado para detectar necesidades, transmitir confianza y dar soporte emocional.
        </li>
      </ul>
    </div>
  </div>
  

  <script src="../../js/nightmode.js" type='text/javascript'></script>
  
</body>
</html>