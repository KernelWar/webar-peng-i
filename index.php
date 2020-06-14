<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="img/foca.svg" />
  <link href="https://pengui.herokuapp.com/img/foca.svg" rel="image_src" />
  <meta property="og:title" content="Pengüi" />
  <meta property="og:description" content="En algún lugar, algo increíble está esperando a ser descubierto." />
  <meta property="og:image" content="img/fondo.jpg" />
  <meta property="og:image:alt" content="Has click :)" />
  <title>WebAR</title>
  <script src="js/jquery.js"></script>
  <style>
    #mensaje-espera {
      display: table;
      height: 100%;
      width: 100%;
      position: absolute;
      left: 0;
      right: 0;
      z-index: 100;
    }

    #contenido-espera {
      display: table-cell;
      vertical-align: middle;
    }
  </style>

  <script src="aframe/aframe.min.js"></script>
  <script src="aframe/aframe-ar.js"></script>

  <script src="aframe/aframe-layout-component.min.js"></script>
  <script src="aframe/aframe-spe-particles-component.js"></script>
  <script src="js/gesture-detector.js"></script>
  <script src="js/gestures.handler.js"></script>



  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script>
    document.oncontextmenu = function () { return false }
    if (window.location.protocol == "http:") {
      window.location = window.location.href.replace('http:', 'https:');
    }
    if (document.addEventListener) {

      document.addEventListener("DOMContentLoaded", function () {
        $("#mensaje-espera").hide();
        $("#base").show();
      }, false);
    }

  </script>

</head>

<body>
  <div id="mensaje-espera">
    <div id="contenido-espera" class="text-center">
      <div class="spinner-border" role="status">
        <span class="sr-only">Cargando...</span>
      </div>
    </div>
  </div>

  <div id="base" class="container-fluid">
    <div id="escenario" class="row">
      <div id="escena-1" class="container center-vertical">
        <h2 class="center">Bienvenido !!</h2>
        <p>
          Estas apunto de iniciar una experiencia
          online de realidad aumentada. Esta apliación fue echa para motivos
          didacticos.
        </p>

        <p class="aling-right">
          <em>
            “En algún lugar, algo increíble está esperando a ser descubierto.”.
          </em>
        <div class="aling-right"><strong><em>Carl Sagan</em></strong></div>
        </p>
        <div class="center">
          <h2>Antes de empezar</h2>

          <div id="img-intrucciones" class="row">
            <div class="col-md-4">
              <p>
                Es importante que le permitas a la aplicación usar tu camara para poder
                realizar esta experiencia, si no lo has echo recarga la apliación.
              </p>
              <p>
                Esta imagen se llama <strong>"marcador"</strong>.
              </p>
              <img src="img/hiro.png" class="img-fluid" width="200" alt="">

            </div>
            <div class="col-md-4">
              <p>
                Si ves el mensaje <strong>"Con tu cámara enfoca el marcador" </strong> has lo siguiente:
              </p>
              <img src="img/1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
              <img src="img/2.jpg" class="img-fluid" alt="" style="height: 286.867px;">
            </div>
          </div>
          <p>Puedes descargar el marcador en el siguiente link <a target="_blank"
              href="https://stemkoski.github.io/AR-Examples/markers/hiro.png">(Has clic aquí)</a>. Tambíen puedes usar
            la imagen digital desde un celular o computadora.</p>

          <p>Para obtener una mejor experiencia recomendamos usar Firefox. Comparte el link con tus amigos :).</p>
          <img src="https://www.mozilla.org/media/protocol/img/logos/firefox/browser/logo-word-hor-sm.5622edbdf02d.png"
            width="100px" alt="">
          <br><br>
        </div>

      </div>
      <div id="escena-2" class="center-vertical">
        <div id="contenedor-guia-1" class="center">
          <div class="center-vertical center">
            <h1>Hola</h1>
            <p>Me llamo pengüi y sere tu guia</p>
          </div>
          <img id="personaje-guia" src="img/foca.svg" width="200px" alt="">
        </div>
      </div>
      <div id="escena-3" class="container center-vertical">
        <div id="contenedor-guia-2" class="center">
          <img id="personaje-guia-2" src="img/foca.svg" width="200" alt="Mi nombre es pengüi">
        </div>
        <div class="center">
          <h2>¿Qué es una orbita?</h2>
        </div>
        <div>
          <p>
            Curva que describe un cuerpo alrededor de otro en el espacio,
            especialmente un planeta, cometa, satélite etc., como consecuencia
            de la acción de la fuerza de gravedad
          </p>
          <div class="center">
            <img src="img/orbita.gif" width="300" alt="">
          </div>
          <p id="intruccion-1" class="center">
            A continucación <strong>enfoca el marcador para ver una orbita</strong>
          </p>
        </div>
      </div>
      <div id="escena-4" class="center-vertical">

        <div id="contenedor-guia-4">
          <img id="personaje-guia-4" src="img/foca graduacion.svg" alt="">
        </div>
        <p id="info-escena-4" class="center">
          Sabias que la tierra gira alrededor del sol y
          tarda 365 días y 6 horas en dar una vuelta
        </p>
      </div>
      <div id="escena-5" class="container center-vertical">
        <div id="info-5" class="center">
          <h3>
            ¿Qué es el movimiento de rotación?
          </h3>
          <p>
            Cuando un cuerpo, como el planeta Tierra,
            gira sobre su propio eje, que permanece
            fijo.
          </p>
        </div>
        <audio id="camara-flash" src="sonidos/flash.mp3"></audio>
        <div class="center">
          <img src="img/rotacion.gif" width="280" alt="">
        </div>
        <div id="contenedor-guia-5" class="aling-left">
          <img id="personaje-guia-5" src="img/foca.svg" width="180" alt="">
        </div>
      </div>
      <div id="escena-6" class="container center-vertical">
        <div class="center">
          <h3>¿Qué es el movimiento de traslación?</h3>
        </div>
        <p class="center">
          Se refiere al movimiento que hace un planeta al girar en su órbita alrededor del Sol.
        </p>
        <div class="center">
          <img src="img/traslacion.webp" width="280" alt="">
        </div>
        <br>
        <br>
        <p id="intruccion-1" class="center">
          A continucación <strong>enfoca el marcador, te sorprenderá</strong>
        </p>
      </div>
      <div id="escena-7" class="container center-vertical">
        <p id="info-escena-7" class="center">
          El Sol rota una vez cada 27 días en su ecuador,
          pero sólo una vez cada 31 días en sus polos.
        </p>
      </div>
      <div id="escena-8" class="container center-vertical">
        <div class="center">
          <h3>La Luna de pengüi</h3><br>
          <img src="img/luna.svg" width="70" alt="">
        </div>
        <p>
          La Luna completa un giro sobre su eje aproximadamente cada 28 días,
          que es el tiempo exacto que tarda en realizar su movimiento de
          traslación alrededor de la Tierra.
        </p>
        <p>
          Por lo tanto, los periodos de rotación y translación son idénticos.
          Si la Luna no girara sobre su eje, la cara opuesta a la Tierra durante
          la luna nueva sería la cara que veríamos durante la luna llena, no habría una cara oculta.
        </p>
        <p id="intruccion-1" class="center">
          A continuación <strong> podras interacturar con todos los conocimientos aprendidos.</strong>
        </p>
      </div>
    </div>
    <div id="btn-control-escenario">
      <button id="btn-atras" type="button" class="btn btn-outline-dark btn-sm btn-footer">Atras</button>
      <button id="btn-siguiente" type="button" class="btn btn-outline-dark  btn-sm btn-footer">Siguiente</button>
    </div>
  </div>
  <div id="instrucciones-marcador">
    <p>Con tu cámara enfoca el marcador</p>
  </div>
  <div id="intruccion-final" class="center">
    <p>Puedes mover el objeto con tus dedos</p>
  </div>
  <a-scene id="aframe-escenario" gesture-detector arjs="debugUIEnabled: false;" embedded
    renderer="logarithmicDepthBuffer: true;" vr-mode-ui="enabled: false" gesture-detector>

    <a-assets>
      <img id="textura-sol" src="texturas/2k_sun.jpg">
      <img id="textura-luna" src="texturas/luna.png">
      <img id="textura-tierra" src="texturas/tierra.jpg">

      <audio id="sonido-fondo" src="sonidos/fondo.mp3" autoplay></audio>

    </a-assets>

    <a-sound src="#sonido-fondo" autoplay="true" position="0 0 0" volume="0.08"></a-sound>


    <a-marker emitevents="true" id="marcador" preset="hiro" raycaster="objects: .clickable" emitevents="true"
      cursor="fuse: false; rayOrigin: mouse;">

      <a-entity id="escena-completa" gesture-handler>
        <a-entity id="grupo-asteroides" scale="0.2 0.2 0.2" position="0 1.4 0">
          <a-entity animation="property: object3D.rotation.y; to: 360 -260 10; loop: true; dur: 30000; easing: linear"
            rotation="0 124.534 0" position="2 0 -1.717">
            <a-entity gltf-model="objetos/asteroide.gltf" scale="0.02 0.02 0.02" position="2.41429 2 0.07751">
            </a-entity>
          </a-entity>
          <a-entity animation="property: object3D.rotation.y; to: 360 -100 10; loop: true; dur: 40000; easing: linear"
            rotation="0 3.137 0" position="1 2 0">
            <a-entity gltf-model="objetos/asteroide.gltf" scale="0.02 0.02 0.02" position="9 -2 -1">
            </a-entity>
          </a-entity>

          <a-entity animation="property: object3D.rotation.y; to: -360 -60 -10; loop: true; dur: 35500; easing: linear"
            rotation="0 3.137 0" position="-1 0 -1.717">
            <a-entity gltf-model="objetos/asteroide.gltf" scale="0.02 0.02 0.02" position="2.41429 3 0.07751">
            </a-entity>
          </a-entity>

          <a-entity animation="property: object3D.rotation.y; to: 360 60 -110; loop: true; dur: 43200; easing: linear"
            rotation="0 3.137 0" position="-3 0 -2">
            <a-entity gltf-model="objetos/asteroide.gltf" scale="0.02 0.02 0.02" position="2.41429 3 0.07751">
            </a-entity>

          </a-entity>
        </a-entity>


        <a-entity id="grupo-sol"
          animation="property: object3D.rotation.y; to: 360; loop: true; dur: 27000; easing: linear;">
          <a-entity id="sol" geometry="primitive: sphere" scale="0.5 0.5 0.5"
            material="src: #textura-sol; alphaTest: 1; flatShading: true; repeat: 2.1 1; shader: flat; color: #ffffff; height: 10; wireframeLinewidth: 1"
            position="0 1 0" spe-particles__sol-effect="
            texture: texturas/explosion_sheet.png;
            textureFrames: 5 5; 
            blending: additive; 
            activeMultiplier: 1; 
            angle: 190;
            direction: backward; 
            distribution: SPHERE; 
            maxAge: 1;
            maxAgeSpread: 2;
            positionOffset: 0 0 0;
            positionDistribution: SPHERE;
            randomizePosition: true; 
            radius: 1;
            radiusScale: 0.5 0.9 0.5;
            velocitySpread: 1 1 1; 
            velocityDistribution: SPHERE;
            accelerationDistribution: SPHERE; 
            drag: 1; 
            size: 10">
          </a-entity>

          <a-entity id="efecto-luz-sol"
            light="color: #ffffff; decay: 2.2; intensity: 2.39; type: point; castShadow: true" visible=""
            position="0 1 0"></a-entity>

        </a-entity>

        <a-entity id="orbita-tierra"
          geometry="primitive: ring; radiusInner: 1.4; radiusOuter: 1.39; segmentsTheta: 1000" rotation="90 0 0"
          position="0 1 0" material="shader:  flat;  opacity:  0.22;"></a-entity>

        <a-entity id="grupo-tierra" rotation="0 0 0"
          animation="property: rotation; to: 0 360 0; loop: true; dur: 365000; easing: linear;">
          <a-entity id="grupo" position="1.4 1 0">
            <a-entity id="tierra"
              animation="easing:  linear; dur: 1000; loop: true; property:  object3D.rotation.y; to:  360"
              geometry="primitive: sphere" scale="0.090 0.090 0.090" material="src: #textura-tierra" position="0 0 0">
            </a-entity>


            <a-entity id="rotacion-luna" rotation="-5 360 0"
              animation="property: object3D.rotation.y; to: 360; loop: true; dur: 27320; easing: linear;">


              <a-entity id="traslacion-luna" rotation="0 0 0"
                animation="property: object3D.rotation.y; to: 360; loop: true; dur: 27320; easing: linear;">
                <a-entity id="luna" geometry="primitive: sphere" scale="0.03 0.03 0.03" material="src: #textura-luna"
                  position="0.2 0 0"></a-entity>
              </a-entity>
            </a-entity>
          </a-entity>
        </a-entity>
      </a-entity>
    </a-marker>
    <a-entity camera></a-entity>
  </a-scene>
  <script>
    $("#base").hide();
  </script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="js/anime.min.js"></script>
  <script src="js/logica-escenario.js"></script>
</body>

</html>