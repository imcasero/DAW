let num;
let numAux;
let resul;
numAux = prompt("Introduzca numeros del 1 al 9");
if (numAux > 0 && numAux < 10) {
  num = toString(numAux);
  resul = resul.concat("", numAux);
  console.log(resul);
}
