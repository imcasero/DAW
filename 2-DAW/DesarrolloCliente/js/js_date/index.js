let c = 0;
let n = 0;

d = new Date();
alert("la fecha es " + d);
c = d.getTime();

function dif() {
  d = new Date();
  n = d.getTime();

  let resul = n - c;
  console.log("los segundos en pulsar el boton son " + resul / 1000);
}
