let num = "";
let aux;
for (let index = 0; index < 6; index++) {
  aux = Math.floor(Math.random() * (10 - 0));
  console.log("aux " + aux);
  aux.toString(aux); // no puedo sobrescribir el valor
  num = num.concat("", aux);
  console.log(num);
}
  

