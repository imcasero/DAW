 function modificar_registro(){

	peticion_http_mod = inicializa_xhr();
	
	// solamente si vamos a enviar datos
    query_string_alta = montar_cadena();
	
	peticion_http_mod.onreadystatechange = procesaRespuesta3;
	
    peticion_http_mod.open("POST", "./php/update_registro.php", true);
	
	peticion_http_mod.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	
    peticion_http_mod.send(query_string_alta);
	
	
}

function procesaRespuesta3() 
{
	console.log ("readyState " + peticion_http_mod.readyState);
	console.log ("status " + peticion_http_mod.status);
	
	
   if(peticion_http_mod.readyState == 4) 
	{
		if(peticion_http_mod.status == 200) 
		{
			var respuesta = peticion_http_mod.responseText;
			document.getElementById("tabla").innerHTML = respuesta;
			// alert(peticion_http_mod.responseXML);
		
		}
	}
}


function montar_cadena()
{
div_errores.innerHTML='';
//$("#errores").slideUp(0);
var ds_j = document.getElementById("seleccionds").value;
var clave1_j = document.getElementById("clave1").value;

var query_string_alta_cadena = "usuario=" + encodeURIComponent(ds_j) +
        "&clave=" + encodeURIComponent(clave1_j) +
		"&nocache=";
		
		return query_string_alta_cadena;
		
		
}



function inicializa_xhr() {
  if(window.XMLHttpRequest) {
    return new XMLHttpRequest(); 
  }
  else if(window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
	}
} 


// peticion ajax por jquery

$.post("./php/validar_tutor_grupo.php",
				{
				 consulta_p : consulta1,
				},
			function(data,status){
			   // alert("Data: " + data + "\nStatus: " + status);
				tutor_del_grupo = quitarespacios(data);
						
				});