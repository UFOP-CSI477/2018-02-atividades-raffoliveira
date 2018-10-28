var height;
var weight;
var imc_result;
var weight_min;
var weight_max;
var control;
var text_message;

function imc() {

    height = parseFloat(document.data.altura.value);
    weight = parseFloat(document.data.peso.value);
    control = false;

    if (document.data.altura.value.length == 0 || isNaN(height)) { //isNaN diz nao numero
        document.getElementById("alert1").style.display = "block";
        document.data.altura.classList.add("is-invalid");
        document.getElementById("altura").classList.add("text-danger");
        document.data.altura.value = ""; //limpa o campo
        document.data.altura.focus(); //focaliza o erro na janela
        control = true;
    } else {
        //volta o status e faz o alerta sumir
        document.getElementById("alert1").style.display = "none";
        document.data.altura.classList.remove("is-invalid");
        document.data.altura.classList.add("is-valid");
        document.getElementById("altura").classList.remove("text-danger");

    }

    if (document.data.peso.value.length == 0 || isNaN(weight)) { //isNaN diz nao numero
        document.getElementById("alert2").style.display = "block";
        document.data.peso.classList.add("is-invalid");
        document.getElementById("peso").classList.add("text-danger");;
        document.data.peso.value = ""; //limpa o campo
        document.data.peso.focus(); //focaliza o erro na janela
        control = true;
    } else {
        document.getElementById("alert2").style.display = "none";
        document.data.peso.classList.remove("is-invalid");
        document.data.peso.classList.add("is-valid");
        document.getElementById("peso").classList.remove("text-danger");

    }

    if (control == false) {

        imc_result = weight / (height * height);

        document.getElementById("formIMC").style.display = "none";
        document.getElementById("information").style.display = "none";

        text_message = document.createTextNode("Seu IMC é " + imc_result.toFixed(2));
        document.getElementById("resultIMC").appendChild(text_message);

        document.getElementById("result_IMC").style.display = "flex";

        weight_min = 18.5 * Math.pow(height, 2);
        weight_max = 24.9 * Math.pow(height, 2);

        if (imc_result < 18.5) {

            $("#linha1").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);

        } else if (18.5 <= imc_result && imc_result <= 24.9) {

            $("#linha2").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);

        } else if (25.0 <= imc_result && imc_result <= 29.9) {

            $("#linha3").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);

        } else if (30.0 <= imc_result && imc_result <= 34.9) {

            $("#linha4").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);

        } else if (35.0 <= imc_result && imc_result <= 39.9) {

            $("#linha5").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);

        } else {

            $("#linha6").addClass("tr_design");
            message = document.createTextNode("Seu peso ideal está entre " + weight_min.toFixed(2) + " e " + weight_max.toFixed(2));
            document.getElementById("pesoIdealIMC").appendChild(message);
        }
    }

    return;
}