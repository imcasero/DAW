let resul;

window.onload = function () {
  ajax();
};
function ajax() {
  const loadingGif = document.getElementById("loading-gif");
  loadingGif.style.display = "block";
  peticion_http_prueba = new XMLHttpRequest();
  peticion_http_prueba.onreadystatechange = procesaRespuesta;
  peticion_http_prueba.open("POST", "./../php/menu.php", true);
  peticion_http_prueba.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  peticion_http_prueba.send();
}
function procesaRespuesta() {
  console.log("readyState " + peticion_http_prueba.readyState);
  console.log("status " + peticion_http_prueba.status);

  if (peticion_http_prueba.readyState == 4) {
    if (peticion_http_prueba.status == 200) {
      resul = peticion_http_prueba.responseText;
      setTimeout(() => {
        const gif = document.getElementById("loading-gif");
        console.log(gif);
        gif.style.display = "none";
        mostrar();
      }, 5000);
    }
  }
}
function mostrar() {
  const contenedor_carta = document.getElementById("contenedor_carta");

  // Crea una tabla vacía
  const table = document.createElement("table");
  const addButton = document.createElement("button");
  addButton.id = "add";
  addButton.textContent = "Add";
  addButton.setAttribute("onclick", "añadir(event)");

  table.id = "carta";

  // Crea una fila para la cabecera
  const headerRow = document.createElement("tr");

  // Crea las celdas de la cabecera
  const codPlatoHeader = document.createElement("th");
  codPlatoHeader.textContent = "Codigo Menu";
  headerRow.appendChild(codPlatoHeader);

  const nameHeader = document.createElement("th");
  nameHeader.textContent = "Precio del menú";
  headerRow.appendChild(nameHeader);

  const descriptionHeader = document.createElement("th");
  descriptionHeader.textContent = "Menú";
  headerRow.appendChild(descriptionHeader);

  const editHeader = document.createElement("th");
  editHeader.textContent = "Mostrar";
  headerRow.appendChild(editHeader);

  // Agrega la fila de la cabecera a la tabla
  table.appendChild(headerRow);

  // Separa los datos recibidos en un array
  let dataArray = resul.split("_");

  // Recorre cada fila del array
  for (let i = 0; i < dataArray.length - 1; i++) {
    // Crea una fila de la tabla
    const tableRow = document.createElement("tr");

    // Separa las celdas de la fila
    let cells = dataArray[i].split("-");

    // Recorre cada celda de la fila
    for (let j = 0; j < cells.length; j++) {
      // Crea una celda de la tabla
      const tableCell = document.createElement("td");
      tableCell.textContent = cells[j];

      // Agrega la celda a la fila
      tableRow.appendChild(tableCell);
    }
    //creo una celda con el icono

    // Crea una celda para el botón "editar"
    const editCell = document.createElement("td");
    const editButton = document.createElement("button");
    editButton.classList.add("eye");
    editCell.appendChild(editButton);
    tableRow.appendChild(editCell);
    // Agrega la fila a la tablas
    const gif = document.getElementById("loading-gif");
    gif.hidden = true;
    table.appendChild(tableRow);
  }

  // Agrega la tabla al contenedor especificado
  contenedor_carta.appendChild(addButton);
  contenedor_carta.appendChild(table);
  agregarEventos();
}
function agregarEventos() {
  const tabla_event = document.getElementById("carta");
  tabla_event.addEventListener("click", (e) => {
    let dato = e.target;
    if (dato.classList == "eye") {
      let tr = dato.parentNode.parentNode;
      let tdContenido = dato.parentNode.parentNode.firstChild.textContent;
      const pathname = location.pathname;
      const filename = pathname.substring(pathname.lastIndexOf("/") + 1);
      tdContenido += "-" + filename;
      console.log(tdContenido);
      envio_ajax("../php/tabla.php", tdContenido);
    }
  });
}
function envio_ajax(fichero, contenido) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", fichero, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
      let datos = this.responseText;
      tabla_platos(datos);
    }
  };
  xhr.send("contenido=" + contenido);
}
function tabla_platos(datos) {
  let contenedor_carta = document.getElementById("contenedor_vista");
  const table = document.createElement("table");
  const addButton = document.createElement("button");
  addButton.id = "add";
  addButton.textContent = "Add plato";
  addButton.setAttribute("onclick", "añadir_plato(event)");

  table.id = "vista";
  const headerRow = document.createElement("tr");

  // Crea las celdas de la cabecera
  const codPlatoHeader = document.createElement("th");
  codPlatoHeader.textContent = "Codigo Plato";
  headerRow.appendChild(codPlatoHeader);

  const nombreHeader = document.createElement("th");
  nombreHeader.textContent = "Nombre";
  headerRow.appendChild(nombreHeader);

  const nameHeader = document.createElement("th");
  nameHeader.textContent = "Descripcion";
  headerRow.appendChild(nameHeader);

  const descriptionHeader = document.createElement("th");
  descriptionHeader.textContent = "Tipo";
  headerRow.appendChild(descriptionHeader);

  // Crea una celda para la cabecera "Borrar"
  const deleteHeader = document.createElement("th");
  deleteHeader.textContent = "Borrar";
  headerRow.appendChild(deleteHeader);
  // Agrega la fila de la cabecera a la tabla
  table.appendChild(headerRow);

  let dataArray = datos.split("_");
  for (let i = 0; i < dataArray.length; i++) {
    // Crea una fila de la tabla
    const tableRow = document.createElement("tr");

    // Separa las celdas de la fila
    let cells = dataArray[i].split("-");

    // Recorre cada celda de la fila
    for (let j = 0; j < cells.length; j++) {
      // Crea una celda de la tabla
      const tableCell = document.createElement("td");
      tableCell.textContent = cells[j];

      // Agrega la celda a la fila
      tableRow.appendChild(tableCell);
    }

    // Crea una celda para el botón "borrar"
    const deleteCell = document.createElement("td");
    const deleteButton = document.createElement("button");
    deleteButton.classList.add("delete");
    deleteCell.appendChild(deleteButton);
    tableRow.appendChild(deleteCell);
    // Agrega la fila a la tabla
    table.appendChild(tableRow);
  }

  // Agrega la tabla al contenedor especificado
  contenedor_carta.appendChild(addButton);
  contenedor_carta.appendChild(table);
}
