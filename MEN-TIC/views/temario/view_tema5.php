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
            <a class="dropdown-item night-mode-available" href="../../controllers/controllers_modulos/controller_modulo1.php">Modulo 1</a>
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
  <h1> Tema 5. </h1>
    <h2> Técnicas de mantenimiento y rehabilitación de las funciones cognitivas </h2> <br><br><br>
    <img width="700px" class="centrarimagen" src="../../img/temas/tema5/intro.png"> <br><br><br>
    <div> <!-- Párrafo 1 -->
      <img width="450px" src="../../img/temas/tema5/frases.png" style="float:right; margin-left:20px;">
      <h3> Introducción. </h3>
      Hemos visto a lo largo del curso diferentes aspectos relacionados con las circunstancias que rodean a las personas con diversidad funcional del tipo que sea: visual, motórica, psíquica, auditiva, enfermedad mental, personas mayores,... y las diferentes formas en las que podemos trabajar con ellos aspectos cómo la motivación, la forma en la que aprenden, las actividades de ocio que se pueden realizar,…<br>
      En esta unidad de trabajo repasaremos las capacidades cognitivas que ya vimos (atención, percepción, memoria,…) y las características que presentan estos grupos de población para posteriormente plantear diferentes propuestas de técnicas de mantenimiento, estimulación y rehabilitación de dichas capacidades cognitivas.<br>
      Todos los contenidos vistos a los largo del curso, incluidos los que se recogen en esta unidad de trabajo, tienen como finalidad mejorar y mantener la autonomía personal en las actividades de la vida diaria.
    </div><br><br>
    <div> <!-- Párrafo 2 -->
      <img width="120px" src="../../img/temas/tema5/cabeza.png" style="float: left;">
      <h3> Las funciones cognitivas. </h3>
      Las <span class="negrita">Funciones Cognitivas</span> son aquellas que permiten al individuo conocer, pensar, almacenar, organizar y transformar la información con el objetivo de establecer relaciones, resolver problemas y lograr aprendizajes perdurables y significativos.<br>
      Para algunos autores relavantes (PIAGET) son las que habilitan a las personas para realizar las operaciones mentales. Son aquellas que se refieren a todo lo relacionado con el <span class="negrita">PROCESAMIENTO DE LA INFORMACIÓN</span>, es decir, entre otras, podemos destacar las siguientes:
      <ul>
        <li><span class="sub">LA PERCEPCIÓN.</span> Adquisición e interpretación de la información que llega a través de los órganos de los sentidos. </li>
        <li><span class="sub">LA ATENCIÓN.</span> Proceso mediante el cual podemos dirigir nuestros recursos mentales sobre los aspectos relevantes del medio. Nos permite tomar conciencia de lo que ocurre a nuestro alrededor.</li>
        <li><span class="sub">LA MEMORIA.</span> Capacidad de almacenar y recordar de forma voluntaria y espontánea los acontecimientos y sucesos de etapas anteriores de la vida. Puede ser sensorial, a medio y a largo plazo. En relación a la memoria se puede:
          <ul>
            <li><span class="negrita">Almacenar.</span></li>
            <li><span class="negrita">Evocar.</span></li>
            <li><span class="negrita">Recuperar.</span></li>
          </ul>
        </li>
        <li><span class="sub">PENSAMIENTO.</span> Función cognitiva compleja en la que están implicadas la atención, la memoria, la experiencia y la comprensión. Conlleva una serie de <span class="negrita">procesos mentales</span> de análisis, procesamiento y obtención de respuestas frente a situaciones de la vida diaria. Se basa en el <span class="negrita">RAZONAMIENTO, la RESOLUCIÓN DE PROBLEMAS y la TOMA DE DECISIONES</span>.</li>
        <li><span class="sub">ORIENTACIÓN TEMPORAL.</span> Hace referencia a la capacidad de ser consciente del momento en el que viven, es decir, saber en qué día, mes, año, estación del año,… </li>
        <li><span class="sub">ORIENTACIÓN ESPACIAL.</span> Permite a las personas reconocer el lugar en el que se encuentra, así como el entorno y los objetos que les rodean: ciudad, país, barrio, saber si está en su casa,… </li>
        <li><span class="sub">ORIENTACIÓN PERSONAL.</span> Está relacionado con la capacidad de cultivar sus relaciones sociales, atender el cuidado personas, mantener sus responsabilidades y organizar su tiempo de ocio, conocer su estado civil, a sus hijos, nietos, sus nombres, su número de teléfono,… </li>
        <li><span class="sub">LENGUAJE.</span> Procedimiento de selección y ordenación de las palabras que permite a una persona comunicarse con otra y expresar sus pensamientos, sentimientos, ideas y opiniones y transmitir un mensaje. Existen diferentes códigos de comunicación: palabras escritas, sonidos, gestos, imágenes, tacto,… Existen diferentes recursos que permiten la comunicación a personas con problemas auditivos: implantes cocleares, lengua de signos, audífonos, lectura labial,… El lenguaje es un elemento necesario para vivir en sociedad. </li>
      </ul>
    </div><br>
    <div> <!-- Párrafo 3 -->
      <h3> La evaluación de las funciones cognitivas. </h3>
      Evaluar las funciones cognitivas es el primer paso en el proceso de intervención. Esto nos proporcionará pautas para poder frenar el deterioro, mejorar el rendimiento de las funciones afectadas o, si es posible, restablecerlas.<br>
      Es muy frecuente que las personas con las que interviene el TAPSD presenten algún tipo de déficit en sus funciones cognitivas.<br>
      Se realiza una Evaluación Neuropsicológica que permite evaluar los efectos de una lesión, daño o mal funcionamiento en las estructuras del sistema nervioso central sobre los procesos cognitivos, psicológicos, emocionales y del comportamiento de una persona.<br>
      Habitualmente se utilizan escalas o índices para realizar esta valoración. En relación con las funciones cognitivas podemos diferenciar dos tipos de escalas: las que valoran estrictamente aspectos cognitivos y las que valoran el nivel de ansiedad o depresión.<br><br>
      <ul>
        <li> <span class="sub">ESCALAS PARA VALORAR LOS ASPECTOS COGNTIVOS: </span><br>
          <ul>
            <li>
              Mini-examen cognitivo (MEC) de Lobo. Evalúa 5 áreas -> <a target="blank" href="https://stimuluspro.com/blog/mini-examen-cognoscitivo-de-lobo"> Clic aquí </a>
            </li>
            <li>
            Short Portable Mental State Cuestionaire (SPMSQ) de Pfeiffer. Diez puntos -> <a target="blank" href="https://www.farmaceuticoscomunitarios.org/anexos/vol11_n1/ANEXO1.pdf"> Clic aquí </a>
            </li>
            <li>
            Examen del Estado Mental Mínimo de Folstein (MMSE) -> <a target="blank" href="https://www.ics.gencat.cat/3clics/guies/30/img/minimentaldef.MMSE.pdf"> Clic aquí </a>
            </li>
            <li>
            Test del Dibujo del Reloj (TDR) -> <a target="blank" href="https://lamenteesmaravillosa.com/test-del-dibujo-del-reloj-diagnosticar/"> Clic aquí </a>
            </li>
            <li>
            Escala del Deterioro Global de Reisberg (GDS) -> <a target="blank" href="https://stimuluspro.com/blog/escala-de-reisberg"> Clic aquí </a>
            </li>
          </ul>
        </li><br>
        <li> <span class="sub">ESCALAS PARA VALORAR EL NIVEL DE ANSIEDAD O DEPRESIÓN: </span>
          <ul>
            <li>
              Escala de depresión geriátrica de Yesavage. Plantea preguntas dicotómicas (SI/NO) -> <a target="blank" href="https://www.hipocampo.org/yesavagepetite.asp"> Clic aquí </a>
            </li>
            <li>
              Escala de Depresión de Hamilton -> <a target="blank" href="https://www.hipocampo.org/hamilton.asp"> Clic aquí </a>
            </li>
          </ul>
        </li>
      </ul>
    </div><br>
    <div> <!-- Párrafo 4 -->
      <h3> Capacidades cognitivas y aprendizaje en colectivos específicos. </h3>
      En este apartado vamos a ver algunos de los aspectos característicos de los colectivos específicos en relación a las características y las dificultades que se pueden encontrar en relación con las capacidades cognitivas.<br><br>
      <ul>
        <li> <span class="negrita">Personas mayores: </span><br>
          A medida que las personas se van haciendo mayores se produce una ralentización de la función intelectual. Evidentemente, cada persona es diferente. Veremos a continuación algunas características en diferentes funciones cognitivas:
          <ul class="ticks">
            <li>Aparecen los <span class="sub">olvidos</span>, que se van haciendo más frecuentes y en ocasiones están relacionados con el estado de ánimo. No tienen que estar relacionados con la demencia.</li>
            <li>El procesamiento y codificación de la información es más lento.</li>
            <li>Pérdida leve/moderada del sentido de la vista (presbicia) y del oído (hipoacusia).</li>
            <li>Uso más dificultoso de las reglas nemotécnicas.</li>
            <li>Los sucesos de etapas más lejanas de su vida (juventud) se suelen conservar en su memoria, mientras que son más frecuentes los fallos de la memoria más inmediata.</li>
            <li>La capacidad de utilización del <span class="sub">lenguaje se mantiene</span> más o menos igual a lo largo de la vida. No existen pérdidas en la utilización del vocabulario o en la habilidad para la construcción de frases y la capacidad de comunicación se mantiene intacta.</li>
            <li>La <span class="sub">atención puede disminuir</span>, sobre todo si la persona no está motivada. El uso de algunos fármacos (antidepresivos y ansiolíticos) afectan a la capacidad de concentración, provocan somnolencia y dificultan la atención, entre otros efectos.</li>
            <li>Deterioro del pensamiento abstracto y afectación del pensamiento lógico.</li>
            <li>Pérdida de capacidades visuales y espaciales.</li>
            <li>Disminución en la capacidad de comprensión de informaciones complejas.</li>
            <li>El <span class="sub">procesamiento</span> de la información, como ya hemos dicho, se realiza de modo <span class="sub">más lento</span> y necesitan más tiempo para asimilar los conceptos, siendo preferible utilizar enseñanzas sobre elementos concretos, visuales y tangibles eminentemente prácticas, ya que todo lo que suponga trabajar con ideas abstractas será peor asimilado</li>
            <li>El <span class="sub">deterioro</span> en el aspecto <span class="sub">motor</span> es evidente con el paso de los años. Los movimientos son más torpes, más rígidos y más lentos.</li>
            <li>Estos cambios pueden <span class="sub">interferir</span> en los aprendizajes, fundamentalmente si las tareas son manuales y no se les da el tiempo suficiente para que se desenvuelvan a su ritmo. Ello puede acarrear desmotivación y apatía, y afectar a otras áreas del aprendizaje.</li>
          </ul>
        </li><br>
        <li> <span class="negrita">Personas con demencia: </span><br>
          Como vemos en la siguiente tabla, los síndromes que cursan con demencia conllevan el deterioro de todas las funciones cognitivas.<br><br>
          <table border="2" id="tgrande">
            <tr>
              <th>Capacidades cognitivas</th>
              <th>Alteraciones</th>
              <th>Pautas de actuación</th>
            </tr>
            <tr>
              <th>Memoria</th>
              <td>Pérdida de la memoria; se observa fallo en la adquisición de nuevos conocimientos. La pérdida de memoria afecta al trabajo.</td>
              <td rowspan="9">
                <ul>
                  <li>Explicar las tareas despacio y paso a paso.</li>
                  <li>Emplear palabras sencillas.</li>
                  <li>No dar órdenes.</li>
                  <li>Dar tiempo para que comprenda las indicaciones.</li>
                  <li>Repetir la información frecuentemente y mantener siempre la calma.</li>
                  <li>Utilizar gestos para reforzar las indicaciones, aunque no se debe exagerar.</li>
                  <li>Mantener un ambiente estimulante.</li>
                  <li>Plantear actividades que estén al alcance de sus posibilidades, adaptadas a su edad y sus limitaciones.</li>
                  <li>Mantener vivas las capacidades que aún se conservan.</li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>Atención y Percepción</th>
              <td>Están afectadas. Dificultades para mantener la atención voluntaria y percibir y procesar la información adecuadamente.</td>
            </tr>
            <tr>
              <th>Orientación</th>
              <td>Desorientación espacial: hay fallo en la copia de figuras complejas y tendencia a perderse en ambientes poco familiares. Desorientación temporal.</td>
            </tr>
            <tr>
              <th>Pensamiento</th>
              <td>Alteraciones en el pensamiento. Dificultades para el razonamiento abstracto.</td>
            </tr>
            <tr>
              <th>Operaciones matemáticas</th>
              <td>Incapacidad para el cálculo.</td>
            </tr>
            <tr>
              <th>Lenguaje</th>
              <td>El lenguaje es pobre, vacío; generan pocas palabras, hay una anomia leve. Alteraciones sintácticas.</td>
            </tr>
            <tr>
              <th>Actividades de la vida diaria</th>
              <td>Pérdida de iniciativa para realizar una accion. Existe mayor demora en las tareas rutinarias. Hay impulsividad; dificultad para vestirse, rechazo al baño.</td>
            </tr>
            <tr>
              <th>Conducta</th>
              <td>Conductas anómalas. Tienden a aislarse y a evitar a la gente.</td>
            </tr>
            <tr>
              <th>Personalidad</th>
              <td>Alteraciones de la personalidad y cambios repentinos en el humor. Cambia la personalidad y se pierde la iniciativa. Hay indiferencia y ocasionalmente irritabilidad.</td>
            </tr>
          </table>
        </li><br>
        <li> <span class="negrita">Personas con diversidad funcional intelectual: </span><br>
          Las <span class="negrita">caracterísitcas cognitivas</span> que presentan estas personas quedan resumidas en la siguiente tabla:<br><br>
          <table border="2" class="tablacentro">
            <tr><th style="background-color: lightblue; color: black;">Características cognitivas generales</th></tr>
            <tr style="text-align: left; background-color: limegreen; color: black;"><td>
              <ul>
                <li>Presentan dificultad para improvisar y resolver situaciones nuevas y generalizar.</li>
                <li>El pensamiento abstracto está limitado y la simbolización.</li>
                <li>Baja capacidad de memoria, percepción y concentración.</li>
                <li>Atención selectiva y subjetiva a estímulos relevantes.</li>
                <li>Dificultades con el lenguaje: sintáxis, fonética, vocabulario pobre.</li>
                <li>Dificultades para la lectura, la escritura y el cálculo.</li>
                <li>Escasas destrezas psicomotoras: relacionadas con el equilibrio, la marcha y la motricidad fina.</li>
                <li>Presentan una mala orientación espacial y temporal.</li>
                <li>Dificultades en la imitación, elaboración de secuencias temporales.</li>
                <li>Escasa intención comunicativa y dificultad en habilidades conversacionales.</li>
              </ul>
            </td></tr>
          </table>
        </li><br>
        <li> <span class="negrita">Personas con diversidad funcional motora o motriz: </span><br>
          Las <span class="negrita">características generales</span> que presentan estas personas son las siguientes:
          <ul>
            <li>El desarrollo intelectual es normal, aunque puede haber retraso por la falta de experiencias de interacción con el entorno.</li>
            <li>La adquisición del lenguaje puede estar algo retrasada por inhibición afectiva, o por falta de motivación o de relación con el mundo exterior.</li>
            <li>Pueden presentar dificultades lógico-matemáticas.</li>
            <li>Ausencia de experiencias en comparación con otros grupos de personas de edad similar (por la existencia de barreras arquitectónicas).</li>
            <li>Falta de confianza en sí mismos y en sus posibilidades y de autoestima.</li>
          </ul>
        </li><br>
        <li> <span class="negrita">Personas con diversidad funcional sensorial: </span><br>
          Las más frecuentes y que pueden afectar a los aprendizajes son las ceguera y la sordera.
          <ul class="mayus">
            <li> <span class="negrita"> CEGUERA: </span><br>
            La mayoría de las habilidades y actividades que realizamos en nuestra vida cotidiana implican el órgano de la visión.<br>
            Las personas con diversidad funcional visual presentan las siguientes dificultades de cara al aprendizaje:
              <ul>
                <li>Presentan un desarrollo cognitivo y motor más lento, debido a las dificultades para comprender las relaciones de los objetos con el espacio .</li>
                <li>Dificultades para entender palabras muy visuales (alto-bajo, feo-bonito) u otras palabras como allí, aquí, ahí,… </li>
                <li>No es posible el aprendizaje por imitación.</li>
                <li>El aprendizaje matemático puede verse afectado, puesto que se usa un lenguaje específico y visual</li>
                <li>Se dispersan con facilidad y, por lo tanto, afecta a la capacidad de atención que será menor.</li>
                <li>Dificultades en la orientación espacial. Esto condiciona el aprendizaje por descubrimiento y el motor, que producirán más tarde: sentarse, caminar, levantarse, comer,…</li>
                <li>Dificultades de cordinación del cuerpo, se adquiere más lentamente.</li>
                <li>Dificultades para la comprensión de la realidad.</li>
              </ul>
            </li><br>
            <li> <span class="negrita"> SORDERA: </span><br>
              Resulta de gran importancia establecer precozmente el diagnóstico de sordera (debería ser detectada antes de los seis meses de vida), ya que el desarrollo del lenguaje se ve afectado notablemente.<br>
              Afectación de las <span class="negrita">funciones cognitivas</span>:
              <ul class="ticks">
                <li>Están afectadas la percepción, la atención y el lenguaje (preolocutivo o postlocutivo y la comunicación con sus padres).</li>
                <li>Alteración en el desarrollo emocional y en el aprendizaje.</li>
                <li>Dificultades en la simbolización.</li>
                <li>Dificultades de acceso a la información y de comunicación.</li>
              </ul>
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita">Personas con patalogías crónicas: </span><br>
          Cuando se habla de una <span class="negrita">patología crónica</span> nos referimos a aquella que, una vez diagnosticada al paciente, le va a acompañar de por vida. No es mortal en sí misma, pero la prestación de los cuidados y atenciones precisos va a provocar un <span class="negrita">gran cambio</span> en la vida del usuario.<br>
          Las patologías crónicas precisan de controles sanitarios periódicos, de dietas y de estilos de vida que, en muchos casos, hay que modificar, y en ocasiones conllevan discapacidades o procesos dolorosos que son <span class="negrita">difíciles de asumir</span> por el paciente.<br>
          Son <span class="negrita">rasgos característicos</span> en los pacientes crónicos:
          <ul>
            <li>La apatía, la desmotivación y la falta de interés por los sucesos de su entorno y por los nuevos aprendizajes.</li>
            <li>Dificultad de concentración (sobretodo si hay dolor).</li>
            <li>Disminución de la atención (centrado en la salud).</li>
            <li>No hay problemas de memoria, pero puede exostir cierta dispersión por preocupaciones.</li>
            <li>Capacidad intelectual intacta.</li>
            <li>Ritmo más lento en los aprendizajes.</li>
            <li>Limitaciones motrices en muchas ocasiones.</li>
          </ul>
        </li><br>
        <li> <span class="negrita">Personas con enfermedad mental: </span><br>
        La gravedad de ellos suele ser muy variable. Las <span class="negrita">alteraciones de las funciones cognitivas</span> en este grupo de usuarios pueden ser debidas al proceso de la enfermedad, y en otros casos ser un efecto secundario de la <span class="negrita">medicación</span> necesaria para el tratamiento.<br>
        En estas personas no está alterada la capacidad intelectual, aunque el ritmo de estudio puede ser diferente (más lento). <br>
        Algunas características de estas personas son:
        <ul class="ticks">
          <li>Se ha observado que están <span class="negrita">afectadas</span> la motivación y el interés, la sensación, la percepción (ilusiones), la representación, la orientación, la atención, la memoria, el lenguaje (incoherencias, palabras inventadas,…) y el aprendizaje</li>
          <li>Tienen dificultad para <span class="negrita">concentrarse en la lectura</span>. El procesamiento rápido de la información está afectado, así como la capacidad para planificar y solucionar problemas, el prensamiento crítico o la iniciativa</li>
          <li>Son frecuentes los <span class="negrita">olvidos</span> de la información que llega de modo verbal, pero no de la que llega por otros canales, ni de los hábitos adquiridos.</li>
          <li>Dificultad para realizar varias actividades simultáneamente.</li>
          <li>Existe además el factor de la <span class="negrita">estigmatización social</span>, ya que generan rechazo o miedo en la sociedad y ellos lo perciben y les crea gran inseguridad.</li>
        </ul>
        </li>
      </ul>
    </div><br>
    <div> <!-- Párrafo 5 -->
      <h3> Intervención en las funciones cognitivas. </h3>
      La mayoría de los programas están diseñados para las demencias, pero se pueden utilizar además de en centros de día o geriátricos, con cualquier otro colectivo con déficit en estos aspectos.<br>
      Estos programas están destinados a mantener las capacidades que la persona conserva, evitando el deterioro.<br><br>
      <span class="negrita">Objetivos de los programas terapéuticos de Entrenamiento Cognitivo: </span><br>
      <ul>
        <li>Mantener las habilidades intelectuales.</li>
        <li>Enriquecer el entorno para estimular el razonamiento, el lenguaje y la actividad de la persona.</li>
        <li>Fortalecer las relaciones interpersonales evitando el aislamiento.</li>
        <li>Los programas de <span class="negrita">ESTIMULACIÓN Y ACTIVIDAD</span> están basados en mantener la estimulación y la actividad tanto física como psicológica para ralentizar el deterioro cognitivo.</li>
        <li>Se estimulan las áreas que son operativas para evitar que al no ejercitarlas se deterioren.</li>
        <li>Actividades para el mantenimiento de las funciones cognitivas serán: leer la prensa, jugar a las cartas, bailar, escuchar música,..</li>
      </ul>
    </div><br>
    <div> <!-- Párrafo 6 -->
      <h3> Técnicas para el mantenimiento, estimulación y rehabilitación de las funciones cognitivas. </h3>
      <ul>
        <li> <span class="negrita">Terapia de Orientación a la Realidad:</span><br>
          Conjunto de estrategias en las que presentamos al usuario información relativa a la orientación espacial, temporal y personal para mantener su comprensión de aquello que le rodea.<br>
          Estos programas están dirigidos a personas que tienen pérdida de memoria, desorientación y trastornos confusionales.<br>
          También se incide en las conductas sociales y de relación para mejorar su autoestima.<br><br>
          <span class="negrita"><span class="sub">Ejercicios de la terapia</span></span>
          <ul>
            <li>Trabajaremos la orientación de la persona a través de la adecuación del ambiente.</li>
            <li>El TAPSD o la familia proporcionará pautas para una deambulación guiada para localizar zonas, objetos que son importantes para el usuario.</li>
            <li>Utilizaremos: calendarios, tarjetas con símbolos en las puertas, carteles, colores para diferenciar las habitaciones, líneas en el suelo para señalar los recorridos, cronogramas que indiquen la fecha y las actividades a realizar.</li>
          </ul><br>
          <span class="negrita"><span class="sub">Aplicación de la terapia</span></span><br>
          La terapia de orientación a la realidad puede aplicarse de dos maneras:
          <ul>
            <li><span class="negrita">Orientación en la realidad 24 horas</span>: Estimular el recuerdo sistemáticamente y de manera informal a lo largo del día.</li>
            <li><span class="negrita">Orientación en la realidad en sesiones</span>: Sesiones grupales estructuradas. Se agrupan a las personas según su nivel de funcionamiento y sus capacidades cognitivas.</li>
          </ul>
        </li><br>
        <li> <span class="negrita">Entrenamiento de la Memoria: </span><br>
          La finalidad de los <span class="negrita">programas de entrenamiento</span> de la memoria son el mantenimiento y fomento de las estrategias memorísticas de las personas. <br>
          Las <span class="negrita">técnicas de entrenamiento</span> de la memoria son un conjunto de procedimientos destinados a conocer el funcionamiento de la memoria y su utilización para incidir en la mejora de su rendimiento.<br><br>
          <span class="negrita"><span class="sub">Estrategias para el entrenamiento de la memoria</span></span><br>
          <ul>
            <li>Existen programas de entrenamiento que integran dos tipos de estrategias: <span class="negrita">la estimulación de los procesos cognitivos</span> relacionados con la memoria y el <span class="negrita">aprendizaje de nuevas estrategias</span> para utilizar eficazmente los procesos de memoria.</li>
            <li>También podemos utilizar <span class="negrita">estrategias de la vida cotidiana</span> que nos facilitan el recuerdo inmediato: dejar cualquier objeto de uso corriente siempre en el mismo sitio, usar post it para anotaciones, calendarios, agendas,..</li>
          </ul><br>
          <span class="negrita"><span class="sub">Estimulación de los procesos relacionados con la memoria </span></span><br>
          <span class="negrita">Adquisición</span>: Está relacionado con el entrenamiento de las funciones de <span class="negrita">atención y percepción</span>. <br>
          <span class="negrita">Actividades de atención</span>: Actividades de escucha, preguntas sobre textos leídos, búsqueda de imágenes iguales o similares, sopas de letras, puzzles, MANDALAS.<br>
          <span class="negrita">Estimulación sensorial</span>: Reconocimiento de objetos por el tacto, por el olor, discriminación visual y auditiva.<br>
          <span class="negrita">Almacenamiento y recuperación</span>: Las actividades se relacionarán con el tipo de memoria que se va a estimular:
          <ul>
            <li>Inmediata (sucesos o acciones producidas momentos antes).</li>
            <li>A corto plazo: Repasando lo que se ha hecho en cada sesión.</li>
            <li>A largo plazo: evocando el pasado. Técnica de reminiscencia. Evocar situaciones significativas para ayudar a recordar.</li>
          </ul><br>
          <span class="negrita"><span class="sub">Otras estrategias</span></span>
          <ul>
            <li><span class="negrita">Visualización</span>: El aprendizaje a partir de la información visual es el más efectivo. Identificamos un contenido que queremos recordar con una imagen y pensamos en esa imagen cuando queremos recordar el contenido. Imágenes de objetos y cuando se nombra el objeto recordar la imagen.</li>
            <li><span class="negrita">Asociación</span>: asociar una información nueva con otra que nos resulte más familiar. Por ej. Asociar el nombre de una persona que nos acaban de presentar con otra q conozcamos, o un famoso, el nº de la tarjeta de crédito con una fecha conocida,…</li>
            <li><span class="negrita">Categorización</span>: Consiste en aprender a ordenar las cosas siguiendo un criterio lógico, agrupadas en diferentes categorías. Por ej. Si hacemos la lista de la compra, haremos categorías, alimentación, limpieza, ropa, calzado, y dentro de cada una pondremos: carne, pescado, verdura,..</li>
            <li><span class="negrita">Repetición</span>: Utilizar la repetición mental verbalizando lo que vamos haciendo.</li>
          </ul><br>
          <span class="negrita"><span class="sub">Sugerencias para favorecer la memoria </span></span>
          <ul>
            <li>Coloca <span class="negrita">calendarios</span> anuales en lugares visibles y consultarlos a lo largo del día.</li>
            <li><span class="negrita">Apuntar</span> inmediatamente los <span class="negrita">mensajes</span> telefónicos.</li>
            <li>Consultar frecuentemente el <span class="negrita">reloj</span>.</li>
            <li>Llevar una <span class="negrita">libreta</span> pequeña para anotar cosas.</li>
            <li>Dejar las cosas de <span class="negrita">uso cotidiano</span> en el <span class="negrita">mismo lugar</span> (llaves, gafas, bolso,…).</li>
            <li><span class="negrita">Ordenar</span> las cosas de forma <span class="negrita">clasificada</span>, esto ayudará a encontrarlas.</li>
            <li>Colgar <span class="negrita">notas</span> en los lugares dónde es importante no olvidar algo (cerrar el gas, apagar luces,….).</li>
          </ul>
        </li><br>
        <li> <span class="negrita">Orientación:</span><br>
          <ul class="mayus">
            <li> <span class="negrita">ORIENTACIÓN ESPACIAL: </span><br>
              Aprovecharemos las situaciones cotidianas del día para trabajar conceptos generales relacionados con la:
              <ul class="ticks">
               <li><span class="negrita">ORIENTACIÓN</span> (arriba-abajo, delante-detrás, encima-debajo, derecha-izquierda, cerca-lejos..): puntos cardinales, flechas de señalización, señales estandarizadas (semáforo, paso de cebra, cruz de farmacia,…).</li>
               <li><span class="negrita">PUNTOS DE REFERENCIA</span> (Lugares, objetos, significativos para el usuario y que le sirvan de referencia para orientarse y retener en la memoria): un árbol, un edificio, un monumento, una parada de autobús, una tienda.</li>
               <li><span class="negrita">DISTANCIAS ENTRE LOS PUNTOS</span> (Aprender a calcular en pasos, en metros, en tiempo,..).</li>
               <li><span class="negrita">TRABAJAR ITINERARIOS O RECORRIDOS</span> (Hasta que el usuario pueda hacerlo de forma autónoma.</li>
              </ul><br>
              Cuando el usuario aprende un recorrido y puede desplazarse solo, tiene que tener suficientes habilidades como para pedir ayuda si se desorienta.<br>
              Será recomendable, sobre todo en las demencias, que lleve un brazalete con los datos personales para poderle localizar si se extravía.
            </li><br>
            <li> <span class="negrita">ORIENTACIÓN TEMPORAL: </span><br>
              Aprovecharemos las situaciones cotidianas del día para trabajar conceptos generales relacionados con la:
              <ul class="ticks">
                <li><span class="negrita">CRONOLOGÍA</span> (antes-ahora-después, ayer-hoy-mañana, hora-día-semana, estación-año).</li>
                <li><span class="negrita">RUTINAS DIARIAS</span> (levantarse, desayuno, comida, actividades,..). Se utilizan horarios diarios, pudiendo ponerse de manera gráfica las diferentes actividades del día</li>
                <li><span class="negrita">FECHAS SIGNIFICATIVAS</span> (aniversarios, fiestas, días de actividades especiales (Navidad, Semana Santa, Fiestas Locales,,..), vacaciones, excursiones,… Estos eventos se marcan en los horarios semanales o en las agendas.</li>
              </ul>
            </li><br>
            <li> <span class="negrita">ORIENTACIÓN PERSONAL: </span><br>
              Aprovecharemos las situaciones cotidianas del día para trabajar conceptos generales relacionados con:
              <ul class="ticks">
                <li><span class="negrita">MIEMBROS DE LA FAMILIA y SUS NOMBRES:</span> hijos, nietos, marido,..</li>
                <li><span class="negrita">ESTADO CIVIL.</span></li>
                <li><span class="negrita">FECHAS DE NACIMIENTO.</span></li>
                <li><span class="negrita">EDADES.</span></li>
                <li><span class="negrita">NÚMERO DE TELÉFONO.</span></li>
              </ul>
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita"> La Reminiscencia:</span><br>
          Es una técnica que consiste en <span class="negrita">hacer pensar y hablar</span> a una persona sobre su propia vida y compartir estos recuerdos con los demás.Se fundamenta en el principio de que la <span class="negrita">memoria remota</span> es la última que se deteriora.<br>
          Los <span class="negrita">temas</span> para recordar tienen que ser <span class="negrita">significativos</span> para la persona (familia, profesión, sentimientos,..).Se pueden usar <span class="negrita">materiales diversos</span>: gráficos, auditivos, objetos personales,..<br>
          <span class="negrita">Metodología</span>: Evocar recuerdos del pasado a través de <span class="negrita">preguntas</span> acerca de los materiales elegidos.
        </li><br>
        <li> <span class="negrita"> El Lenguaje: </span><br>
          Es un conjunto de signos, orales, escritos o gestuales a través de los cuales transmitimos las ideas, los sentimientos y los pensamientos.<br>
          A través del lenguaje almacenamos los datos en la memoria.<br>
          Las actividades que propongamos deberán de trabajar los siguientes aspectos:
          <ul>
            <li>Expresión verbal.</li>
            <li>Fluidez verbal.</li>
            <li>Comprensión verbal.</li>
            <li>Vocabulario.</li>
            <li>Lectura y escritura.</li>
          </ul>
        </li><br>
        <li> <span class="negrita"> El Razonamiento y el Cálculo: </span><br>
          El razonamiento es la función cognitiva que nos permite prever acontecimientos, obtener conclusiones y tomar decisiones.<br>
          Esta capacidad está relacionada estrechamente con el lenguaje y la memoria.<br>
          En las personas que padecen pérdida de memoria, se pierde la capacidad de reflexionar, planificar y seleccionar la mejor opción para resolver una situación, debido a que no generalizan ni prestan atención a los detalles. Tendrán también dificultades en ordenar y clasificar objetos, de estructurar historias y de relacionar causa-efecto.<br>
          Las actividades que podremos trabajar para mejorar la capacidad de razonamiento serán:
          <ul>
            <li>Ejercicios de razonamiento.</li>
            <li>Orientación a la realidad.</li>
            <li>Guiarle en las dificultades con las que se encuentre, potenciando el que piense y razone.</li>
          </ul><br>
          Algunos materiales: Adivinanzas, crucigramas, sudokus, test psicotécnicos... En el mercado existen materiales específicos para trabajar el razonamiento.<br>
          El <span class="negrita">cálculo</span> es el conjunto de operaciones matemáticas necesarias para averiguar el resultado, el valor o la medida de algo.<br>
          Requiere un reconocimiento y representación de los números y de la relación que se puede establecer entre ellos.<br>
          La atención, memoria, pensamiento, razonamiento y el lenguaje son funciones relacionadas estrechamente con el cálculo.<br>
          Para trabajar esta función podremos presentarle ejercicios con diferentes grados de dificultad y potenciar que utilice el cálculo en las actividades de la vida cotidiana (compra, banco...).
        </li><br>
        <li> <span class="negrita"> La Psicomotricidad: </span><br>
          Es un conjunto de herramientas destinadas a estimular las diferentes partes del esquema corporal a través de la acción y el movimiento.<br>
          La mayoría de nuestros usuarios, ya sea por discapacidad, enfermedad o envejecimiento, tienen la función psicomotriz deteriorada o en riesgo de deterioro.<br> 
          La actividad psicomotriz revierte tanto a nivel físico como psíquico.<br><br>
          <h6>- LA PSICOMOTRICIDAD</h6><br>
          <table border="2" class="tablacentro" style="color: black;" id="tablapsico">
            <tr>
              <th>Area</th>
              <th>Definición</th>
              <th>Actividad propuesta</th>
            </tr>
            <tr>
              <th>Esquema corporal</th>
              <td>Se refiere al conocimiento y la conciencia que la persona tiene de sí misma en cuanto a ser corporal, así como de sus posibilidades de movimiento y de sus limitaciones.</td>
              <td>Ejercitación de diversas partes del cuerpo y su reconocimiento. por ejemplo: levantamos los brazos y los llevamos a la nuca, estiramos los brazos hacia arriba, ahora ponemos los brazos en cruz, doblamos los codos y nos ponemos las manos en la cintura...</td>
            </tr>
            <tr>
              <th>Psicomotricidad fina </th>
              <td>Capacidad de realizar movimientos precisos (generalmente con la mano y losdedos) con la máxima precisión posible.</td>
              <td>Todo el conjunto de actividades manuales de precisión como seguir con el trazo un recorrido, trabajos con plastilina, manipulación de pelotas y objetos antiestrés, trabajos de recortado y perforado con tijeras, utilización de cubiertos, etc</td>
            </tr>
            <tr>
              <th>Psicomotricidad gruesa</th>
              <td>Control del propio cuerpo (andar, subir escaleras, levantarse, darse la vuelta en la cama,etc..) y la manipulación de objetos más grandes.</td>
              <td>El número de actividades es muy ámplio: seguir un recorrido, subir y bajar escalones, pasarse un balón, etc,..</td>
            </tr>
            <tr>
              <th>Control postural</th>
              <td>Se refiere a la manera habitual de mantener la postura y el equilibrio. La POSTURA es la posición que adopta el cuerpo y el EQUILIBRIO la manera en que se mantiene esta postura, ya sea de manera estática o cuando se está en movimiento.</td>
              <td>Las mismas que para la motricidad gruesa.</td>
            </tr>
            <tr>
              <th>Estructuración espacial</th>
              <td>Es la percepción que se tiene del espacio externo y su posicionamiento en él. Es básica para facilitar la orientación.</td>
              <td>Existe un amplio repertorio de actividades: andar desordenadamente por toda la sala. Nos agarramos las manos y hacemos un corro, nos ponemos detrás de la silla,..</td>
            </tr>
            <tr>
              <th>Estructuración temporal</th>
              <td>Establecer unos ritmos que favorezcan la interiorización de los aspectos temporales.</td>
              <td>Como respuesta a estímulos (seguir el ritmo de la música con las manos, ahora lo acompañamos con las palmas, con los pies,..).</td>
            </tr>
            <tr>
              <th>Lateralización</th>
              <td>Hace referencia al dominio de una parte del cuerpo respecto a la otra (derecha o izquierda).</td>
              <td>Se realizan actividades relacionadas con el uso de la mano dominante o no dominante; ejercicios físicos y de orientación (giramos a la derecha y damos tres pasos, tres pasos atrás y giramos a la izquierda,… </td>
            </tr>
          </table>
        </li><br>
        <li> <span class="negrita"> La Musicoterapia: </span><br>
          Es un conjunto de actividades musicales aplicadas de forma estructurada, con el objetivo de mejorar las condiciones físicas, cognitivas y del estado de ánimo del usuario.<br>
          Actividades: audición musical, baile y movimiento, composición de ritmos, combinación de la música con otras actividades, música como relajación, música como instrumento de evocación y recuerdo (reminiscencia), como actividad memorística: (adivinar canciones, relacionar canciones e interpretes, cantar estribillos,..).<br>
          Muchas personas con demencia, a pesar de tener la memoria y el lenguaje muy deteriorados, mantienen la capacidad de seguir el ritmo y cantar canciones de su época.<br><br>
          <span class="negrita"><span class="sub">Objetivos </span></span>
          <ul>
            <li>Desarrollar la expresión emocional.</li>
            <li>Mejorar las conductas motrices (equilibrio, coordinación, lateralidad,.).</li>
            <li>Adquisición de destrezas instrumentales y praxias mediante la manipulación de instrumentos.</li>
            <li>Fomento de la atención, la percepción auditiva, táctil y kinestésica.</li>
            <li>Incremento de las posibilidades de interacción con los demás, habilidades comunicativas.</li>
            <li>Independencia y autocontrol, así como creatividad e imaginación.</li>
          </ul>
        </li><br>
        <li> <span class="negrita"> Técnicas de Relajación: </span><br>
          Las técnicas de relajación comprenden una amplia variedad de procedimientos encaminados a controlar la propia activación fisiológica. Este control facilita el enfrentamiento de situaciones estresantes y, por lo tanto, ayudará a combatir la ansiedad.<br>
          Permite aprender a controlar mejor la ansiedad, lo que nos permite reducir los estados de excitación y reaccionar de manera más adecuada ante el estrés en aquellas situaciones que valoramos como amenazantes.
        </li><br>
        <li> <span class="negrita"> Otras Terapias: </span><br>
          <ul class="manita">
            <li>Terapia con Animales. </li>
            <li>Arteterapia.</li>
            <li>Aromaterapia.</li>
            <li>Hipoterapia. </li>
            <li>Risoterapia.</li>
            <li>Kinesiología.</li>
            <li>Danzaterapia.</li>
          </ul>
        </li><br>
        <li> <span class="negrita"> Psicoestimulación Integral: </span><br>
          <ul class="manita">
            <li> <span class="negrita"> Programa de psicoestimulación integral (PPI) </span><br>
              Es un conjunto de estrategias terapéuticas, no farmacológicas, concebido para restablecer, rehabilitar y frenar el proceso evolutivo de la enfermedad de Alzheimer y de otras demencias.<br>
              En este programa se desarrollan los siguientes talleres: a nivel cognoscitivo (estimulación de la memoria, lenguaje, razonamiento, cálculo, etc.), otros talleres que se imparten son (reminiscencia, musicoterapia, taller de cinesiterapia, taller ocupacional y mantenimiento de las AVD).
            </li><br>
            <li><span class="negrita"> Programa de estimulación preventiva (PPP) </span><br>
              El Programa de Psicoestimulación Preventiva (PPP) está dirigido a ancianos que conservan su capacidad cognitiva y que están en una residencia geriátrica. Desarrolla, de una forma lúdica y socializadora, las diferentes áreas cognitivas: orientación, atención, memoria, lenguaje, razonamiento y praxis. Se presentan en 54 sesiones las acciones tendentes a prevenir el deterioro cognitivo.
            </li><br>
            <li><span class="negrita"> Programa Gradior </span><br>
              Es un sistema multimedia de evaluación y rehabilitación neuropsicológica por ordenador que facilita la realización de programas de entrenamiento y recuperación de funciones cognitivas superiores en personas que padecen deterioro cognitivo. El programa trabaja la orientación, la memoria, la percepción, la atención y el cálculo.
            </li><br>
            <li> <span class="negrita"> Programa Smartbrain </span><br>
              Es un programa de actividades interactivo y multimedia que pretende adaptar las nuevas tecnologías al campo de la psicoestimulación. Es una herramienta para la estimulación cognitiva de personas con déficit cognitivo o para la prevención de personas con riesgo de perder sus capacidades cognitivas.<br>
              Smartbrain cuenta con ejercicios interactivos agrupados por categorías, según las funciones cognitivas que han de estimularse. El programa está estructurado en diferentes niveles de dificultad, que se activan automáticamente en función de los resultados que se han obtenido y que aparecen en el registro de la evolución del paciente. Ofrece la posibilidad de diseñar planes de tratamiento individualizados según las capacidades residuales de cada paciente y ajustarlos a su evolución y sus necesidades.<br>
              Smartbrain tiene tres opciones: Smartbrain Home (uso individual), Smartbrain CD-Multi, (varios usuarios, individual/grupo) y Smartbrain Web (on-line, uno o varios usuarios y tutores).
            </li><br>
            <li> <span class="negrita"> El Baúl de los Recuerdos </span><br>
              Es un manual para entrenar a cuidadores y familiares de enfermos de Alzhéimer u otros tipos de demencias en la aplicación de la estimulación cognitiva. Está dividido en varios bloques y permite elaborar el perfil cognitivo y el perfil funcional de la persona enferma y diseñar las tareas y actividades que se deseen realizar.
            </li>
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