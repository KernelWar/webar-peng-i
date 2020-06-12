var aframe = document.querySelector('a-scene');
var escena = aframe.querySelector('#escena-completa');


var POSITION_V = {
    x: 0,
    y: 0,
    z: 0
};


$("#range_posicion").on("input change", function (event) {
    var y = event.target.value;
    POSITION_V.y = y;
    escena.setAttribute('position', POSITION_V);
});

var SCALE_V = {
    x: 0,
    y: 0,
    z: 0
};


$("#escala_input").on("input change", function (event) {
    var scale = event.target.value;
    SCALE_V.x = scale;
    SCALE_V.y = scale;
    SCALE_V.z = scale;
    escena.setAttribute('scale', SCALE_V);
});
