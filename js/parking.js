
var intervalo_plaza = null;
var intervalo_ajax = null;



function cambiaColor() {
    if ($('#01').hasClass('plaza-libre') || $('#01').hasClass('intermitente1')) {
        $('#01').removeClass('plaza-libre');
        $('#01').removeClass('intermitente1');
        $('#01').addClass('intermitente2');
    } else {
        $('#01').removeClass('intermitente2');
        $('#01').addClass('intermitente1');
    }
};


function pide_datos() {
    var jqXHR = $.ajax({
        url: "json.php"
    });
    jqXHR.done(function (data) {
        console.log(data.valor);
        clearInterval(intervalo_plaza);
        if (data.valor = 1) {
            intervalo_plaza = setInterval(cambiaColor, 500);
        };
    });
}



$(function () {
        intervalo_ajax=setInterval(pide_datos,5000)
});