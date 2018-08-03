
var intervalo_plaza = null;
var intervalo_ajax = null;
var valor_plazas=null;



function pide_datos() {             //creo una funcion "pide_datos" que coge los datos de json.php
    var jqXHR = $.ajax({
        url: "json.php"
    });
    jqXHR.done(function (data) {
        for (i=0;i<=7;i++){
        if (data.plazas.plaza[i].modo_plaza==1){

                $('#rollover_'+i).css({
                    "visibility":"visible"
                }).parpadear()

            }
            else $('#'+i).css({"color":"green"

            })
        }
    })
};

$.fn.parpadear = function()
{
    this.each(function parpadear()
    {
        $(this).fadeIn(500).delay(250).fadeOut(500, parpadear);
    });
}

$(function () {
   intervalo_ajax=setInterval(pide_datos,5000)

});