altura = $(window).height();
//altura = altura - 66;
//console.log(altura);
$("#geral").css("height",altura);

$("#acesso-reserva").hide();
$("ul.bloco-barra-2 li").click(function(e){
	that = $(this).attr("rel");

	if(that == "reserva"){
		$("#reserva").show();
		$("#acesso-reserva").hide();

		$(".bloco-barra-2 li:first-child").removeClass("esconder").addClass("mostrar");
		$(".bloco-barra-2 li:last-child").removeClass("mostrar").addClass("esconder");
	}
	if(that == "acesso-reserva"){
		$("#reserva").hide();
		$("#acesso-reserva").show();

		
		/*$(this).addClass("mostrar");*/
		$(".bloco-barra-2 li:first-child").removeClass("mostrar").addClass("esconder");
		$(".bloco-barra-2 li:last-child").removeClass("esconder").addClass("mostrar");
	}

	e.preventDefault();
});