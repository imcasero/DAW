//Variables básicas
let periodicoInput;
let edadInput;
let compEdad;
let auxBucle;
let edadValida = false;
let generoValido = false;
let generoInput;
const listaPeriodicos = [
  "EL PAIS",
  "YA",
  "ABC",
  "MUNDO",
  "DIARIO-16",
  "METRO",
  "TOTAL",
]; // periodicos validos
const edades = [0, 15, 20, 30, 50, 60];
const imprimirEdades = [
  " ",
  "15-20",
  "21-30",
  "31-50",
  "51-60",
  "60+",
  "MUJER",
  "HOMBRE",
]; //Lista vertical
let periodico;
//Creo array
let arrayTablaEstadisticas = new Array(8);
for (let index = 0; index < arrayTablaEstadisticas.length; index++) {
  arrayTablaEstadisticas[index] = new Array(8);
}


//Relleno array a 0
for (let index = 1; index < arrayTablaEstadisticas.length; index++) {
  for (
    let index2 = 1;
    index2 < arrayTablaEstadisticas[index].length;
    index2++
  ) {
    arrayTablaEstadisticas[index][index2] = 0;
  }
}


//ESCRIBO LA PRIMERA FILA AL ARRAY
let i = 1;
for (let index = 0; index < listaPeriodicos.length; index++) {
  arrayTablaEstadisticas[0][i] = listaPeriodicos[i - 1];
  //console.log("La lista periodico es " + listaPeriodicos[i]);
  i++;
}


//ESCRIBO LA COLUMNA FILA AL ARRAY
i = 0;
for (let index = 0; index < imprimirEdades.length; index++) {
  arrayTablaEstadisticas[i][0] = imprimirEdades[i];
  //console.log("La lista periodico es " + imprimirEdades[i]);
  i++;
}


//RECOGO DATOS Y VALIDO
while (auxBucle != 0) {
  
  
  //RECOGO DATOS
  periodicoInput = prompt("Introduzca un periodico habitual");
  periodico = periodicoInput.toUpperCase();
  console.log("El periodico(En mayus) introducido es: " + periodico); //depuracion
  auxBucle = periodicoInput;
  let indexBucle = 0;

  
  //VALIDO
  while (
    periodico != listaPeriodicos[indexBucle] &&
    indexBucle < listaPeriodicos.length
  ) {
    indexBucle++;
  }
  if (indexBucle == listaPeriodicos.length) {
    console.log("El periodico no existe");
    alert("El periodico no es valido, pruebe con otro");
  } else {
    //solo continuare si el periodiico existe
    // console.log("El periodico existe");
    
    
    //VALIDACION EDAD
    while (!edadValida) {
      edadInput = prompt("Introduzca su edad");
      if (edadInput < 15 || edadInput > 99 || edadInput == NaN) {
        console.log("la edad " + edadInput + " no es valida");
        edadInput = false;
        alert("La edad introducida no es valida");
      } else {
        console.log("Validacion correcta");
        edadValida = true;
        console.log("La edad " + edadInput + " es una edad valida");
      }
    }
    edadValida = false;
    
    
    //VALIDACION GENERO
    while (!generoValido) {
      generoInput = prompt("Introduzca su genero (M(masculino) o F(femenino))");
      genero = generoInput.toUpperCase();
      if (genero == "M" || genero == "F") {
        console.log("El genero introducido es valido");
        generoValido = true;
      } else {
        console.log("El geero intoducido no es valido");
        generoValido = false;
      }
    }
    generoValido = false;
    
    
    //COMPARADOR EDAD
    console.log("La longitud del array de edades es: " + edades.length);
    console.log("La edad " + edades[0]);
    for (let i = 0; edadInput > edades[i]; i++) {
      compEdad = i;
    }
    // console.log("la comparacion con edad es: " + compEdad);
    // console.log(compEdad, edadInput);

    
    //RELLENO CON VALORES TOTAL DE EDAD Y DATO INTRODUCIDO
    arrayTablaEstadisticas[compEdad][indexBucle + 1]++;
    arrayTablaEstadisticas[compEdad][7]++;
    
    
    //RELLENO SEGUN GENERO
    if (genero == "M") {
      console.log("Este genero deberia ser M" +genero);
      arrayTablaEstadisticas[7][indexBucle + 1]++;
    } else {
      console.log("Este genero deberia ser F" +genero);
      arrayTablaEstadisticas[6][indexBucle + 1]++;
    }
    
    // for (let x = 0; x < arrayTablaEstadisticas.length; x++) {
    //   for (let y = 0; y < arrayTablaEstadisticas[x].length; y++) {
    //     console.log(arrayTablaEstadisticas[x][y]);
    //   }
    // }
  }
}


//IMPRIMO CON DOCUMENT.WRITE LA TABLA
document.write("<table border>");
for (i = 0; i < arrayTablaEstadisticas.length; i++) {
  document.write("<tr>");
  for (j = 0; j < arrayTablaEstadisticas[i].length; j++) {
    document.write("<td>" + arrayTablaEstadisticas[i][j] + "</td>");
  }
  document.write("</tr>");
}
document.write("</table>");
