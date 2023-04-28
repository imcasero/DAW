let select_cont = document.getElementById("select_cont");
let select_cuidades = document.getElementById("select_cuidades");
let div_ciu = document.getElementById("ciu");
let region;
select_cont.addEventListener("click", (e) => {
  let cont = select_cont.value;
  console.log(cont);
  cargando(cont);
});
function cargando(cont) {
  peticion_http_prueba = new XMLHttpRequest();
  peticion_http_prueba.onreadystatechange = procesaRespuesta;
  peticion_http_prueba.open("POST", "./index2.php", true);
  peticion_http_prueba.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  peticion_http_prueba.send("select=" + cont);
}
function procesaRespuesta() {
  console.log("readyState " + peticion_http_prueba.readyState);
  console.log("status " + peticion_http_prueba.status);
  if (peticion_http_prueba.readyState == 4) {
    if (peticion_http_prueba.status == 200) {
      var respuesta = peticion_http_prueba.responseText;
      procesa(respuesta);
    }
  }
}
function procesa(respuesta) {
  let array_cui = respuesta.split(",");
  let options = document.getElementsByTagName("option");
  if (options.length !== 0) {
    select_cuidades.innerHTML = "";
  }
  for (let i = 0; i < array_cui.length; i++) {
    inserta(array_cui[i]);
  }
}
function inserta(ciudad) {
  let op = document.createElement("option");
  op.value = ciudad;
  op.text = ciudad;
  select_cuidades.appendChild(op);
}
select_cuidades.addEventListener("click", (e) => {
  let c = e.currentTarget.value;
  let r = document.getElementById("select_cont").value;
  let reg = r.toUpperCase();
  let cad = c + "(" + reg + ")";
  let parra = document.getElementsByTagName("p");
  if (parra.length !== 0) {
    div_ciu.innerHTML = "";
  }
  let p = document.createElement("p");
  p.textContent = cad;
  div_ciu.appendChild(p);
});
