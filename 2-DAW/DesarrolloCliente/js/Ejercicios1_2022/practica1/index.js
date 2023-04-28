var letras = "TRWAGMYFPDXBNJZSQVHLCKE";
var numeroIdentAux = prompt(
  "Introduzca el numero de su documento de identidad"
);
console.log("Sin trim el numero es :" + numeroIdentAux);
var numeroIdent = numeroIdentAux.trim();
console.log("Con trim es : " + numeroIdent);
if (numeroIdent.length < 6 || numeroIdent.length > 8) {
  alert("El numero no es valido");
  console.log(numeroIdent);
} else {
  var numeroIdentEntero = parseInt(numeroIdent);
  console.log("Solo numerico quedaria asi : " + numeroIdentEntero);
  var stringNum = toString(numeroIdentEntero);
  var long = stringNum.length;
  console.log("Y la longitud es : " + long);
  if (long < 6 || long > 8) {
    var restoNumeroIdent = parseInt(numeroIdent) % 23;
    console.log("El resto es: " + restoNumeroIdent);
    var letraCalc = letras.charAt(restoNumeroIdent);
    console.log("La letra correspondiente es : " + letraCalc);
    alert("Su letra es : " + letraCalc);
  } else {
    alert("El numero no es valido");
  }
}
