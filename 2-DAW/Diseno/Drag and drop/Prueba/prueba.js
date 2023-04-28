const contenedor = document.querySelector(".contenedor");

contenedor.addEventListener("dragstart", dragstartFuncion);
contenedor.addEventListener("drag", dragFuncion);
contenedor.addEventListener("dragend", dragendFuncion);

function dragstartFuncion(e) {
  console.log("hola");
  this.style.opacity = "0.5";
}
function dragFuncion(e) {
  console.log("funciona");
  this.style.color = "gray";
  this.style.border = "3px dotted #666";
}
function dragendFuncion(e) {
  console.log("finaliza");
  this.style.backgroundColor = "red";
}
