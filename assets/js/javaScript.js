'use strict'

window.addEventListener('load', function(){
	var formulario=document.querySelector("#formulario");
	formulario.addEventListener('submit', function(e) {
		let re = true;
		var nombres = document.querySelector("#nombre").value;
		var cedula= document.querySelector("#cedula").value;
		var telefono = document.querySelector("#numeroTelefono").value;
		

		if(nombres.trim() == '' || !/^[a-zA-Z\ áéíóúñ]{3,25}$/.exec(nombres) ){
			var error = document.querySelector("#errorN");
			error.innerHTML = "Nombres invalidos";
			re = false;
		}

		if(cedula.trim() == '' || cedula<=0){
			var error = document.querySelector("#errorCl");
			error.innerHTML = "Cedula invalida";
			re = false;
		}	
		if(telefono.trim() == '' || telefono<=0){
			var error = document.querySelector("#errorTl");
			error.innerHTML = "Telefono invalido";
			re = false;
		}

		if (re == false) {
			e.preventDefault();
		}
});
	
});
