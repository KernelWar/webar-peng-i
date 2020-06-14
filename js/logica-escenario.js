
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

