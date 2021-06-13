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
              <?php foreach($userModulos=getUserModulos($_SESSION["id_user"]) as $value) : ?>
                  <a class="dropdown-item night-mode-available" href="../../controllers/controllers_modulos/controller_modulo<?php echo getNumeroModulo($value); ?>.php">
                  <?php echo $value ?> </a>   
              <?php endforeach; ?>
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
  <h1> Tema 2. </h1>
  <h2> Las relaciones sociales </h2> <br><br><br>
  <img width="800px" class="centrarimagen img-fluid" src="../../img/temas/tema2/intro.png"> <br><br><br>
  <div> <!-- Párrafo 1 -->
    <h3> Introducción. </h3>
    <p>En el contexto en el que nos vamos a mover, las relaciones sociales son necesarias e
      imprescindibles tanto con usuarios y sus familias como con otros profesionales.
      Las herramientas que poseamos para enfrentarnos de manera adecuada antes las diferentes
      situaciones sociales son importantes; estas marcarán la forma en la que nos relacionamos,
      interaccionamos, nos comportamos,… con los demás.
      En esta unidad de trabajo vamos a hablar de las habilidades sociales y sus diferentes
      componentes, de diferentes técnicas que se pueden utilizar para entrenar las habilidades sociales, de las habilidades sociales con grupos específicos y de diferentes recursos que favorecen la relación social.</p>
  </div><br>
  <div> <!-- Párrafo 2 -->
    <h3>Las Habilidades Sociales</h3>
    Son un conjunto de comportamientos que nos permiten actuar con más eficacia en nuestras relaciones interpersonales.<br>
    Las relaciones sociales están presentes en cualquier contexto en el que nos encontramos: familia, relaciones laborales, en el Instituto, con los amigos, en los grupos, etc…<br>
    Las personas que presentan algún déficit en sus habilidades sociales, tienen mayor tendencia a desarrollar problemas emocionales y afectivos.<br>
    <ul>
      <li> Las habilidades sociales nos permiten: 
        <ul>
          <li> Mejorar nuestras relaciones interpersonales.</li>
          <li>Disminuir la ansiedad y el estrés cuando nos encontramos en situaciones sociales conflictivas.</li>
          <li>Mejorar nuestra autoestima.</li>
          <li>Incrementar nuestra calidad de vida.</li>
        </ul>
      </li>
      <li> Las habilidades sociales se aprenden: 
        <ul>
          <li>Las habilidades sociales se adquieren, y esto requiere un aprendizaje.</li>
          <li>Hay personas que disponen de mejores facultades y a las que les será más fácil adquirir habilidades sociales.</li>
          <li>Todas las personas pueden mejorar en la competencia social aplicando técnicas de entrenamiento en habilidades sociales.</li>
        </ul>
      </li>
    </ul>
  </div><br>
  <div> <!-- Párrafo 3 -->
    <h3>Componentes de las Habilidades Sociales</h3>
    Podemos diferenciar tres componentes que están relacionados entre sí:
    <ul class="mayus">
      <li> <span class="negrita">COMPONENTES CONDUCTUALES:</span>
        <ul>
          <li> Componentes Verbales: 
            <ul>
              <li>Es importante tener un buen dominio del vocabulario y organizar de manera lógica las frases y el discurso</li>
              <li>Es necesario asegurarnos de que el usuario entiende e interpreta correctamente los mensajes que le transmitimos. </li>
            </ul>
          </li>
          <li> Componentes No Verbales:
            <ul>  
              <li>Es la <span class="sub">comunicación no verbal</span>, la que emplea el cuerpo, el movimiento y los sonidos para transmitir la información o apoyar el contenido del mensaje</li>
              <li>Los <span class="sub">componentes no verbales</span>, podemos agruparlos bajo los siguientes parámetros: 
                <ul>
                  <li>Paralingüísticos</li>
                  <li>Kinésicos</li>
                  <li>Proxémicos</li>
                  <li>Relacionados con la apariencia física</li>
                </ul>
            </li>
            </ul>
          </li>
        </ul><br>
        <span class="negrita"> Componentes Paralingüísticos: </span><br>
        <ul>
          <li>Se refiere a cómo se dicen las cosas y no a lo que se dice.</li>
          <li>Los más importantes son: el volumen de la voz, la entonación, la fluidez, la velocidad, la claridad y el tiempo de habla.</li>
          <li>Estos aspectos se pueden trabajar desde el punto de vista de las habilidades sociales.</li>
        </ul>
        <span class="negrita"> La Kinesia: </span><br>
        <ul>
          <li>Se refiere a los movimientos del cuerpo durante la comunicación.</li>
          <li>Todos los movimientos que hacemos están transmitiendo alguna cosa, sobre todo emociones.</li>
          <li>Cuando hablamos de kinesia en la comunicación, nos referiremos a: la mirada (contacto ocular), la expresión facial, la sonrisa, los gestos y la postura corporal.</li>
        </ul>
        <span class="negrita"> La Proxemia: </span><br>
        <ul>
          <li>Hace referencia al uso del espacio personal y las distancias de aproximación en la comunicación.</li>
          <li>El grado de proximidad nos indica que clase de interacción estamos estableciendo, el grado de confianza, respeto, intimidad,..</li>
          <li>La distancia de aproximación varía en función de las personas, el contexto social, la cultura,.. Esta puede ser: pública, social, personal (la distancia que nos gusta a cada uno mantener con los demás) e íntima (personas emocionalmente muy cercanas). Como TAS, en muchas ocasiones invadiréis la distancia íntima de los usuarios. Por ello hay que ser muy respetuosos.</li>
        </ul>
        <span class="negrita"> La Apariencia Personal: </span><br>
        <ul>
          <li>Es el aspecto exterior de la persona.</li>
          <li>Es un elemento muy importante y transmite valores como la personalidad, la estética, la posición social,..</li>
          <li>Intentamos modificar nuestra apariencia para presentarnos a los otros en determinadas situaciones.</li>
          <li>Los componentes fundamentales del aspecto físico son: el vestido, el aseo y el atractivo físico.</li>
        </ul>
      </li><br>
      <li> <span class="negrita">COMPONENTES COGNITIVOS:</span>
        <ul>
          <li>La <span class="sub">percepción sobre el ambiente de comunicación:</span> nuestros pensamientos y comportamientos van a depender muchas veces de la percepción de las situaciones y del ambiente ( formal, familiar, cálido, distante,..), favoreciendo o dificultando la comunicación.</li>
          <li>Las <span class="sub">variables cognitivas de los sujetos:</span> Se refiere a la manera que tiene cada persona de percibir la realidad, de aprender de las situaciones, de procesarlas, recuperarlas, interpretarlas, de las expectativas personales.</li>
        </ul>
      </li><br>
      <li> <span class="negrita">COMPONENTES FISIOLÓGICOS:</span>
        <ul>
          <li>Son las <span class="sub">reacciones físicas</span> que aparecen de forma inconsciente en algunas situaciones y afectan a la comunicación y a la relación</li>
          <li>En este aspecto se aprecia la falta de habilidades sociales (aparición de sonrojo, sudoración, aumento de la frecuencia cardiaca y respiratoria,..) ante ciertas situaciones (hablar en público, manifestar una opinión contraria, hablar con alguien desconocido,..).</li>
          <li>Utilizar técnicas de relajación para disminuir la ansiedad ayuda a minimizar estas manifestaciones fisiológicas.</li>
        </ul>
      </li>
    </ul>
    <img width="800px" class="centrarimagen img-fluid" src="../../img/temas/tema2/esquema.png">
  </div><br><br>
  <div> <!-- Párrafo 4 -->
    <h3> Entrenamiento en habilidades sociales </h3>
    El entrenamiento en Habilidades Sociales es un conjunto de estrategias y habilidades que se enseñan a una persona con la intención de mejorar su competencia interpersonal en diferentes situaciones sociales.<br>
    El entrenamiento en habilidades sociales debe dirigirse a los tres componentes: conductuales, cognitivos y fisiológicos.<br><br>
    <h4>El entrenamiento en grupo: </h4>
    El grupo constituye un apoyo mutuo y fomenta la expresión de las emociones, la cooperación y las relaciones sociales. <br>
    El grupo es el escenario natural en el que aprendemos, practicamos y generalizamos lo aprendido.<br>
    Saber escuchar, participar, respetar turnos, son habilidades sociales básicas que es más fácil aprender en grupo. <br>
    El aprendizaje se enriquece con la observación de otras personas y por el refuerzo que proporcionan.<br><br>
    <h4>Técnicas de entrenamiento: </h4>
    <ul>
      <li>Enseñanza directa: 
        <ul><li>Indicaciones o instrucciones verbales: “no hables con la boca llena”; “lávate las manos antes de comer”; “no grites”,...</li></ul>
      </li>
      <li> Enseñanza a través de modelos: 
        <ul><li>Observación de otra persona que ejerce de modelo e imitamos. </li></ul>
      </li>
      <li> A través de técnicas o recursos: 
        <ul><li>Técnicas de modificación de conducta. </li><li>Técnicas específicas: retroalimentación, empatía, escucha activa, asertividad y role playing.</li></ul>
      </li>
    </ul>
    <ul class="mayus">
      <li>La retroalimentación o Feedback
        <ul>
          <li>La retroalimentación o feedback se entiende como la comunicación en dos direcciones.</li>
          <li>Es esencial que mantengamos una comunicación eficaz con los usuarios, asegurándonos de que han comprendido el mensaje.</li>
          <li>Seremos más efectivos si les preguntamos si lo han entendido.</li>
          <li>Hay que ser conscientes de las limitaciones en la comprensión y nos adaptaremos a ellas.</li>
          <li>La retroalimentación puede ser verbal y no verbal, gestual o escrita</li>
        </ul>
      </li>
      <li> La Empatía
        <ul>
          <li>Se entiende por empatía la capacidad de una persona para ponerse en el lugar de otra, y esto implica también la comprensión de su estado afectivo y emocional.</li>
          <li>Se entiende como la capacidad de una persona para adoptar el punto de vista de la otra.</li>
          <li>Nos permite comprender mejor los problemas.</li>
          <li>Aprender a ver cosas desde diferentes puntos de vista aporta:
            <ul>
              <li>Una mejor y más objetiva comprensión de los problemas.</li>
              <li>Permite planteamientos más variados para solucionar dichos problemas.</li>
              <li>Concede la posibilidad de modificar nuestro punto de vista, enriqueciéndolo de manera que sea más equilibrado y se ajuste a una realidad más diversa.</li>
            </ul>
          </li>
        </ul>
      </li>
      <li> La escucha activa
        <ul>
          <li>Se refiere a una serie de comportamiento y actitudes que preparan a la persona para escuchar a otra, concentrarse en lo que dice y proporcionar respuestas o feedback.</li>
          <li>Supone escuchar con atención (y no la simple actividad automática de la audición) lo que la otra persona nos dice con la intención de intentar comprenderlo.</li>
          <li>Intentamos profundizar en los sentimientos, ideas y pensamientos de la otra persona, para interpretar mejor lo que nos quiere decir.</li>
        </ul><br>
        <h6>Obstáculos para le escucha activa: </h6>
        <ul>
          <li>Prestar más atención a nuestras emociones y a lo que vamos a responder que a escuchar al que habla..</li>
          <li>Prejuzgar a las personas: nos fijamos más en lo que creemos que son que en lo que dicen. <span class="negrita">ETIQUETAMOS</span>.</li>
          <li>Quedarnos sólo con los contenidos que nos interesan, lo que hace que la comprensión sea incompleta. Dejamos escapar contenidos que pueden resultar interesantes.</li>
          <li>Creer que nosotros tenemos la razón, prestando solo atención a las opiniones que coinciden con las nuestras.</li>
        </ul><br>
        <h6>¿Cómo escuchar?</h6>
        <ul>
          <li>Tener empatía. Imprescindible en la escucha activa.</li>
          <li>Formular preguntas aclaratorias. Evitan perder información o entender erróneamente.</li>
          <li>Parafrasear. Con las mismas palabras.</li>
          <li>Reformular. Aspectos parciales u obtener conclusiones.</li>
        </ul><br>
        Acompañado todo de comunicación no verbal afín: mirada, gestos de asentimiento, postura receptiva,…
      </li><br>
      <li> Estilos de comunicación o tipos de conducta <br>
        Podemos destacar los siguientes Estilos de Comunicación o Tipos de Conducta: asertiva, agresiva y pasiva.
        <ul>
          <li> <span class="negrita"> La Conducta Asertiva: </span><br>
          Consiste en defender los derechos y expresar las opiniones propias sin vulnerar los derechos del otro y de manera adecuada. <br>
          Significa que se está abierto al diálogo y a cambiar nuestro pensamiento si nos damos cuenta de que es erróneo.<br>
          El comportamiento asertivo tiene muchas ventajas: disminuye la ansiedad, fomenta la adaptación social y genera un aumento de relación positiva, aumenta la confianza y seguridad en uno mismo y la autoestima y facilita la aceptación entre las personas. <br>Ayuda a expresar los sentimientos, derechos y deseos propios, positivos o negativos, de forma eficaz y teniendo en cuenta lo que los otros pueden sentir o pensar.
          </li>
          <li> <span class="negrita"> La Conducta Agresiva: </span><br>
          Consiste en expresar lo que se siente, lo que se quiere o lo que se piensa sin respetar los derechos de los demás. <br>
          La persona que presenta esta conducta no está dispuesta a cambiar aunque esté equivocado.<br>
          Esta actitud fomenta el resentimiento, la culpa, y la enemistad.<br>
          Estilo de comunicación intimidatorio, impositivo y desafiante, y suele renunciar al diálogo y la negociación en la resolución de conflictos.

          </li>
          <li> <span class="negrita"> La Conducta Pasiva/Inhibida: </span><br>
          Consiste en no expresar directamente los pensamientos, sentimientos o deseos. <br>
          A veces se ocultan para no molestar o dañar a los demás o por creer que no tienen valor.<br>
          Revela falta de seguridad y autoestima baja.
          </li>
        </ul><br>
        <h6>Estrategias para ser Asertivos</h6>
        <ul>
          <li>Tener una autoestima adecuada: Creer en uno mismo. Aceptarse a uno mismo sin renunciar a los derechos e intereses. Valorar positivamente la diversidad individual.</li>
          <li>Aprender a expresar las propias opiniones, aunque no sean compartidas por la mayoría.</li>
          <li>Aceptar las críticas y valorarlas.</li>
          <li>Mantener las propias opiniones con firmeza, pero escuchando otras opiniones, rebatiéndolas sin faltar al respeto o modificarlas si es preciso.</li>
          <li>No avasallar ni dejarse avasallar. Estos aspectos forman parte de las conductas agresivas y pasivas.</li>
        </ul>
      </li><br>
      <li> El role playing <br>
          <ul>
            <li>Se define como la técnica que consiste en simular, mediante una representación, una situación de la vida real.</li>
            <li>Es muy útil para trabajar aspectos de las habilidades sociales (HH.SS.): errores de comunicación, ejercitar la empatía,…</li>
            <li>Se elige una situación y se asignan los papeles a las personas elegidas para representar dicha situación.</li>
            <li>El resto de las personas harán de OBSERVADORES, anotando los progresos y aspectos a mejorar.</li>
            <li>Con las anotaciones, se llevará a cabo una valoración y se elaborarán propuestas de perfeccionamiento, pudiendo utilizarse registros.</li>
          </ul>
      </li>
    </ul>
  </div><br>
  <div> <!-- Párrafo 5 -->
    <h3> Habilidades sociales en grupos específicos </h3>
    Los déficits en habilidades sociales (HHSS) conducen a desajustes psicológicos. Cualquier proceso de intervención debe considerar como objetivo la mejora de la capacidad de esta persona para relacionarse socialmente.<br><br>
    <h4> DÉFICITS SOCIALES en PERSONAS MAYORES: </h4>
    Hay que destacar la importancia de mantener relaciones sociales para aumentar la salud y calidad de vida. <br>
    Muchas personas mayores muestran falta de HHSS: defender sus derechos, expresar sentimientos y deseos, decir “no”, solicitar servicios y ayuda.<br>
    En esta etapa de la vida, se producen pérdidas de las personas más significativas que constituían la red social de este colectivo (pareja, amistades, hijos,..).<br>
    En esta etapa se debe potenciar el mantenimiento de las relaciones que se conservan y fomentar nuevas relaciones. En estas nuevas relaciones HHSS les dotará de capacidades para afrontar situaciones diarias y hará que aumente la autoestima.<br><br>
    <h4> DÉFICITS SOCIALES en PERSONAS CON DISCAPACIDAD: </h4>
    Las personas con discapacidad suelen presentar dificultades en las relaciones sociales, presentando, en general, los siguientes déficits sociales:
    <ul class="ticks">
      <li>Dificultades para discriminar entre situaciones distintas: cuándo es correcto o incorrecto mostrar un comportamiento.</li>
      <li>Desconocimiento del uso de las normas sociales básicas.</li>
      <li>Estilos comunicativos inadecuados (verbales y no verbales).</li>
      <li>Dificultades para iniciar, mantener o finalizar una conversación.</li>
      <li>Dificultades para establecer nuevas relaciones.</li>
      <li>Dificultad para decir “no” o manifestar agrado o desagrado</li>
    </ul>
    Se sienten rechazadas y por ello muestran comportamientos anómalos: agresividad, conductas disruptivas, baja autoestima, aislamiento social.<br><br>
    <h4> DÉFICITS SOCIALES en PERSONAS CON ENFERMEDAD MENTAL: </h4>
    Pueden presentar las siguientes situaciones:
    <ul class="ticks">
      <li>Suelen presentar una falta de competencia personal para comportarse de una manera socialmente aceptable.</li>
      <li>Red social muy restringida.</li>
      <li>Apatía o falta de interés en participar en actividades sociales: buscar trabajo, ocio...</li>
      <li>Estigmatización: los demás no se muestran dispuestos a establecer relaciones con ellos.</li>
      <li>Razones asociadas a la propia enfermedad: no ser consciente del trastorno, no pedir ayuda...</li>
    </ul>
  </div><br>
  <div> <!-- Párrafo 6 -->
      <h3>Recursos que favorecen la relación social</h3>
      Destacamos los siguientes elementos:
      <ul>
        <li>Nuevas tecnologías.</li>
        <li>Asociacionismo.</li>
        <li> Espacios para promover las relaciones sociales:
          <ul>
            <li>En el domicilio.</li>
            <li>En un centro residencial o unidad convivencial.</li>
          </ul>
        </li>
        <li> Recursos de acompañamiento:
          <ul>
            <li>En el domicilio.</li>
            <li>En un centro residencial o unidad convivencial.</li>
          </ul>
        </li>
      </ul><br>
      <ul class="romanos">
        <li> <span class="negrita">LAS NUEVAS TECNOLOGÍAS</span>
          <ul>
            <li> <span class="sub">Objetivos:</span>
              <ul class="ticks">
                <li>Mentenerse informado de la actualidad.</li>
                <li>Comunicarse con otras personas.</li>
              </ul>
            </li>
            <li> <span class="sub">Acceso:</span>
              <ul class="ticks">
                <li><span class="negrita">Motivar e incentivar</span> a la persona usuaria: cursos básicos.</li>
                <li><span class="negrita">Facilitar el acceso</span> a personas con discapacidad física o sensorial: adaptación de ordenadores, ayudas técnicas...</li>
                <li><span class="negrita">Enseñar el uso</span> del correo electrónico, webcams, chats, foros, redes sociales, gestiones varias...</li>
              </ul>
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita">ASOCIACIONISMO</span><br>
          Las asociaciones promueven los derechos de sus socios y la mejora de la calidad de vida de los asociados y sus familias.<br>
          <ul>
            <li> <span class="sub">Finalidad:</span>
              <ul>
                <li>Dar respuesta a las necesidad del colectivo.</li>
                <li>Ayuda mutua.</li>
                <li>Actividades.</li>
                <li>Relaciones interpersonales.</li>
              </ul>
            </li>
            <li> <span class="sub">Servicios:</span> apoyo legal, asesoramiento en      ayudas-material-educación, información, punto de encuentro de familias, investigación, campañas...
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita">ESPACIOS PARA PROMOVER LAS RELACIONES SOCIALES</span><br>
          <ul>
            <li> <span class="sub">En el domicilio:</span>
              <ul>
                <li>Adecuarlo para que la persona se pueda desenvolver con facilidad.</li>
                <li>Comedor o salón para recibir amistades: ordenado y con espacio.</li>
                <li>Si la persona está encamada: habitación bien distribuida y ordenada.</li>
              </ul>
            </li>
            <li> <span class="sub">En un centro residencial o unidad convivencial:</span>
              <ul>
                <li>Planificar los espacios en función de las actividades y momentos en los que se lleven éstas a cabo.</li>
                <li><span class="sub">Objetivo:</span> incentivar la relación social a diferentes niveles: gran grupo, grupo reducido, íntimo, de pareja...</li>
                <li>Disponer de espacios tranquilos y apartados para recibir visitas.</li>
                <li>Organizar los espacios comunes de relación, especialmente la sala de estar, estableciendo distintos espacios diferenciados: mesas redondas, sofás con disposición adecuada, butacas en rincones...</li>
                <li>Espacios amplios y mobiliario adecuado para actividades como fiestas, bailes, conmemoraciones...</li>
                <li>Organizar actividades en las que puedan participar vecinos del barrio.</li>
                <li>Acceso de los usuarios a los recursos del barrio: estudiar los recursos, seleccionar personas que pueden usarlos, proporcionar los recursos necesarios (personal, transporte...)</li>
              </ul>
            </li>
          </ul>
        </li><br>
        <li> <span class="negrita">RECURSOS DE ACOMPAÑAMIENTO</span><br>
        El acompañamiento supone estar con una persona e ir con ella con la finalidad de facilitar su integración en el grupo.
        <ul>
          <li> <span class="sub">En la atención domiciliaria:</span>
            <ul><li>Compras, visitas a familiares o amistades, asistencia a instalaciones recreativas, socioculturales..., participación en clubes o asociaciones, paseos por el barrio.</li></ul>
          </li>
          <li> <span class="sub">En el centro residencial:</span>
            <ul>
              <li>El acompañamiento será necesario en la mayoría de las actividades, pero para fomentar las hhss será fundamental en actividades de animación sociocultural y dinamización de grupos.</li>
              <li>Importante en el <span class="negrita">periodo de adaptación</span>.</li>
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
