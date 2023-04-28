//generar numeros aleatorios equitativos entre 0 10 y despues entre
// dos intervalos
// EJ 1
// var salida = "";
// var array_nuemeros = new Array(10);
// for (i = 0; i <= 10; i++) {
//   array_nuemeros[i] = 0;
// }

// for (i = 0; i <= 50000; i++) {
//   salida = Math.floor(Math.random() * (11 - 0));
//   array_nuemeros[salida]++;
// }

// for (i = 0; i <= 10; i++) {
//   console.log(
//     "la posicion " + i + " se repite " + array_nuemeros[i] + " veces"
//   );
// }

//EJ 2

var salida = "";

var array_nuemeros = new Array(10);

for (i = 5; i <= 10; i++) {
  array_nuemeros[i] = 0;
}
for (let index = 0; index < 10000; index++) {
  salida = Math.floor(Math.random() * (11 - 5)) + 5;
  array_nuemeros[salida]++;
}
for (i = 5; i <= 10; i++) {
  console.log(
    "la posicion " + i + " se repite " + array_nuemeros[i] + " veces"
  );
}
