<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="realidad-aumentada.png" />
  <title>WebAR</title>

  <script src="aframe/aframe.min.js"></script>
  <script src="aframe/aframe-ar.js"></script>

  <script src="aframe/aframe-layout-component.min.js"></script>
  <script src="aframe/aframe-spe-particles-component.js"></script>
  <script src="js/gesture-detector.js"></script>
  <script src="js/gestures.handler.js"></script>

  <script src="js/jquery.js"></script>

  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script>
    if (window.location.protocol == "http:") {
      window.location = window.location.href.replace('http:', 'https:');
    }
  </script>

</head>

<body>
  <div id="base" class="container-fluid">
    <div id="escenario" class="row">
      <div id="escena-1" class="container center-vertical">
        <h2 class="center">Bienvenido !!</h2>
        <p>
          Estas apunto de iniciar una experiencia
          online de realidad aumentada. Esta apliación fue echa para motivos
          didacticos.
        </p>

        <p>
          “La Tierra es un lugar más bello para nuestros ojos
          que cualquiera que conozcamos. Pero esa belleza ha
          sido esculpida por el cambio: el cambio suave, casi
          imperceptible, y el cambio repentino y violento.
          En el cosmos no hay lugar que esté a salvo del cambio.”
        <div class="aling-right"><strong>Carl Sagan</strong></div>
        </p>
        <div class="center">
          <br>
          <br><br>
          <br>
          <p>Para obtener una mejor experiencia recomendamos usar Firefox</p>
          <img src="https://www.mozilla.org/media/protocol/img/logos/firefox/browser/logo-word-hor-sm.5622edbdf02d.png"
            width="100px" alt="">
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





  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

  <script src="js/anime.min.js"></script>
  <script>

    var numEscena = 1;
    var totalEscenas = 9;

    var asteroides = document.querySelector('#grupo-asteroides');
    asteroides.setAttribute('visible', false);

    var sol = document.querySelector('#grupo-sol');
    sol.setAttribute('visible', false);

    var orbitaTierra = document.querySelector('#orbita-tierra');
    orbitaTierra.setAttribute('visible', false);


    var tierra = document.querySelector('#grupo-tierra');
    tierra.setAttribute('visible', false);


    activarEscena(1)
    $("#btn-atras").hide();

    //ESCENA 3
    $("#intruccion-1").hide();

    //ESCENA 4
    $("#info-escena-4").hide();
    $("#personaje-guia-4").hide();

    //instruccion final
    $("#intruccion-final").hide();

    $("#btn-siguiente").click(function () {
      numEscena++;

      if (numEscena <= totalEscenas) {
        activarBtnAtras();
        activarEscena(numEscena);
        controladorEscena(numEscena);
      } else {
        numEscena = totalEscenas;
      }

    });

    $("#btn-atras").click(function () {
      numEscena--;
      if (numEscena >= 1) {
        activarBtnAtras();
        activarEscena(numEscena);
        controladorEscena(numEscena);
      } else {
        numEscena == 1;
      }
    });
    function controladorEscena(escena) {
      console.log("aniamcion, ", escena)
      switch (escena) {
        case 2:
          anime({
            targets: '#contenedor-guia-1',
            translateY: -240,
            autoplay: true,
            easing: 'easeInOutSine'
          });
          break;
        case 3:
          mostrarEscenario();
          orbitaTierra.setAttribute('visible', false);
          setTimeout(function () {
            $("#intruccion-1").show(500);
          }, 2000);
          break;
        case 4:
          ocultarEscenario();
          orbitaTierra.setAttribute('visible', true);

          document.getElementById("marcador").addEventListener("markerFound", (e) => {
            $("#info-escena-4").show(1000);
            $("#personaje-guia-4").show();
            anime({
              targets: '#personaje-guia-4',
              translateX: -90,
              rotate: -50,
              autoplay: true,
              easing: 'easeInOutSine'
            });
          });
          document.getElementById("marcador").addEventListener("markerLost", (e) => {
            $("#info-escena-4").hide()
            anime({
              targets: '#personaje-guia-4',
              translateX: 0,
              rotate: -50,
              autoplay: true,
              easing: 'easeInOutSine'
            });
            $("#personaje-guia-4").hide();

          });

          break;
        case 5:
          mostrarEscenario();
          setTimeout(function () {
            anime({
              targets: '#personaje-guia-5',
              keyframes: [
                { translateY: 160 },
                { translateX: "100%" },
                {
                  translateY: (function () {
                    $("#personaje-guia-5").attr("src", "img/foca-camara.svg");
                    setTimeout(function () {
                      $("#camara-flash")[0].play();
                    }, 3600)
                    return -10;
                  })
                },
                { translateY: 160 },
                { translateX: "0%" },
                {
                  translateY: function () {
                    setTimeout(function () {
                      $("#personaje-guia-5").attr("src", "img/foca-boca.svg");
                    }, 6000)
                    return "0%";
                  }
                },
              ],
              duration: 10000,
              easing: 'easeOutElastic(1, .8)',
              loop: 2
            });

          }, 2000)
        case 6:
          mostrarEscenario()
          asteroides.setAttribute('visible', false);
          sol.setAttribute('visible', false);
          $("#info-escena-7").hide();
          break;
        case 7:
          ocultarEscenario();
          asteroides.setAttribute('visible', true);
          sol.setAttribute('visible', true);

          document.getElementById("marcador").addEventListener("markerFound", () => {
            $("#info-escena-7").show(1000);
          });
          document.getElementById("marcador").addEventListener("markerLost", () => {
            $("#info-escena-7").hide();
          });

          break;
        case 8:
          mostrarEscenario();
          break;
        case 9:
          ocultarEscenario();
          $("#intruccion-final").show(1000);
          setTimeout(function(){
            $("#intruccion-final").hide("slow");
          },6000)
          $("#base").css("display", "none");
          //$("#rotacion").show();
          tierra.setAttribute('visible', true);
          break;
      }
    }
    function ocultarEscenario() {
      $("#base").css("background", "none");
    }
    function mostrarEscenario() {
      $("#base").css("background", "rgba(0, 0, 0, 0.500)");
    }
    function activarBtnAtras() {
      if (numEscena >= 2) {
        $("#btn-atras").show();
      } else {
        $("#btn-atras").hide();
      }

      if (numEscena != 5) {
        document.getElementById("camara-flash").muted = true;
      } else {
        document.getElementById("camara-flash").muted = false;
      }

    }
    function activarEscena(escena) {
      for (let index = 0; index <= totalEscenas; index++) {
        const escenaRecorrida = $("#escena-" + index);
        if (index != escena) {
          escenaRecorrida.hide();
        } else {
          escenaRecorrida.show();
        }
      }
    }


  </script>

</body>

</html>