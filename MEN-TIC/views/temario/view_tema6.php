<?php 
/*
  session_start();

	if (isset($_SESSION) && isset($_SESSION["id_user"]) === false) {
	  //exit("No estas logueado, datos incorrectos.");
    //Redirecciono al login
    header("location: ../controllers/controller_register_login.php");
    exit;
		
	}*/
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
    <h1> Tema 6. </h1>
      <h2> Animación y dinamización del ocio y tiempo libre en colectivos específicos </h2> <br><br><br>
      <img width="800px" class="centrarimagen" src="../../img/temas/tema6/intro.png"> <br><br><br>
      <div> <!-- Párrafo 1 -->
        <img width="600px" src="../../img/temas/tema6/frases.png" style="float:right; margin-left:20px;">
        <h3> Introducción. </h3>
        Una de los aspectos que más se valoran y a los que más importancia se da es a las actividades que realizamos para sentirnos bien con nosotros/as mismos/as, lo que hacemos para encontrar la “paz interior”, lo que nos gusta hacer cuando tenemos tiempo y no tenemos ninguna otra obligación.<br>
        Esto responde a una necesidad humana, a una inquietud interior. Esto es aplicable a todas las personas, incluidas, por supuesto, aquellas con diversidad funcional o que tienen alguna circunstancia que limita o imposibilita el disfrute de las actividades de ocio convencionales o que necesitan una adaptación de los mismos para poder divertirse y disfrutar con dichas acciones.<br>
        Son personas, además, que disponen que bastante tiempo libre a lo largo de su día, por lo que se convierte en algo ineludible que puedan ocupar ese tiempo libre con actividades de ocio de calidad y ajustadas a sus gustos y características individuales.
        Aquí vamos a plantear algunos de los aspectos importantes en relación con la identificación terminológica (conceptos y teoría) sobre el tema y algunas alternativas de actividades que se pueden utilizar/aplicar con colectivos específicos.
      </div><br><br>
      <div> <!-- Párrafo 2 -->
        <img width="120px" src="../../img/temas/tema6/bola.png" style="float: left; margin-right: 20px;">
        <h3> ¿Qué es el tiempo libre y el ocio? </h3>
        Aunque ambos conceptos están relacionados, existe distinción entre ambos:
        <ul class="ticks">
          <li>
            <span class="negrita">TIEMPO LIBRE: </span>Es el tiempo que nos queda después de cumplir nuestras obligaciones y satisfechas nuestras necesidades vitales.
          </li>
          <li>
            <span class="negrita">OCIO:</span> es la manera en que utilizamos el tiempo libre de una manera autónoma y satisfactoria, es decir, para hacer lo que queramos y obtener satisfacción.
          </li>
        </ul><br>
        El ocio se encuadra dentro del tiempo libre y <span class="sub">se caracteriza</span> por:
        <ul>
          <li>Es voluntario.</li>
          <li>Es gratificante.</li>
          <li>Sirve para descansar, divertirnos o desarrollarnos como persona.</li>
        </ul><br>
        Algunas de las <span class="sub">propuestas recreativas</span> de ocio son:
        <ul>
          <li>Recreación artística.</li>
          <li>Recreación cultural.</li>
          <li>Recreación pedagógica.</li>
          <li>Recreación deportiva.</li>
          <li>Recreación ambiental.</li>
          <li>Recreación comunitaria.</li>
          <li>Recreación terapéutica.</li>
        </ul><br>
        Actualmente el ocio se ha convertido en un producto que se puede consumir y que genera mercado. Destinamos un porcentaje de nuestra renta al ocio.
      </div><br>
      <div> <!-- Párrafo 3 -->
        <h3> Importancia del ocio y tiempo libre en persona con necesidades específicas </h3>
        Las <span class="sub">personas con necesidades específicas</span> no deben ser apartadas de las propuestas de ocio por cuestiones de accesibilidad, desconocimiento, aislamiento o falta de apoyo en general. El disfrute del ocio es un indicador de la calidad de vida del usuario.<br><br>
        Los <span class="negrita">beneficios del ocio</span> sobre la calidad de vida:
        <ul>
          <li>Fomentan la comunicación y las relaciones interpersonales.</li>
          <li>Promueven la integración social y la participación.</li>
          <li>Apertura hacia nuevos intereses y formas de actividades.</li>
          <li>Favorecen el mantenimiento del funcionamiento físico/psíquico adecuado.</li>
          <li>Contribuyen a mantener el sentimiento de utilidad y autoestima personal.</li>
          <li>Potencian la creatividad.</li>
        </ul><br><br>
        <h5>- Ocio y Tiempo Libre en Personas Mayores: </h5>
        El juego no es exclusivo de la niñez, en cada etapa tiene unas características y una finalidad distinta.<br>
        Las personas mayores, tras la jubilación, aumentan su tiempo de libre y el mantienen el deseo dehacer cosas y de tener vidas activas.<br>
        En las personas mayores el juego hay que plantearlo de forma diferente. La desmotivación y, por tanto, la falta de participación es habitual en algunas personas mayores. Sin embargo hay muchos juegos apropiados para personas mayores. Algunos son los siguientes:
        <ul>
          <li><span class="sub">Los juegos de cartas y el dominó</span> ayudan a mantener una gran agilidad mental (memoria, atención, operaciones mentales,…) y favorecen la relación y el contacto social.</li>
        </ul><br>
        <h6>Estrategias para animar a la participación en las personas mayores:</h6>
        <ul>
          <li>Al contrario que con los niños, es mejor presentar el juego como un ejercicio.</li>
          <li>Es importante no forzar la participación, sólo animar.</li>
          <li>Propiciar la participación como observadores para que luego se unan a la actividad.</li>
          <li>No incitar a ir más allá de las posibilidades de cada uno.</li>
          <li>Reforzar y valorar los éxitos conseguidos.</li>
        </ul><br><br>
        <h5>- Ocio y Tiempo Libre en Personas Con Diversidad Funcional: </h5>
        Una de las principales necesidades de estos usuarios es la <span class="negrita">integración</span>, tanto social como laboral. Por lo tanto, la integración será algo que se potenciará a través de las actividades de ocio, no sólo en el ámbito familiar, sino también en la sociedad en general, aprovechando para su incorporación al mundo laboral, consiguiendo que se sientan útiles y productivas.<br>
        Es necesario que puedan <span class="negrita">acceder</span> a las opciones de ocio en igualdad de oportunidades. Será necesaria la <span class="negrita">adaptación</span> de las propuestas y los espacios, eliminando las barreras de cualquier tipo, para que puedan acceder a las actividades y recursos de ocio y tiempo libre.<br>
        Es importante potenciar el factor <span class="negrita">motivacional</span> y <span class="negrita">afectivo</span> en estas personas; es importante que las actividades hagan a la persona sentirse útil, capacitada, sin que se ponga el foco en lo que no puede hacer sino al contrario.<br><br>
        <h5>- Ocio y Tiempo Libre en Personas Enfermas: </h5>
        Las personas que padecen una enfermedad, ya sea temporal o crónica, y su relación con el ocio, su disfrute y el uso que hacen del mismo es de <span class="negrita">vital importancia</span> para su estado personal y su calidad de vida, ya que influye mucho en su estado anímico y emocional.
        Una de las necesidades que tienen es la de encontrar una <span class="negrita">distracción</span> que les permita emplear todo el tiempo libre que tienen de una forma satisfactoria, entretenida y divertida para poder desconectar de sus problemas y olvidar las preocupaciones y temores que puedan ir unidos a la enfermedad.
        También necesitan romper con la rutina que supone su día a día, sobre todo si están dentro de un hospital.
        Otras de las necesidades más frecuentes son las relacionadas con el <span class="negrita">afecto</span>, la cercanía personal y la emotividad, que se pueden satisfacer de manera espontánea con la participación en actividades de ocio.
        También necesitan que les hagan sentirse <span class="negrita">útiles</span>, que les ayude a <span class="negrita">autoevaluarse</span> correctamente y mantenga su ilusión por vivir.
      </div><br>
      <div> <!-- Párrafo 4 -->
        <h3>Interveción y educación del ocio</h3>
        La educación del ocio es la capacidad de las personas para escoger actividades durante el tiempo libre que le sirvan para su crecimiento personal de forma creativa, divertida y compartida.<br>
        La forma de ocupar el tiempo libre genera estilos de vida diversos, unos más saludables, más pasivos, más solidarios, más creativos que otros.<br>
        Por ello, es muy importante educar a las personas para que utilicen el tiempo libre de forma adecuada.<br><br>
        <h6>Objetivos de la intervención en el Ocio y Tiempo Libre</h6>
        <ul>
          <li>Conseguir aumentar la autoestima personal a través de la participación y la creatividad.</li>
          <li>Crear nuevos espacios de diversión.</li>
          <li>Para las personas con necesidades específicas potenciar tanto lo individual como lo social.</li>
          <li>Hacer que los usuarios se sientan activos.</li>
        </ul><br>
        <h6>Quién interviene en la educación del ocio</h6>
        Principalmente son la familia, instituciones y comunidades locales.<br>
        Los TAPSD deben de ayudar a ocupar el tiempo libre a personas con necesidades especiales y mayores, y por tanto, conocer los recursos que estén a su alcance<br><br>
        <ul style="list-style: none;">
          <li> <span class="negrita">- La familia</span><br>
            La familia deberá acostumbrar sin imposiciones, tanto a personas mayores o con discapacidad, a utilizar el tiempo libre de manera consciente, diversificada y participativa para contribuir a su bienestar.
          </li><br>
          <li> <span class="negrita">- Instituciones: centros de atención a personas mayores o con discapacidad</span><br>
            En los servicios de atención de personas mayores y con discapacidad existen programas de animación sociocultural y de terapia ocupacional destinados al ocio.<br>
            El TAPSD cooperará con los profesionales de animación sociocultural, terapia ocupacional o educación en las tareas de intervención en el tiempo libre con estos colectivos.
          </li><br>
          <li> <span class="negrita">- La comunidad</span>
            La utilización de espacios comunitarios por parte de personas con necesidades específicas es un indicador del grado de integración en la sociedad.<br>
            El uso de estos recursos promueve el establecimiento de redes sociales fuera de la familia y facilita la integración social de estos colectivos.
          </li>
        </ul><br>
        <h6>El tiempo libre de las personas en situación de dependencia</h6>
        Ya hemos comentado que las personas en situación de dependencia a las que atendemos suelen disponer de una gran cantidad de tiempo libre.<br>
        Sin embargo, a menudo la falta de motivación o la escasa o nula organización de su tiempo libre comporta que estas personas no dediquen dicho tiempo a actividades provechosas para su desarrollo personal.<br>
        Es importante, por tanto, que las actividades de ocio proporcionen a estas personas vivencias y experiencias gratificantes, generadoras de estados emocionales positivos que contribuyan a una mejora de sus habilidades cognitivas, sociales y funcionales, de su autoestima y, en definitiva, de su calidad de vida.<br>
        Por otra parte, se deben proveer los medios necesarios para que todas las personas, independientemente de sus capacidades, puedan acceder a los equipamientos, servicios y programas de ocio comunitario. Es lo que actualmente se denomina ocio inclusivo.<br>
        Así pues, en los diferentes diseños de intervención dirigidos a personas con necesidades específicas hay que trabajar en una doble línea: Por una parte, organizar y gestionar la cantidad de tiempo libre disponible. Por otra, ofrecer o promover una amplia gama de actividades y recursos dirigidos a satisfacer sus intereses y motivación.<br><br>
        <h6>El tiempo libre de las personas en situación de dependencia</h6>
        El concepto de ocio inclusivo asume que la diversidad, la convivencia y el aprendizaje en los grupos heterogéneos son la mejor forma de beneficiar a todos los participantes. Y subraya el papel activo de la sociedad en la respuesta a las necesidades de todas las personas. De esta manera, un entorno inclusivo de ocio es aquel en el que todas las personas tienen cabida.<br>
        Si logramos que la persona usuaria sea capaz de adquirir unos hábitos de ocio variados y saludables, estamos estableciendo las bases para que disponga de mayor autonomía y desarrolle sus facultades físicas y psíquicas.<br><br>
        <h6>Intervención del TAPSD en la educación del ocio:</h6>
        Las <span class="sub">funciones</span> del TAPSD son las siguientes:
        <ul>
          <li>Obtener información sobre los recursos de ocio y tiempo libre que se ofrecen en la comunidad.</li>
          <li>Contactar con ellos.</li>
          <li>Proporcionar la información a la persona o a su familia.</li>
          <li>Acompañar a la persona durante todo el proceso de integración.</li>
          <li>Dar los apoyos necesarios para la realización de las actividades.</li>
          <li>Proporcionar las adaptaciones necesarias.</li>
          <li>Seguir la evolución de la persona en las actividades.</li>
          <li>Facilitar y promover la interacción y participación.</li>
          <li>Mediar en los posibles conflictos.</li>
          <li>Mantener reuniones de seguimiento con los monitores de las actividades.</li>
          <li>Informar a las familias de la evolución del proceso de integración.</li>
        </ul>
        Además, el TAPSD es el profesional responsable de definir y/o adaptar el proyecto de animación de Ocio y Tiempo Libre.<br><br>
        <h6>Dificultades para la animación del ocio en PSD</h6>
        Son varios los factores, tanto <span class="negrita">internos</span> como <span class="negrita">externos</span>, que van a dificultar tanto el acceso de los usuarios al ocio como la dinamización y la animación del mismo por parte del profesional.<br><br>
        Los <span class="sub">factores internos</span> que dificultan el disfrute el ocio por parte de los usuarios son:
        <ul>
          <li>La escasa <span class="negrita">motivación</span> que estas personas suelen tener para acceder a las distintas actividades que se ofrecen desde diferentes instituciones</li>
          <li>La poca <span class="negrita">participación</span> en las actividades de ocio propuestas.</li>
          <li>Las propias <span class="negrita">ideas</span> o los <span class="negrita">prejuicios</span> que tienen sobre determinadas actividades (por cuestiones morales o culturales).</li>
        </ul><br>
        Los <span class="sub">factores externos</span> que dificultan el disfrute el ocio por parte de los usuarios son:
        <ul>
          <li>Los <span class="negrita">prejuicios</span> que la sociedad tiene en determinadas ocasiones sobres estas personas y sus posibilidades.</li>
          <li>Los <span class="negrita">espacios</span> siguen sin estar adaptados a las necesidades de estos usuarios (barreras arquitectónicas y de comunicación).</li>
          <li>La <span class="negrita">oferta</span> de actividades para estos colectivos no terminan de ser todo lo varias, llamativas y ricas que deberían.</li>
        </ul>
      </div><br>
      <div> <!-- Párrafo 5 -->
        <h3>Actividades para la animación del ocio en colectivos específicos</h3>
        <ul>
          <li> <h5>Concepto y Características:  </h5>
            Lo primero que define el juego es el <span class="sub">placer</span>. El juego es siempre una actividad <span class="negrita">divertida</span>, que generalmente suscita <span class="negrita">excitación</span> y hace aparecer signos de <span class="negrita">alegría</span>, pero aún cuando no vaya acompañada de estos signos de regocijo, siempre es evaluada <span class="negrita">positivamente</span> por quien la realiza. Esto ocurre en todas las edades y/o momentos de la vida.<br>
            Son <span class="sub">características</span> del juego:
            <ul class="carita">
              <li>El juego es una experiencia de libertad.</li>
              <li>El juego es sobre todo un proceso, una finalidad sin fin.</li>
              <li>El juego es una actividad que implica acción y participación activa, ya que es un actividad creadora.</li>
              <li>Favorece el desarrollo y mantenimiento cognitivo, físico, social, afectivo y emocional de los usuarios.</li>
              <li>La ficción se considera como un elemento constitutivo del juego.</li>
              <li>El juego es una actividad seria, tiene un orden, unas pautas de desarrollo.</li>
              <li>Favorece las relaciones y la integración con el entorno natural y social.</li>
              <li>Favorece el autocontrol, ya que tiene unas normas y además puede utilizarse como medio terapéutico.</li>
            </ul><br>
            La <span class="sub">función del adulto y/o profesional</span> como animador del juego puede ser doble: en unos momentos puede plantear propuestas de juego, y en otros convertirse en un organizador del entorno que facilite el juego libre.
          </li><br>
          <li> <h5>El Juego como Instrumento de Desarrollo de la Personalidad: </h5>
            Todos los expertos coinciden en que el juego es una actividad vital e indispensable para el desarrollo humano. Es una <span class="negrita">necesidad</span>. No sólo es una actividad de autoexpresión para el niño/a, sino también es una forma de autodescubrimiento, exploración y experimentación con sensaciones, movimientos, relaciones, a través de las cuales llega a conocerse a sí mismo y a formar conceptos sobre el mundo.<br><br>
            <h6>El juego potencia el desarrollo del cuerpo y los sentidos:</h6>
            <ul class="caritas">
              <li><span class="negrita">El juego crea y desarrolla estructuras mentales</span>, promoviendo la creatividad: instrumento de desarrollo del pensamiento, estimula la atención y la memoria, desarrolla la imaginación y la creatividad, estimula la discriminación fantasía-realidad, es comunicación y facilita el desarrollo del lenguaje coherente.</li>
              <li><span class="negrita">El juego promueve el equilibrio afectivo y la salud mental</span>: Es una actividad placentera que estimula satisfacción; permite la asimilación de experiencias difíciles facilitando el control de la ansiedad asociada a estas situaciones; posibilita la expresión simbólica de la agresividad y de la sexualidad infantil; es un medio para el aprendizaje de técnicas de solución de conflictos; facilita el proceso progresivo de la identificación psicosexual.</li>
              <li><span class="negrita">El juego es un instrumento de comunicación y socialización infantil</span>: Los <span class="sub">juegos simbólicos</span>, de representación o ficción estimulan la comunicación y cooperación con los iguales; amplían el conocimiento del mundo social del adulto y prepara al niño para el mundo del trabajo; estimulan el desarrollo moral, ya que son escuela de autodominio, voluntad y asimilación de reglas de conducta; facilitan el autoconocimiento, ayudan en los procesos de adaptación socio-emocional</li>
            </ul><br>
            <h5>Tipos de juegos: </h5>
            Existen diferentes criterios en base a los cuáles se pueden <span class="sub">clasificar</span> los juegos. Algunos de los criterios utilizados son:
            <ul>
              <li>El <span class="negrita">espacio</span> en que se realizan: de interior, exterior o juegos on line.</li>
              <li>El <span class="negrita">número</span> de participantes: individual o colectivo.</li>
              <li>El grado de <span class="negrita">directividad</span>: juego libre o juego dirigido.</li>
              <li>El <span class="negrita">aspecto</span> que desarrollan: psicomotrices, cognitivos, sociales, emocionales,…</li>
              <li>La presencia de <span class="negrita">normas</span>: reglado o no reglado.</li>
            </ul> <br>
            Algunos tipos de juegos son los siguientes:
            <ul class="manita">
              <li><span class="negrita">Simbólico</span>. Es el juego que permite a los usuarios representar, de manera simbólica, los roles y las situaciones del mundo que les rodea. Implica “hacer como si”… fuera la madre, el doctor, comes con palillos en lugar de con una cuchara,… </li>
              <li><span class="negrita">Construcción</span>. Son aquellos en los que, utilizando múltiples piezas, se construye algo. </li>
              <li><span class="negrita">De reglas</span>. Son aquellos juegos que tienen unas normas específicas de juego. </li>
              <li><span class="negrita">Cooperativo</span>. Son aquellos juegos en los que ningún equipo gana por encima del otro, sino que son necesarios todos en la misma medida para poder realizar y terminar el juego. </li>
              <li><span class="negrita">Competitivo</span>. Son los juegos en los que hay un ganador por encima del resto de jugadores y/o de equipos. </li>
              <li><span class="negrita">Psicomotor</span>. Son juegos en los que el movimiento desempeña un papel importante. </li>
              <li><span class="negrita">Educativo</span>. Son actividades que se desarrollan para que los usuarios adquieran y refuercen el aprendizaje de cualquier área.</li>
              <li><span class="negrita">Multicultural</span>. Son los juegos tradicionales que se juegan en otros países o culturas. </li>
              <li><span class="negrita">Tradicional</span>. Son los juegos típicos de un país y/o región dentro del mismo. </li>
              <li><span class="negrita">Nuevas tecnologías</span>. Son aquellos juegos que para poder jugarse necesitan un soporte informático: ordenador, Tablet, móvil, CD-ROM,… </li>
            </ul><br>
            Es importante tener en cuenta la etapa evolutiva en la que se encuentra el usuario y ofrecerle juegos y juguetes adaptados a sus posibilidades y edad. <br>
            Para los niños que presentan discapacidad visual, motora o auditiva, ADAPTAR LOS JUEGOS (variando las reglas) Y JUGUETES (modificaciones).<br>
            El TAPSD organizará los juegos teniendo en cuenta necesidades, capacidades y posibilidades de acción de las personas a las que van dirigidas, sin frenarse ante sus dificultades.<br>
            El TAPSD potenciará la iniciativa animando a que escojan a qué quieren jugar y respetando su ritmo de acción. Se deben evitar las actitudes sobreprotectoras que no favorecen la autonomía.
          </li><br>
          <li> <h5>Otras formas para la Animación del Ocio:  </h5>
            Además del juego existen una gran cantidad de formas de disfrutar de nuestro tiempo libre, desde un paseo hasta la visita a un museo, pasando por las fiestas tradicionales o la celebración del día de la madre. Entre otras vamos a diferenciar las siguientes:<br>
            <ul class="mayus">
              <li> <span class="sub">LOS TALLERES</span>. Un <span class="negrita">taller</span> es un método de trabajo que consiste en practicar y hacer cosas diversas a través de las cuales adquieres destrezas o desarrollas las que ya posees y puedes mejorar a través de la práctica. Fomenta el desarrollo creativo del usuario.<br>
              Algunos <span class="sub">ejemplos</span> de talleres son: cocina, poesía, escritura, bailes, pintura, artesanía, papiroflexia, teatro, jardinería, informática,…</li><br>
              <li><span class="sub">ACTIVIDADES ARTÍSTICAS</span>. La artística tienen como finalidad la práctica de algún talento artístico. <span class="sub">Ejemplo.</span>:
                <ul>
                  <li><span class="negrita">Dramatización y expresión corporal.</span></li>
                  <li><span class="negrita">Técnicas plásticas</span>: modelado, dibujo, pintura, papel (papiroflezia), grabado y estampación; en general, manualidades.</li>
                  <li><span class="negrita">Música</span>: tocar un instrumento musical, cantar (coro), audiciones, danzas,…</li>
                  <li><span class="negrita">Literatura</span>: lectura, bibliotecas,…</li>
                </ul>
              </li><br>
              <li> <span class="sub">EL TURISMO</span>. Viajes y visitas a lugares y/o diversos países. Son necesarios cambios en las instalaciones y/o servicios para las personas en SD pueden acceder a este tipo de ocio.
              </li><br>
              <li><span class="sub">ACTIVIDADES CULTIRALES</span>. provocan placer, intelectual o físico, relacionado con tradiciones, costumbres,… <span class="sub">Ejemplo.</span>: Relacionadas con la lectura, visitas a museos, exposiciones, conferencias, baile, visitar algún museo, talleres, Universidad de mayores o de la experiencia (pedagógica), museos, cine,...</li><br>
              <li><span class="sub">ACTIVIDADES DEPORTIVAS</span>. Relacionado con la práctica de deportes, tanto al aire libre como en espacios cerrados habilitados para ello. <span class="sub">Ejemplo.</span>: partidos de tenis, fútbol, baloncesto, natación, deporte adaptado,…</li><br>
              <li><span class="sub">OCIO EN LA NATURALEZA</span>. Se utiliza la recreación como facilitadora de la integración de las personas entre sí y de estas con su entorno ambiental. <span class="sub">Ejemplo.</span>: múltiples oportunidades: paseos, excursiones, juegos ecológicos o cooperativos, ecoturismo, campamentos, Granja-Escuela… para disfrutar con nuestros seres queridos y amigos. También ofrece posibilidades terapéuticas: baños termales, equinoterapia,…</li><br>
              <li><span class="sub">LOS MEDIOS DE COMUNICACIÓN Y LAS NUEVAS TECNOLOGÍAS</span>. Los medios de comunicación (TV, radio, Internet) y los canales temáticos (Netflix, HBO,…) ocupan esta franja de ocio</li><br>
              <li><span class="sub">EL FOLKLOLE Y LOS FESTEJOS</span>. Suponen un momento de compartir, relajarse, divertirse,… en compañía. Es una oportunidad para la inclusión de las PSD en la vida de la comunidad: Navidad, Semana Santa, Carnaval, fiestas locales y patronales, de conmemoración de acontecimientos históricos,…</li><br>
              <li><span class="sub">ACTIVIDADES DE VOLUNTARIADO</span>. Realizar actividades que repercutan positivamente en la comunidad, a partir del compromiso y la solidaridad de las personas. <span class="sub">Ejemplo.</span>: comedores sociales, asociaciones, ONG´s,…</li><br>
              <li><span class="sub">OTRAS ACTIVIDADES</span>. Se utiliza el tratamiento, la educación y los servicios relacionales para ayudar a la gente con enfermedades o diversidad funcional a utilizar su tiempo libre de una manera que mejore su salud, habilidades, independencia y calidad de vida. <span class="sub">Ejemplo.</span>: música, artesanía, terapia con animales, deportes, teatro,... </li><br>
            </ul>
          </li><br>
          <li> <h5>Juguetes para Personas con Diversidad Funcional: </h5>
            En relación a los juguetes hay que tener en cuenta los siguientes aspectos:
            <ul style="list-style: none;">
              <li><span class="negrita">- Adaptación de juguetes</span><br>
              Son todas las modificaciones que es necesario realizar a un juguete para que se ajuste a las capacidades del usuario.
                <ul class="manita">
                  <li>Adaptaciones para juguetes para personas con <span class="sub">discapacidad motora</span>: velcro, imanes, mangos, agarradores, colocación de reposacabezas, chalecos o cinturones para mantener la postura del usuario.</li>
                  <li>Adaptaciones para juguetes para personas con <span class="sub">discapacidad auditiva</span>: amplificación de los efectos sonoros y de la vibración, uso de luces,..</li>
                  <li>Adaptaciones para juguetes para personas con <span class="sub">discapacidad visual</span>: juguetes ricos en estímulos sonoros, táctiles y olfativos.</li>
                </ul>
              </li><br>
              <li> <span class="negrita">- Juguetes adaptados</span><br>
                Son los juguetes comercializados que ya se han diseñados para ser usados por personas con discapacidad. Son pocos los que existen en el mercado, de importación y muy caros. <br>
                Los más importantes son los juguetes didácticos que son un buen recurso para niños con discapacidad.<br>
                Existen organizaciones públicas y privadas que aportan recursos y ayudas para educadores y padres: la ONCE, el CEAPAT (Centro de Referencia Estatal de Autonomía Personal y Ayudas Técnicas).
              </li><br>
              <li> <span class="negrita">- Juguetes adaptados</span><br>
                Con sencillas adaptaciones del teclado y el ratón las personas con discapacidad pueden jugar con el ordenador.<br>
                Los juegos virtuales se convierten en una fuente de experiencias y la única forma de acceder a juegos cuya manipulación con el objeto real sería imposible (ajedrez, cartas, dominó, puzzles, construcciones,...).<br>
                Todo esto es posible gracias al desarrollo de periféricos del ordenador- HARDWARE (adaptaciones del teclado, ratón, digitalizadores de voz,..), como a la creación de programas específicos-SOFTWARE.
              </li>
            </ul>
          </li><br>
          <li> <h5>Recursos/Servicios para la dinamización del ocio: </h5>
            <ul style="list-style: none;">
              <li> <span class="negrita">- Las ludotecas</span><br>
                Es una institución que tiene como finalidad la educación en el tiempo libre a través del juego y el juguete.<br>
                Son un buen recurso de socialización de niños y jóvenes con necesidades específicas ya que facilitan la integración.<br>
                El espacio está distribuido por rincones de juego (la peluquería, el taller, la casa, la escuela,…) con materiales que inciten a la acción.
              </li><br>
              <li> <span class="negrita">- Las Bibliotecas</span><br>
                Es un espacio lúdico-recreativo que proporciona una serie de materiales informativos, en formato multimedia o impreso. Oferta multitud de actividades que favorecen el acercamiento de los usuarios y la animación a la lectura.
              </li><br>
              <li> <span class="negrita">- Otros Servicios</span><br>
                Además de los anteriores, existen otros servicios que se pueden utilizar para la dinamización del ocio de personas en situación de dependencia, como son:
                <ul>
                  <li>Piscinas municipales.</li>
                  <li>Pistas polideportivas.</li>
                  <li>Salas de cine.</li>
                  <li>Cibercafés.</li>
                  <li>Circuitos de bienestar.</li>
                  <li>Salones de baile.</li>
                  <li>Parques y jardines.</li>
                  <li>Paseos.</li>
                </ul>
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
