window.onload = function () {
  vamos_a_cargar_la_tabla();
};

function vamos_a_cargar_la_tabla() {
  alert("vamos a cargar la tabla");

  peticion_http_tabla = inicializa_xhr();
  peticion_http_tabla.onreadystatechange = procesaRespuesta_tabla;
  peticion_http_tabla.open("POST", "./tabla.php", true);
  peticion_http_tabla.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  peticion_http_tabla.send();
}

function procesaRespuesta_tabla() {
  console.log("readyState " + peticion_http_tabla.readyState);
  console.log("status " + peticion_http_tabla.status);

  if (peticion_http_tabla.readyState == 4) {
    if (peticion_http_tabla.status == 200) {
      var respuesta = peticion_http_tabla.responseText;
      document.getElementById("tabla").innerHTML = respuesta;
      // alert(peticion_http_tabla.responseXML);
    }
  }
}

function inicializa_xhr() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}

// a partir de aqui el código de hacer click en la tabla

// function verevento(e) {
//   var cell = e.target || window.event.srcElement;
//   icolumna = parseInt(cell.cellIndex);
//   ifila = parseInt(cell.parentNode.rowIndex);
//   console.log(" --- " + cell);
//   console.log("fila " + ifila + " columna " + icolumna);
//   if (icolumna == 6) {
//     aniadir_fila();
//   }
//   // var celda_elegida = document.getElementById("tabla").rows[fila].cells[0].innerHTML;
//   // document.getElementById("tabla").innerHTML += "<tr><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td><td><img src='./imagenes/guardar_32x32.png'><img src='./imagenes/borrar_32x32.png'></td></tr>";
// }
// function aniadir_fila() {
//   alert("añadir");
// }

// function borrar_fila(r) {
//   var i = r.parentNode.parentNode.rowIndex;
//   document.getElementById("tabla").deleteRow(i);
// }

// function guardar_fila(e) {
//   var celda = e.currentTarget;
//   var columna = parseInt(celda.cellIndex);
//   var fila = parseInt(celda.parentNode.rowIndex);
//   var celda_elegida =
//     document.getElementById("tabla").rows[fila].cells[0].innerHTML;
// }

// function asignarEventos() {
//   if (document.readyState == "complete") {
//     document.getElementById("tabla").addEventListener("click", verevento);
//   }
// }

// document.addEventListener("readystatechange", asignarEventos, false);
