

$(function () {
var canvas = document.getElementById('myCanvas'),
    context = canvas.getContext('2d');

var $myCanvas = $('#myCanvas');

// rectangle shape
$myCanvas.drawRect({
    fillStyle: 'steelblue',
    strokeStyle: 'blue',
    strokeWidth: 4,
    x: 150, y: 100,
    fromCenter: false,
    width: 160,
    height: 100
});
$myCanvas.drawRect({
    fillStyle: 'steelblue',
    strokeStyle: 'blue',
    strokeWidth: 4,
    x: 310, y: 100,
    fromCenter: false,
    width: 160,
    height: 100
});

$("#boton-1").on("click",function () {
    
})




})