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
  <div id="escena-interaccion">
    <div id="guia" class="row">
      <div id="escena-1" class="container center-vertical">
        <h1 class="center">Bienvenido !!</h1>
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
      </div>
      <div id="escena-2" class="container center-vertical">

        <div id="contenedor-guia-1" class="center">
          <div class="center-vertical center">
            <h1>Hola</h1>
            <p>Me llamo pengui y sere tu guia</p>
          </div>
          <img id="personaje-guia" src="img/foca.svg" width="200px" alt="">
        </div>
      </div>
      <div id="escena-3" class="container center-vertical">
        <h2>escena 3</h2>
      </div>
      <div id="footer-info">
        <button id="btn-atras" type="button" class="btn btn-outline-dark btn-sm">Atras</button>
        <button id="btn-siguiente" type="button" class="btn btn-outline-dark btn-sm">Siguiente</button>
      </div>
    </div>


    <div id="rotacion" hidden>
      <div id="buttons-y">
        <button id="ymas">y+</button>
        <div id="buttons-x">
          <button id="xmas">x+</button>
          <div id="buttons-z">
            <button id="zmas">z+</button>
            <button id="zmenos">z-</button>
          </div>
          <button id="xmenos">x-</button>
        </div>
        <button id="ymenos">y-</button>
      </div>
    </div>
    <div id="escala" hidden>
      <div id="contenedor-valor-rango">
        <output name="valor_rango" id="valor_rango">1</output>
      </div>
      <input id="escala_input" type="range" class="slider" value="1" min="1" max="10" step="1"
        oninput="valor_rango.value = escala_input.value">
    </div>
    <div id="posicion" hidden>
      <div id="contenedor-valor-posicion">
        <output name="valor_posicion" id="valor_posicion">1</output>
      </div>
      <input id="range_posicion" class="slider" type="range" min="-4" max="5" step="1" value="1"
        oninput="valor_posicion.value=range_posicion.value">
    </div>
  </div>
  <a-scene id="escenario" embedded arjs="debugUIEnabled: false;">

    <a-assets>
      <img id="textura-sol" src="texturas/2k_sun.jpg">
      <img id="textura-luna" src="texturas/luna.png">
      <img id="textura-tierra" src="texturas/tierra.jpg">

      <audio id="sonido-fondo" src="sonidos/fondo.mp3" autoplay></audio>

    </a-assets>
    <!--
    <a-sound src="#sonido-fondo" autoplay="true" position="0 0 0" volume="0.08"></a-sound>
    -->

    <a-marker preset="hiro">

      <a-entity id="escena-completa">
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

            <!--Movimiento de rotacion luna-->
            <a-entity id="rotacion-luna" rotation="-5 360 0"
              animation="property: object3D.rotation.y; to: 360; loop: true; dur: 27320; easing: linear;">

              <!--Movimiento de traslacion luna-->
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
  <script src="js/rotation-control.js"></script>
  <script src="js/scale-position-control.js"></script>
  <script src="js/anime.min.js"></script>
  <script>
    var numEscena = 1;
    var totalEscenas = 3;

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
      if (escena == 2) {
        anime({
          targets: '#contenedor-guia-1',
          translateY: -300,
          autoplay: true,
          easing: 'easeInOutSine'
        });
      }
    }
    function activarBtnAtras() {
      if (numEscena >= 2) {
        $("#btn-atras").show();
      } else {
        $("#btn-atras").hide();
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
  <script>
    var scene = document.querySelector('a-scene');
    if (window.location.hostname == "localhost") {
      scene.setAttribute('inspector', 'url: http://localhost:3333/dist/aframe-inspector.js')
    } else {
      scene.setAttribute('inspector', 'url: https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js')
    }
  </script>
</body>

</html>