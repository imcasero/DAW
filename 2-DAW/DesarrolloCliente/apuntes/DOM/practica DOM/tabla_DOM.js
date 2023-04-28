 function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex; 
  while (0 !== currentIndex) {														//FUNCION PARA DESORDENAR ARRAY (SHUFFLE)
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}




 
	//GENERANDO TABLA DINAMICAMENTE
	
    const contenedor = document.getElementById("tabla");
 
    const tabla = document.createElement("table");
    tabla.setAttribute("border", "1");
 
	for(var i = 0; i<=3; i++){
		tr = document.createElement("tr");
		tr.setAttribute("id", "columna_"+i);
		for(var j =0; j<=4;j++){			
	 
		 
			td = document.createElement("td");
			tdText = document.createTextNode("Valor"+j);			//PREGUNTAR A PACO COMO SE PONEN IDS DINAMICOS, USANDO EL CONTADOR DEL FOR SE REPITEN
			td.appendChild(tdText);
			tr.appendChild(td);
		}
		
	 
		tabla.appendChild(tr);
		
	
	}
		contenedor.appendChild(tabla);
 
	 //ESCRIBIR NUMEROS EN TECLADO
	
	var cosas_html=["<input type='text'  class='input_text'  value='Texto'>", "<input type='checkbox' class='check' value='Checkbox'>","<input type='email' class='email' value='ofidanica@gmail.com'>"," ","<input type='submit' value='Submit'>"];
	

		
		var celdas=document.getElementsByTagName("td");
		
		var cont_celdas=0;
		
		for(var cont=0;cont<=3;cont++){
			
			shuffle(cosas_html);
			
			for(var i = 0; i<5; i++){
				celdas[cont_celdas].innerHTML=cosas_html[i];
				 cont_celdas++;
			}
	
		}
	

		
	  

	
	
	
