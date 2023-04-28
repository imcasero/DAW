//CREAMOS EL ARRAY UNIDIMENSIONAL
let datos_encuestados =
  "ESPAÑA,CARNE;FRANCIA,PESCADO;ALEMANIA,VERDURAS;SUIZA,PESCADO;ALBANIA,CARNE;UCRANIA,PESCADO;NORUEGA,PESCADO";
let encuestados = datos_encuestados.split(";");
let campos = [];
let aux;
for (let i = 0; i < encuestados.length; i++) {
  //console.log(encuestados[i]);
  aux = encuestados[i].split(",");
  //console.log(aux);
  campos = campos.concat(aux);
}
for (let i = 0; i < campos.length; i++) {
  console.log(campos[i]);
}

//CREAREMOS LA TABAL DEPENDIENDO DEL ARRAY

//Primero separo según los datos por filas y columnas(pares e impares)
let arrayColaux = [];
let arrayFilaux = [];
for (let i = 1; i < campos.length; i = i + 2) {
  arrayColaux.push(campos[i]);
}
for (let i = 0; i < campos.length; i = i + 2) {
  arrayFilaux.push(campos[i]);
}
console.log(arrayColaux.length + " columnas Con duplicados");
console.log(arrayFilaux.length + " filas Con duplicados");

//Eliminos duplicados con filter
let arrayCol = arrayColaux.filter((item, index) => {
  return arrayColaux.indexOf(item) === index;
});

let numCol = arrayCol.length;
console.log("Columnas sin datos repetidos " + numCol);

let arrayFil = arrayFilaux.filter((item, index) => {
  return arrayFilaux.indexOf(item) === index;
});

let numFil = arrayFil.length;
console.log("Columnas sin datos repetidos " + numFil);

//Creo el array con los lenght
let arrayTabla = new Array(numCol + 1);
for (let index = 0; index < arrayTabla.length; index++) {
  arrayTabla[index] = new Array(numFil + 1);
}

//Compruebo los datos de los array
console.log("--------------FILAS--------------");
for (let i = 0; i < numFil; i++) {
  console.log(arrayFil[i]);
}
console.log("--------------COLUM--------------");
for (let i = 0; i < numCol; i++) {
  console.log(arrayCol[i]);
}

console.log("---------------------------------");
//Relleno las columas y las filas con los array sin duplicados

//Columnas
for (let i = 1; i < arrayTabla.length; i++) {
  arrayTabla[i] = arrayCol[i - 1];
  console.log(arrayTabla[i] + " Columnas de la tabla ya escritas");
}
console.log("---------------------------------");

for (let i = 1; i < numFil; i++) {
  arrayTabla[i][0] = arrayFil[i - 1];
  console.log(arrayTabla[1][0] + " Filas de a tabla ya escritas");
}

//relleno a 0 el resto de celdas

for (let i = 1; i < arrayTabla.length; i++) {
  for (let j = 1; j < arrayTabla[i].length; j++) {
    arrayTabla[i][j] = 0;
  }
}

document.write("<table border>");
for (i = 0; i < arrayTabla.length; i++) {
  document.write("<tr>");
  for (j = 0; j < arrayTabla[i].length; j++) {
    document.write("<td>" + arrayTabla[i][j] + "</td>");
  }
  document.write("</tr>");
}
document.write("</table>");
