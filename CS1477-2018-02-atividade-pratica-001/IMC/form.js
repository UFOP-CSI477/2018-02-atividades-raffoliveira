var height;
var weight;
var imc_result;

function imc(){

	height = parseFloat(document.data.altura.value);
	weight = parseFloat(document.data.peso.value);
	
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

	var imc_result = weight/(height*height);
	document.data.resultado.value = imc_result;
}







