function imc() {
	var height = parseFloat(document.data.altura.value);
	var weight = parseFloat(document.data.peso.value);
	
	if (document.data.altura.value.length == 0 || isNaN(height)){ //isNaN diz nao numero
    	document.getElementById("alert1").style.display = "block";
    	document.data.altura.classList.add("is-invalid");
    	document.getElementById("altura").classList.add("text-danger");
    	document.data.altura.value=""; //limpa o campo
    	document.data.altura.focus(); //focaliza o erro na janela
    	return;
    }
    //volta o status e faz o alerta sumir
    document.getElementById("alert1").style.display = "none";
    document.data.altura.classList.remove("is-invalid");
    document.data.altura.classList.add("is-valid");
    document.getElementById("altura").classList.remove("text-danger");
//----------------------------------------------------------------------------
    if (document.data.peso.value.length == 0 || isNaN(weight)){ //isNaN diz nao numero
    	document.getElementById("alert2").style.display = "block";
    	document.data.peso.classList.add("is-invalid");  
    	document.getElementById("peso").classList.add("text-danger");  	;
    	document.data.peso.value=""; //limpa o campo
    	document.data.peso.focus(); //focaliza o erro na janela
    	return;
    }
    document.getElementById("alert2").style.display = "none";
    document.data.peso.classList.remove("is-invalid");
    document.data.peso.classList.add("is-valid"); 
    document.getElementById("peso").classList.remove("text-danger");


    var height_quad = height*height;
	var imc_result = weight/height_quad;
	document.data.resultado.value = imc_result;
}

$(document).ready(function(){

	$("#calcular").click(function(){
		if($("#resultado").val() < "18.5"){		

			$("p").append("<p class="lead">Seu IMC é <b>$("#resultado").val()</b>.</p>");
			


		}
		else if("18.5" <= $("#resultado").val() <= "24.9"){

		}
		else if("25.0" <= $("#resultado").val() <= "29.9"){

		}
		else if("30.0" <= $("#resultado").val() <= "34.9"){

		}
		else if("35.0" <= $("#resultado").val() <= "39.9"){

		}
		else($("#resultado").val() > "40.0"){

		}
	});





});