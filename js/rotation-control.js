
var aframe = document.querySelector('a-scene');
var escena = aframe.querySelector('#escena-completa');
var timeOut = 0;
var ROTATION_V = {
    x: 0,
    y: 0,
    z: 0
};

holdPress("#zmas");
holdPress("#zmenos");

holdPress("#xmas");
holdPress("#xmenos");

holdPress("#ymas");
holdPress("#ymenos");

function holdPress(elemento) {
    $(elemento).on("mousedown touchstart", function () {
        timeOut = setInterval(function () {
            executeFunction(elemento);
        }, 100);
    }).bind('mouseup mouseleave touchend', function () {
        clearInterval(timeOut);
        $(elemento).blur();
    });
}

function executeFunction(elemento) {
    switch (elemento) {
        case "#zmas":
            return zmas();
        case "#zmenos":
            return zmenos();
        case "#ymas":
            return ymas();
        case "#ymenos":
            return ymenos();
        case "#xmas":
            return xmas();
        case "#xmenos":
            return xmenos();
    }
}

function zmas() {
    ROTATION_V.z++;
    escena.setAttribute('rotation', ROTATION_V);
}
function zmenos() {
    ROTATION_V.z--;
    escena.setAttribute('rotation', ROTATION_V);
}
function ymas() {
    ROTATION_V.y++;
    escena.setAttribute('rotation', ROTATION_V);
}
function ymenos() {
    ROTATION_V.y--;
    escena.setAttribute('rotation', ROTATION_V);
}
function xmas() {
    ROTATION_V.x++;
    escena.setAttribute('rotation', ROTATION_V);
}
function xmenos() {
    ROTATION_V.x--;
    escena.setAttribute('rotation', ROTATION_V);
}