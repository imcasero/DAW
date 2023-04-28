
/* ahora hacemos un proceso ajax y pedimos por php a la base de datos las filas y columnasaa
a procesar en la encuesta
se devuelden en forma de cadena separadas por ; cada uno de los elementos
*/
var cadena = "ROJO;VERDE;AZUL;NEGRO;MARRÓN;AMARILLO;MAGENTA;MORADO;total_15-20;21-30;31-50;51-60;60-99;total";




var datos_procesar = cadena.split("_");

datos_columnas = datos_procesar[0];
datos_filas = datos_procesar[1];

var columnas = datos_procesar[0].split(";");
var filas = datos_procesar[1].split(";");

// insertar elemento vacio al principio de cada array

console.log ("el array filas es  " + filas);

console.log ("el array columnas es " + columnas);

// var filas    = [" ", "15-20", "21-30", "31-50", "51-60", "+60", "MUJER", "HOMBRE", "TOTAL"];
// var columnas = [" ", "PAIS", "YA", "ABC", "MUNDO", "DIARIO-16", "METRO", "TOTAL"];






var indice_filas = filas.length;
var indice_columnas = columnas.length;

var encuesta = new Array(indice_filas);


for (var x=0; x<indice_filas;x++){
	encuesta[x]=new Array(indice_columnas);
}

console.log ("el array original es antes de ceros " + encuesta);

for (var y=0; y<indice_filas;y++){
	for (var z=0;z<indice_columnas;z++){
		encuesta[y][z]=0;
	}
}

console.log ("el numero de filas es de  " + indice_filas);
console.log ("el numero de columnas es de " + indice_columnas);
console.log ("el numero total de elementos del array es " + (indice_columnas*indice_filas));


for (var x=0; x<indice_filas;x++){
	
	console.log ("la fila " + x +  " tiene como contenido " + encuesta[x]);
}


var cadena_encuestados = "ROJO,15-20;VERDE,15-20;AZUL,21-30;NEGRO,21-30;MARRÓN,21-30;AMARILLO,21-30;ROJO,21-30;MORADO,15-20";

var encuestados = cadena_encuestados.split(";");
console.log ("el numero de encuestados es de " + encuestados.length);

//for{i
		//var campos_de_cada_encuestado = encuestados[i].split(",");
		// campos_de_cada_encuestado[0] se que tenemos el color
		// campos_de_cada_encuestado[1] se que tenemos la edad
	    
		
		// en este punto es donde hay que hacer el modogllon de abajo

					var i=0;
					while ((campos_de_cada_encuestado[0]!=columnas[i])&&(i<columnas.length)) {
						console.log ("comparamos " + campos_de_cada_encuestado[0] + " con " + columnas[i]);
						i++;
					}
					var indice_columnas=i;
					console.log ("valor de la i "+ i + " Si la i vale " + columnas.length + " es que el elemento no existe");


					//empieza aqui a buscar el publo
					
					var i=0;
					while ((campos_de_cada_encuestado[1]!=filas[i])&&(i<filas.length)) {
						console.log ("comparamos " + campos_de_cada_encuestado[1] + " con " + filas[i]);
						i++;
					}
					var indice_filas = i;
					console.log ("valor de la i filas "+ i + " Si la i vale " + filas.length + " es que el elemento no existe");
					
					
		
	


//desde esta linea hasta la linea 85 tenemos que hacer un proceso para leer un conjunto de encuestados.
//es decir, tenemos que hacer que estos dos procesos sirvan para mas de un encuestado

//empieza aqui a buscar el color
				
// aqui falta realizar las sumas a la matriz de resultados quye luego volcaremos a la pantalla

// hasta aqui hay que hacerlo para varios encuestados.








document.write("<table>");

 for (var j = 0; j<columnas.length;j++)
	 {
		 document.write("<th style='background-color:red'>"+columnas[j]+"</th>");
	 }
	 
	 
	 
	 
for (var i = 0; i<indice_filas-1;i++)
{
	document.write("<tr>");
	document.write("<th style='background-color:grey'>"+filas[i+1]+"</th>");
	
	for (var j = 0; j<indice_columnas-1;j++)
	{
		document.write("<td style='background-color:magenta'>"+encuesta[i][j]+"</td>");
	}
	document.write("</tr>");	
}
document.write("</table>");

