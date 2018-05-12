
var intervalo_plaza = null;
var intervalo_ajax = null;
var valor_plazas=null;


/*function cambiaColor() {
    if ($('#01').hasClass('plaza-libre') || $('#01').hasClass('intermitente1')) {
        $('#01').removeClass('plaza-libre');
        $('#01').removeClass('intermitente1');
        $('#01').addClass('intermitente2');
    } else {
        $('#01').removeClass('intermitente2');
        $('#01').addClass('intermitente1');
    }
};*/


function pide_datos() {
    var jqXHR = $.ajax({
        url: "json.php"
    });
    jqXHR.done(function (data) {
        var valor_plazas=null;
       for (i=1;i<=8;i++){
        if (data[i]=="ocupado"){

            $('#'+i).css("color","red")
        }
        else $('#'+i).css("color","green")
       }
    })
};

$(function () {
        intervalo_ajax=setInterval(pide_datos,5000)
});