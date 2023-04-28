
var columnas = [" ", "PAIS", "YA", "ABC", "MUNDO", "DIARIO-16", "METRO", "TOTAL"];
var filas    = [" ", "15-20", "21-30", "31-50", "51-60", "+60", "MUJER", "HOMBRE", "TOTAL"];

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



// if (filas == 0){
			// if(contadorColumna==7){
				// document.write("<th style='background-color:red'>"+nombres[contadorColumna]+"</th>");
			// }
			// else{
				// document.write("<th style='background-color:cyan'>"+nombres[contadorColumna]+"</th>");
			// }
			// contadorColumna++;
		// }
		// else if(columnas == 0){
			// if(contadorFila==7){
				// document.write("<th style='background-color:red'>"+edadesReales[contadorFila]+"</th>");
			// }
			// else{
				// document.write("<th style='background-color:cyan'>"+edadesReales[contadorFila]+"</th>");
			// }
			// contadorFila++;
		// }
		// else if(filas == 8 && columnas != 7){
			// document.write("<th style='background-color:red'>"+sumaPeriodico[columnas]+"</th>");
		// }
		// else if(columnas == 7 && filas != 8 ){
			// document.write("<th style='background-color:red'>"+sumaEdad[filas]+"</th>");
		// }
		// else if(filas == 8 && columnas == 7){
			// document.write("<th style='background-color:orange'>"+contadortotal+"</th>");
		// }
		// else{
			// document.write("<th>"+periodicos[filas][columnas]+"</th>");
			// if (filas<6){
				// sumaPeriodico[columnas] += periodicos[filas][columnas];
			// }
			// sumaEdad[filas] += periodicos[filas][columnas];
		// }
	// }
	









// for (var y=0; y<periodicos.length;y++){
	// for (var z=0;z<periodicos.length;z++){
		// periodicos[y][z]=0;
	// }
// }







// // // // var nombres = ["", "EL PAIS", "YA", "ABC", "MUNDO", "DIARIO 16", "METRO","TOTAL"];
// // // // var edades = [0, 20, 30, 50, 60, 99];
// // // // var contadoredad = 0;
// // // // var contadornombre = 0;
// // // // var contadortotal = 0;
// // // // var nombre = prompt("Introduzca el nombre del periódico").toUpperCase();

// // // // while(nombre != 0){
	// // // // var edad = prompt("Introduzca su edad");
	// // // // while (edad>edades[contadoredad] && contadoredad<edades.length){
		// // // // contadoredad++;
		// // // // if (edad<15){
			// // // // alert("La edad introducida no es correcta, por favor introduzca una edad de mínimo 15 años");
			// // // // edad = prompt("Introduzca su edad");
			// // // // contadoredad=0;
		// // // // }
	// // // // }
	// // // // while (contadornombre < nombres.length && nombre != nombres[contadornombre]){
		// // // // contadornombre++;
		// // // // if (contadornombre > 7){
			// // // // alert("El nombre de periódico introducido no es correcto, por favor introduzca un periódico correcto");
			// // // // nombre = prompt("Introduzca el nombre del periódico").toUpperCase();
			// // // // contadornombre=0;
		// // // // }
	// // // // }
	
	// // // // periodicos[contadoredad][contadornombre]++;
	// // // // contadortotal++;
	
	// // // // var sexo = prompt("Introduzca su sexo").toUpperCase();
	// // // // if (sexo == "MUJER"){
		// // // // contadoredad=6;
	// // // // }
	// // // // if (sexo == "HOMBRE"){
		// // // // contadoredad=7;
	// // // // }
	// // // // periodicos[contadoredad][contadornombre]++;
	
	// // // // nombre = prompt("Introduzca el nombre del periódico").toUpperCase();
	// // // // contadoredad = 0;
	// // // // contadornombre = 0;
// // // // }

// var contadorFila=0;
// var contadorColumna=0;
// var edadesReales = ["15-20", "21-30", "31-50", "51-60", "60+", "MUJER", "HOMBRE", ""];

// var sumaPeriodico = new Array(9);
// for (var a = 0; a<sumaPeriodico.length;a++){
	// sumaPeriodico[a]=0;
// }

// var sumaEdad = new Array(8);
// for (var b = 0; b<sumaEdad.length;b++){
	// sumaEdad[b]=0;
// }





//var datos = "Ya, MUJER, 34; PAIS, HOMBRE, 38; MUNDO, MUJER, 98........";

//Declarara los arrays de cabeceras con N elementos