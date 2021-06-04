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
    <h1> Tema 1. </h1>
    <h2> Introducción a la intervención psicosocial </h2> <br><br><br>
    <img class="centrarimagen" src="../../img/temas/tema1/intro.png"> <br><br><br>
    <div> <!-- Párrafo 1 -->
      <h3> Introducción. </h3>
      <p>Para conocer todo lo relativo a la Atención a las Personas en Situación de Dependencia
      (APSD) desde el ámbito de la Atención y Apoyo Psicosocial, lo primero que debemos conocer son
      una serie de conceptos importantes que giran en torno a la misma y que nos ayudarán a
      profundizar en las distintas situaciones que pueden darse.
      A lo largo de esta Unidad de Trabajo veremos, como ya he dicho, algunos conceptos básicos
      que son claves en relación a este tema y que utilizaremos a lo largo de todo el curso. De esta
      manera, sentamos las bases para estudiar posteriormente diferentes recursos y/o técnicas que se
      pueden utilizar con las PSD.</p>
    </div>
    <hr class="night-mode-available">
    <div> <!-- Párrafo 2 -->
      <h3> El modelo Biopsicosocial. </h3>
      <p>
      La persona es un ser multidimensional:
      <ul>
        <li>Dimensión biológica <i class="fas fa-arrow-right"></i> Estructura física</li>
        <li>Dimensión psíquica <i class="fas fa-arrow-right"></i> Funciones psíquicas, comportamientos, emociones</li>
        <li>Dimensión social <i class="fas fa-arrow-right"></i> Familia, amistades, trabajo y comunidad</li>
      </ul>
      Estas dimensiones son indivisibles y configuran la persona como un ser
      <span class="negrita">BIOPSICOSOCIAL</span>.<br>
      Los Ancianos, enfermos, discapacitados… conforman <span class="negrita">UNIDADES
      BIOPSICOSOCIALES</span> y presentan necesidades físicas, psíquicas y sociales.<br>
      La atención a las personas en situación de dependencia está dirigida a satisfacer las
      necesidades que presenten en estos tres ámbitos.<br>
      En este módulo nos centraremos en la atención y apoyo psicosocial que las personas
      dependientes requieren.<br><br>
      Pero... <span class="negrita">¿qué entendemos por atención y apoyo psicosocial?</span><br><br>
      <span class="negrita">Conjunto de actuaciones</span> destinadas a :<br>
      <ul>
        <li>Asegurar la capacidad funcional, psicológica y emocional de la persona o</li><li>Retrasar la pérdida de la capacidad funcional, psicológica o emocional.</li><br><br>
        <li>Las intervenciones se dirigen a los siguientes ámbitos: <span class="negrita">PERSONAL, FAMILIAR Y COMUNITARIO</span>.</li>
        <li>LAS INTERVENCIONES LAS AGRUPAREMOS EN <span class="negrita">4 BLOQUES:</span>
          <ol>
            <li>Estrategias y técnicas relacionadas con la <span class="negrita">modificación de conducta y las habilidades sociales</span></li>
            <li>Estrategias y técnicas para el mantenimiento y desarrollo de las <span class="negrita">habilidades de autonomía personal</span></li>
            <li>Estrategias y técnicas para el mantenimiento y rehabilitación de las <span class="negrita">funciones cognitivas y el tratamiento de trastornos psicológicos</span></li>
            <li>Estrategias y técnicas de intervención en las <span class="negrita">actividades de ocio y tiempo libre</span>.</li>
          </ol><br>
        </li>
        <li>LAS NECESIDADES HUMANAS Y SU SATISFACCIÓN:<br>Estas intervenciones, en función de la persona usuaria, se realizarán en <span class="negrita">2 niveles:</span>
          <ul>
            <li><span class="negrita">ASISTENCIAL:</span> actuaciones para ayudar a una persona a suplir sus necesidades psicológicas y sociales. Por ejemplo: le vistes.</li>
            <li><span class="negrita">EDUCATIVO:</span> pretende que la persona aprenda y consiga satisfacer sus propias necesidades mediante una labor pedagógica. Por ejemplo, le ayudas brevemente a vestirse, le proporcionas alguna ayuda técnica que el ayude a poder hacerlo de forma autónoma.</li>
          </ul>
        </li>
      </ul>
      </p>
    </div>
    <hr class="night-mode-available">
    <div> <!-- Párrafo 3 -->
      <h3>Fundamentos de Psicología</h3>
      <p>
        <h4>- ¿Qué es la psicología?</h4>
        La psicología se ocupa del estudio de la conducta y los procesos mentales de las personas, o dicho de otra manera, de lo que la persona hace, siente o piensa.<br>
        <ul>
          <li><span class="negrita">Pensar:</span> procesos mentales (percepción, memoria, pensamiento…)</li>
          <li><span class="negrita">Hacer:</span> conducta, es decir las acciones que las personas llevan a cabo para relacionarse con el medio.</li>
          <li><span class="negrita">Sentir:</span> emociones y sentimientos</li>
        </ul>
          En casi todas las actuaciones profesionales de un Técnico en Atención a Personas en
          situación de Dependencia (TAPSD) nos vamos a encontrar con aspectos relacionados con la psicología. Conocer como es una persona y cómo se comporta en determinadas situaciones. Cómo manifiesta sus emociones y sentimientos, qué capacidad tiene para acometer nuevos aprendizajes,…
          La psicología es una ciencia muy amplia y por eso se ha diversificado en distintas ramas:
          psicología social, psicología educativa, psicología industrial, psicología del aprendizaje y psicología
          evolutiva (se ocupa de estudiar los cambios que se producen en la persona a lo largo del ciclo vital.
          Para esta rama de la Psicología el desarrollo es un proceso continuo de crecimiento y cambio). <br><br>
        <h4>- ¿Qué es la conducta?</h4>
        Es la manera particular de comportarse o actuar de una persona en respuesta a una
        situación. Conducta como respuesta a un estímulo.<br>
        Está provocada por estímulos. Estos pueden ser:
        <ul>
          <li><span class="negrita">Externos:</span> Todos aquellos cambios en su entorno que afectan a la persona y la hacen reaccionar (Ej. Coger el paraguas para salir a la calle si está lloviendo) </li>
          <li><span class="negrita">Internos:</span> variaciones internas. (Ej. La sensación de hambre provoca la búsqueda dealimentos,..). </li>
        </ul>
        Otra manera de diferenciar los estímulos es:
        <ul>
          <li><span class="negrita">Fisiológicos:</span> afectan a las funciones físicas (hambre, sueño, el dolor de cabeza). </li>
          <li><span class="negrita">Psicológicos:</span> afectan al componente psíquico- (externos, por ej. la publicidad e
internos, por ej. La ansiedad).</li>
        </ul>
        <h5>· Componentes de la conducta:</h5>
        El comportamiento de una persona no debe ser valorado únicamente en función de su
        respuesta, tenemos que tener en cuenta el contexto en el que se produce. (Ej. Agresividad de un anciano en una residencia). Existen diferentes componentes de la conducta:
        <ul>
          <li><span class="negrita">Componente fisiológico:</span> Es la respuesta interna (pupilas dilatadas, respiración alterada, sudoración, tensión...)</li>
          <li><span class="negrita">Componente cognitivo:</span> Es el pensamiento que nos provoca una determinada situación o estímulo. Determina el siguiente componente. Por ejemplo: ver lluvia y pensar en un abrigo. </li>
          <li><span class="negrita">Componente conductual:</span> Es la respuesta motora (movimiento, puede ser acercamiento o alejamiento) y la respuesta verbal. Por ejemplo: Te hacen cosquillas y huyes</li>
        </ul>
        <h5>· Tipos de conducta:</h5>
        Desde el punto de vista sociosanitario analizaremos las conductas desde una triple
        perspectiva:
        <table border="2">
          <tr>
            <td>Conductas según las <span class="negrita">consecuencias</span> que acarrean</td>
            <td><span class="sub">Adecuadas:</span> consecuencia beneficiosa para los demás y propio. <br><span class="sub">Inadecuadas:</span> consecuencias negativas</td>
          </tr>
          <tr>
            <td>Conductas según la <span class="negrita">elaboración</span> de la respuesta</td>
            <td><span class="sub">Estereotipada:</span> los reflejos, son respuestas sin un propósito concreto y que se realizan de forma inconsciente. (reflejo de succión). <br><span class="sub">Aprendida:</span> se pone en práctica de manera intencionada mediante el aprendizaje. <br><span class="sub">Compleja:</span> derivadas de la capacidad de razonamiento.</td>
          </tr>
          <tr>
            <td>Conductas según su <span class="negrita">manifestación</span></td>
            <td><span class="sub">Agresiva:</span> utilizan violencia física o psicológica. <br><span class="sub">Pasiva o inhibida:</span> denotan sumisión. <br><span class="sub">Asertivas:</span> basadas en el propio respeto</td>
          </tr>
        </table><br>
        <h4>- ¿Qué son las Funciones Cognitivas?</h4>
        Las Funciones Cognitivas son procesos a través de los cuales una persona adquiere, procesa, almacena, transforma y recupera la información del entorno. <br>
        Las principales son la atención, la percepción, la orientación espacio-temporal, la memoria, el pensamiento y el lenguaje.
        <h5>· La Atención: </h5>
        Es la capacidad que nos permite focalizarnos en aquellas cosas que necesitamos en cada momento. <br>
        Está condicionada por dos factores: La intensidad y el que podamos prever su aparición son factores que hacen que la persona preste mayor atención
        <ul>
          <li>El Estímulo: 
            <ul><li>Mayor intensidad y/o más imprevisto.</li></ul>
          </li>
          <li>La disposición de la persona:
            <ul>
              <li>Circunstancias como la fatiga, el sueño, el hambre, el frío, influyen negativamente en la capacidad de atención.</li>
              <li>Estados de ánimo como el interés, la motivación, la fatiga mental, el humor, son factores que afectan a la capacidad de atención de una persona, a veces pueden estimularla o inhibirla según el caso</li>
          </li>
        </ul>
        La atención puede ser de 2 tipos
        <ul>
          <li>Voluntaria: Dirijo la atención a algo de manera intencionada.</li>
          <li>Involuntaria: Algo externo atrae mi atención</li>
        </ul>
        La atención nos permite:
        <ul class="ticks">
          <li>Reaccionar a los Estímulos. En un tiempo adecuado (ej. Frenar el coche al cruzar una pelota, socorrer a una persona que se ha tragado algo,…). </li>
          <li>Discriminar los estímulos. Esto se denomina defensa perceptiva y hace que no nos distraigamos ante estímulos irrelevantes (no perder la concentración por los ruidos estando en clase). </li>
          <li>Concentrarnos. Mantenernos atentos durante un largo periodo en una actividad (ver una película, estudiar,..).</li>
          <li>Hacer varias cosas a la vez. De manera correcta, atendiendo sólo a esas actividades (ej. Atender al teléfono, apuntar un mensaje y vigilar la comida).</li>
        </ul><br>
        Para mantener la atención es recomendable:<br>
        - Elegir un lugar adecuado para realizar las actividades.<br>
        - Dormir las horas suficientes.<br>
        - Establecer rutinas para las actividades cotidianas (especialmente ancianos), ya que las rutinas y los hábitos requieren menos esfuerzo de atención.<br>
        - El nerviosismo dificulta la atención. <br><br>
        <q align="center">
        Sin atención, es difícil que conservemos un acontecimiento en la memoria
        </q>
        <q align="center"> Retenemos mejor aquello que es significativo para nosotros
        </q></li><br>
        <h5>· La Percepción: </h5>
        Es la función que permite a una persona, a través de los sentidos, recibir, interpretar y elaborar la información proveniente de su entorno. La percepción interpreta las sensaciones dándoles significado.<br>
        La sensación precede a la atención y a la percepción.<br>
        La percepción no es una mera suma de estímulos que recibimos, sino aquello que organiza la información según nuestras experiencias previas, nuestros deseos y necesidades.<br><br>
        <h5>Características de la percepción</h5>
        Sólo atendemos a una pequeña parte de los estímulos que percibimos, y son aquellos que son más significativos para nosotros. Esto se debe a que la percepción tiene unas características:
        <ul>
          <li>La percepción es SUBJETIVA: cada persona reacciona de forma diferente ante el mismo estímulo.</li>
          <li>La percepción es SELECTIVA: como no podemos percibir todos los estímulos al mismo tiempo, seleccionamos los más significativos</li>
          <li>La percepción es RELATIVA: Un mismo estímulo en situaciones diferentes se va a percibir de distinta manera.</li>
          <li>La percepción depende de la EXPERIENCIA: depende del número de veces que se ha encarado dicha circunstancia. No percibe la soledad igual una persona soltera que siempre ha vivido sola, que una persona que se acaba de separar, por ej. Efectos Ópticos</li>
        </ul><br>
        <h5>· La Memoria: </h5>
        Es la capacidad de recordar y retener. La capacidad de codificar la información extraída de nuestra experiencia con el medio, almacenarla, recuperarla y utilizarla posteriormente.<br> Sin memoria no hay aprendizaje, ya que todo aprendizaje implica retención.<br> Es la capacidad mental a la que más recurrimos, lo consideramos una cualidad que tienen unas personas más que otras<br><br>
        <h5>El funcionamiento de la memoria</h5>
        Se puede explicar su funcionamiento a partir de <span class="sub">tres procesos:</span><br>
        <ol>
          <li><span class="sub">La adquisición de la información</span>
            <ul>
              <li>Este proceso consiste en la entrada de información a través de los sentidos</li>
              <li> Necesitamos la atención y la percepción para filtrar lo significativo e ignorar lo demás</li>
            </ul>
          </li>
          <li><span class="sub">Almacenamiento de la información</span>
            <ol>
              <li>Almacenamos información con el objetivo de poder recuperarlo cuando sea necesario. La información que entra en el cerebro se tiene que almacenar previamente para poder recordar después</li>
              <li>Ha tres <span class="sub">tipos de memoria </span>o niveles de almacenamiento:
              <ul>
                <li>Memoria inmediata o sensorial: Es el recuerdo inmediato que sigue a la presentación del estímulo. Se necesita atención para percibir el estímulo y no pasarlo por alto</li>
                <li>Memoria a corto plazo: Su capacidad de almacenamiento es más limitada pero podemos retenerla durante más tiempo. Utilizamos como estrategia una repetición memorizada (por ej. Para retener un nº de tfno). Una parte de la información a corto plazo se almacena y otra se pierde.</li>
                <li>Memoria a largo plazo.: La información es relativamente permanente, se puede considerar el almacén de información bien aprendida.</li>
              </ul>
            </li>
            </ol>
          </li>
          <li><span class="sub">La recuperación de la información</span><br>
          Consiste en la extracción de la información almacenada. Tiene lugar de una forma
intencionada o de forma involuntaria. La memoria consiste en el almacenamiento de la
información para recuperarla posteriormente.<br>
No se trata de un simple registro pasivo de datos sino de una función activa que permite
registrar experiencias y evocar recuerdos de forma selectiva según se desee.<br>
La memoria es generalmente la primera capacidad cognitiva que se pierde con la edad y la
van siguiendo gradualmente todas las demás.<br>
No todos los tipos de memoria se pierden con igual rapidez. Suele ser frecuente perder
primero la de a corto plazo, manteniéndose la memoria a largo plazo intacta.<br>
Este deterioro es muy frecuente en la ancianidad pero también aparece asociado a distintos
tipos de enfermedades como el síndrome de Down, la demencia o la depresión.
        </li>
        </ol><br>
        <h5>· La orientación espacio-temporal y personal: </h5>
        Es la capacidad de una persona de situarse con respecto a otras, a objetos, a lugares y al tiempo en un momento determinado o para identificar personas de su entorno y de su vida familiar<br><br>
        <span class="sub"><span class="negrita">- ORIENTACIÓN ESPACIAL: </span></span> Es la capacidad del individuo de conocer el mundo que le rodea tomando como referencia el propio yo.<br> 
        Se refiere a la capacidad de saber en qué lugar nos encontramos (arriba-abajo, puntos cardinales, ciudad, edificio,..) y hacia dónde nos dirigimos. <br>
        <span class="sub"><span class="negrita">- ORIENTACIÓN TEMPORAL: </span></span>Es la capacidad del individuo de localizar en el tiempo hechos o situaciones relacionándolas con su propia posición.<br>
        Conocer la cronología de los eventos o rutinas que tenemos a lo largo del día (mañana,tarde, noche, comida, cena, dormir,..), la hora, el día de la semana,… <br>
        <span class="sub"><span class="negrita">- ORIENTACIÓN PERSONAL: </span></span>Es la capacidad del individuo de identificar a su familia y las relaciones familiares principalmente: conocer el nombre de sus hijos y nietos, saber el nombre de su pareja, recordar su número de teléfono, su estado civil,…<br><br>
        <h5>· El Pensamiento: </h5>
        Es la función cognitiva por la cual procesamos y ordenamos ideas y conceptos para generar conclusiones. <br>
        Vinculados al pensamiento nos encontramos los siguientes procesos cognitivos:
        <ol>
          <li>El <span class="negrita">razonamiento</span> proceso mediante el cual extraen conclusiones a partir de premisas, requiere de un cierto nivel de abstracción</li>
          <li>La <span class="negrita">creatividad:</span> Es la capacidad para llegar a enfoques originales, novedosos e incluso geniales.</li>
        </ol>
        <h5> Solución de problemas </h5>
        Consiste en encontrar una estrategia o un recurso para afrontar una situación. Accedemos a la solución de problemas mediante dos tipos de pensamiento:<br><br>
        <table class="tablacentro">
          <tr>
            <td>Convergente<br><i class="fas fa-arrow-down"></i><br>Solución convencional - 1 única solución</td>
            <td>Divergente: relacionado con la creatividad<br><i class="fas fa-arrow-down"></i><br>Solución original - varias soluciones</td>
          </tr>
        </table><br>
        <h5>· El Lenguaje: </h5>
        El lenguaje es un código simbólico y estructurado de signos orales y escritos dotados de un significado comprensible para todas las personas que pertenecen a una comunidad lingüística.<br>
        La comunicación puede ser a través de palabras, expresiones faciales, gestos,..<br>
        El lenguaje es esencial para la organización del pensamiento.<br><br>
        <h4>El Estado Emocional: Emociones y Sentimientos: </h4>
        <span class="negrita">Emociones:</span> conjunto de reacciones afectivas del organismo, producidas por el cerebro y caracterizadas por una excitación ante eventos significativos, que surgen de manera espontánea. Se engloban en seis emociones básicas: miedo, sorpresa, aversión/asco, ira/enfado, tristeza y alegría.<br>
        <span class="negrita">Sentimientos:</span> resultado de la relación, vivencias y experiencias de nuestra forma de actuar. No hay un estímulo que los desencadene, sino que son producto de una situación progresiva que va dejando huella sobre nuestra conducta. <br>
        <p style="font-style: italic;">Ej. Para diferenciar ambos estados: La felicidad. Es un sentimiento ya que es un estado más o menos estable y de larga duración, en cambio, la alegría es una emoción ya que está provocada por un estímulo (reacción intensa pero breve).</p><br>
        Las emociones implican simultáneamente una respuesta cognitiva, fisiológica y motora. Ej. miedo a los perros RR cognitiva (piensa “ me puede atacar”), RR fisiológica (taquicardia, sudoración,..), RR motora (escapar). <br><br>
        <table border="3" class="tablacentro" width="100%">
          <tr style="background-color: lightgreen; color: black">
            <th>EMOCIONES</th>
            <th>SENTIMIENTOS</th>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Se representan en el cuerpo</td>
            <td>Se representan en la mente</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Producen reacciones fisiológicas/físicas</td>
            <td>Producen reacciones psicológicas/mentales</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Son innatas y universales</td>
            <td>Son aprendidas e individuales</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Preceden a los sentimientos y pueden ser la base de estos</td>
            <td>Son precedidos por las emociones y pueden tener como base a las mismas</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Pueden vivirlas diferentes especies</td>
            <td>Reservado al ser humano, que está dotado de mente</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Pueden ser inconsistentes</td>
            <td>Son consistentes</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Menos duraderas en el tiempo</td>
            <td>Mas duraderos en el tiempo</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Mas intensas</td>
            <td>Menos intentos</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Aparecen súbitamente</td>
            <td>Aparecen poco a poco</td>
          </tr>
          <tr style="background-color: lightblue; color: black;">
            <td>Provocadas por un estímulo concreto</td>
            <td>Dependen de la experiencia y nuestros procesos cognitivos</td>
          </tr>
        </table><br>
        Los procesos cognitivos determinan las emociones. Dependen del significado que las personas atribuyan a los estímulos (ante un estímulo aversivo dos personas reaccionan de distinta manera).<br>
        Un alto nivel de autocontrol implica dominar las reacciones somáticas que acompañan a las emociones.<br>
        La INTELIGENCIA EMOCIONAL es la capacidad de reconocer nuestros propios sentimientos y los sentimientos de los demás, de motivarnos y manejar adecuadamente las relaciones.<br>Engloba destrezas, actitudes, habilidades y competencias que determina nuestra conducta respecto a nosotros mismos y en nuestra relación con los demás.<br><br>
        <h4>La Personalidad: </h4>
        Es el conjunto de características emocionales, de pensamiento y conducta que una persona manifiesta y que la definen en su conjunto. <br>
        Es la forma en que una persona piensa, se siente, se comporta e interpreta la realidad. Está determinada por elementos hereditarios y moldeado por las circunstancias. Hay que distinguir:<br>
        <ul class="ticks">
          <li><span class="negrita">Temperamento:</span> Elemento hereditario de la personalidad. Permanece inmutable.</li>
          <li><span class="negrita">Carácter:</span> elemento adquirido y por tanto modificable de la personalidad.</li>
        </ul><br>
        Todos podemos cambiar nuestra forma de ser, pero siempre en base a las características con las que hemos nacido.<br>
        La personalidad presenta una serie de atributos previsibles que llamamos RASGOS. La combinación de estos en cada individuo es lo que configura su personalidad<br><br><br>
      </p>
        <h4>TRASTORNOS DE PERSONALIDAD</h4>
        <ul>
          <li><span class="negrita">¿Qué son?</span><br>
          Son patrones de pensamiento, comportamiento y emotividad muy rígidos e inadaptados que suelen perturbar la vida personal, profesional y social de la persona.
          <br>Las personas afectadas de trastornos de personalidad tiene dificultad para manejar el estrés y los problemas cotidianos.
          <br>Los problemas de inadaptación afectan a casi todos los aspectos de su vida.<br>
          </li>
          <li><span class="negrita">Características de una personalidad psicológicamente sana</span>
          <ul>
            <li><span class="sub">FLEXIBILIDAD:</span> Consiste en disponer de un amplio repertorio de conductas que permitan reaccionar de manera adecuada ante distintas situaciones. </li>
            <li><span class="sub">CAPACIDAD DE AFRONTAMIENTO</span> y tolerancia ante situaciones de presión. </li>
            <li><span class="sub">PERCEPCIÓN DE SÍ MISMO</span> adecuada a la realidad. </li>
          </ul>
          </li>
        </ul><br>
        <h4>Otros Conceptos: </h4>
        <span class="negrita">AUTOCONCEPTO:</span> Percepción que una persona tiene de sí misma, lo que yo pienso de mi.<br>
        <span class="negrita">AUTOESTIMA:</span> Es el valor que concedemos a la imagen que tenemos de nosotros mismos.<br>
        <span class="negrita">EMPATÍA:</span> Es la habilidad para comprender los sentimientos y emociones de los demás, sin juzgarlos, desde su punto de vista.<br>
        <span class="negrita">MECANISMOS DE DEFENSA:</span> Son estrategias psicológicas inconscientes puestas en juego para hacer frente a la realidad y mantener la autoimagen. Todos los usamos inconscientemente para evitar y protegernos de los pensamientos o sentimientos negativos — como la ansiedad o la culpa.<br><br>
        Nuestros mecanismos de defensa entran en acción cuando nos sentimos amenazados. Esto no necesariamente significa sentirse amenazado físicamente—más bien significa que estas estrategias psicológicas son prevalentes en entornos de alto estrés, cuando dudamos de nuestras habilidades y de pronto nos damos cuenta de nuestras propias deficiencias.<br><br>
        <span class="negrita">TIPOS DE MECANISMOS DE DEFENSA</span><br>
        <ul>
          <li>MECANISMOS DE ADAPTACIÓN
            <ul>
              <li>Buscando ayuda y apoyo(<span class="sub">afiliación</span>)</li>
              <li>Ayudando a los demás(<span class="sub">altruismo</span>)</li>
              <li>Buscando los aspectos divertidos(sentido del humor)</li>
              <li>Prever de manera realista las consecuencias y considerar soluciones alternativas a los problemas(<span class="sub">anticipación</span>)</li>
              <li>Afrontar las conflictos emocionales evitando pensar en problemas o lo que produce malestar (<span class="sub">supresión</span>)</li>
            </ul>
          </li>
          <li>MECANISMOS DE EVITACIÓN O NEGACIÓN: consiste en mantener las situaciones estresantes fuera de la conciencia para que no causen malestar
            <ul>
              <li><span class="negrita">NEGACIÓN: </span>consiste en enfrentarse a los conflictos negando su existencia o si relación o relevancia con el sujeto. Se rechaza lo desagradable.</li>
              <li><span class="negrita">PROYECCIÓN: </span>el sujeto atribuye a otras personas sus propias virtudes o defectos, creencias...</li>
              <li><span class="negrita">REGRESIÓN: </span>proceso inconsciente por el cual el individuo volverá a dormas de funcionamiento más antiguas, más infantiles, para evitar el conflicto o el esfuerzo creado por el crecimiento y el cambio.</li>
              <li><span class="negrita">RACIONALIZACIÓN: encontrar razones que justifiquen un acto que sería vivido como conflictivo sin esas razones y entra en juego cuando no se consigue algo que se deseaba y se decide que en realidad no se deseaba tanto, o bien cuando algo malo sucede y se decide que no era tan malo.
</span></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>

  <script src="../../js/nightmode.js" type='text/javascript'></script>
  
</body>
</html>