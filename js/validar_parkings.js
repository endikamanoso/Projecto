$(function(){

	$("#nombre_parking").on('change',function() {
		var parking_seleccionado=$(this).val();
		var jqxhr=$.ajax({
			url:"http://localhost/projecto/"+parking_seleccionado+".php",
			method:"get"
		});
		jqxhr.done(function(){
			$("#validar_sesion").attr("disabled",false);
		})

		jqxhr.fail(function(){
			$("#central").html("<p>El parking solicitado no está operativo actualmente</p>")
			$("#validar_sesion").attr("disabled",true);
		});
	});
});