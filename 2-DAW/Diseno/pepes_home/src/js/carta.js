window.onload = function () {
  ajax();
};
function ajax() {
  const loadingGif = document.getElementById("loading-gif");
  loadingGif.style.display = "block";
  peticion_http_prueba = new XMLHttpRequest();
  peticion_http_prueba.onreadystatechange = procesaRespuesta;
  peticion_http_prueba.open("POST", "./../php/carta.php", true);
  peticion_http_prueba.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  peticion_http_prueba.send();
}
function procesaRespuesta() {
  if (peticion_http_prueba.readyState == 4) {
    if (peticion_http_prueba.status == 200) {
      resul = peticion_http_prueba.responseText;
      setTimeout(() => {
        const loadingGif = document.getElementById("loading-gif");
        loadingGif.style.display = "none";
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
  codPlatoHeader.textContent = "Codigo Plato";
  headerRow.appendChild(codPlatoHeader);

  const nameHeader = document.createElement("th");
  nameHeader.textContent = "Nombre";
  headerRow.appendChild(nameHeader);

  const descriptionHeader = document.createElement("th");
  descriptionHeader.textContent = "Descripción";
  headerRow.appendChild(descriptionHeader);

  const descriptionAlHeader = document.createElement("th");
  descriptionAlHeader.textContent = "Alergenos";
  headerRow.appendChild(descriptionAlHeader);

  const priceHeader = document.createElement("th");
  priceHeader.textContent = "Precio Plato";
  headerRow.appendChild(priceHeader);

  const tipoHeader = document.createElement("th");
  tipoHeader.textContent = "Tipo de Producto";
  headerRow.appendChild(tipoHeader);
  const editHeader = document.createElement("th");
  editHeader.textContent = "Editar";
  headerRow.appendChild(editHeader);

  // Crea una celda para la cabecera "Borrar"
  const deleteHeader = document.createElement("th");
  deleteHeader.textContent = "Borrar";
  headerRow.appendChild(deleteHeader);

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
      if (j === 3) {
        const tableCell = document.createElement("td");
        const iconoImg = document.createElement("img");
        let alergenos = cells[j].split(",");
        if (cells[j] == "") {
          tableCell.textContent = "Sin alergenos";
        } else if (alergenos.length > 1) {
          for (let k = 0; k < alergenos.length; k++) {
            const iconoImg = document.createElement("img");
            iconoImg.classList.add("icono");
            iconoImg.src =
              "../../media/img/icon/alerg/" +
              alergenos[k].trim() +
              "-icono.png";
            tableCell.appendChild(iconoImg);
          }
          tableRow.appendChild(tableCell);
        } else {
          iconoImg.classList.add("icono");
          iconoImg.src =
            "../../media/img/icon/alerg/" + cells[j] + "-icono.png";
          tableCell.appendChild(iconoImg);
        }
        // Agrega la celda a la fila
        tableRow.appendChild(tableCell);
      } else {
        const tableCell = document.createElement("td");
        tableCell.textContent = cells[j];

        // Agrega la celda a la fila
        tableRow.appendChild(tableCell);
      }
    }
    // Crea una celda para el botón "editar"
    const editCell = document.createElement("td");
    const editButton = document.createElement("button");
    editButton.classList.add("edit");
    // const editImg = document.createElement("img");
    // editImg.src = "../../media/img/icon/edit-6-32.png";
    // editButton.appendChild(editImg);
    editCell.appendChild(editButton);
    tableRow.appendChild(editCell);

    // Crea una celda para el botón "borrar"
    const deleteCell = document.createElement("td");
    const deleteButton = document.createElement("button");
    deleteButton.classList.add("delete");
    // const trashImg = document.createElement("img");
    // trashImg.src = "../../media/img/icon/trash-9-32.png";
    // deleteButton.appendChild(trashImg);
    deleteCell.appendChild(deleteButton);
    tableRow.appendChild(deleteCell);
    // Agrega la fila a la tabla
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
    if (dato.classList == "delete") {
      let tdContenido = dato.parentNode.parentNode.firstChild.textContent;
      const pathname = location.pathname;
      const filename = pathname.substring(pathname.lastIndexOf("/") + 1);
      tdContenido += "-" + filename;
      let td = dato.parentNode;
      let tr = td.parentNode;
      envio_ajax("../php/borrar.php", tdContenido);
      tr.remove();
    }
    if (dato.classList == "edit") {
      let tr = dato.parentNode.parentNode;
      let tds = tr.children;
      for (let i = 1; i < tds.length - 2; i++) {
        //AÑADIR IF AQUI (PARA ALERGENOS , COMPROBANDO EL HIJO DEL TD)
        let tdContenido = tds[i].textContent;
        tds[i].innerHTML = `<input type="text" value="${tdContenido}">`;
      }
      tds[tds.length - 2].innerHTML = '<button class="confirm"></button>';
      dato.classList.remove("edit");
    }
    if (dato.classList == "confirm") {
      const pathname = location.pathname;
      const filename = pathname.substring(pathname.lastIndexOf("/") + 1);
      let tr = dato.parentNode.parentNode;
      let tds = tr.children;
      let datos = tds[0].textContent;
      for (let i = 1; i < tds.length - 2; i++) {
        datos += "-" + tds[i].firstChild.value;
      }
      datos += "-" + filename;
      envio_ajax("../php/editar.php", datos);

      setTimeout(() => {
        alert("Actualizando...");

        location.reload();
      }, 1000);
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
    }
  };
  xhr.send("contenido=" + contenido);
}
function añadir(e) {
  e.preventDefault();
  const tabla = document.getElementById("carta");
  let tr1 = tabla.firstChild;
  let long = tr1.children.length;
  let tr = document.createElement("tr");
  let td1 = document.createElement("td");
  td1.textContent = 0;
  tr.appendChild(td1);
  for (let i = 1; i < long - 2; i++) {
    let td = document.createElement("td");
    let input = document.createElement("input");
    td.appendChild(input);
    tr.appendChild(td);
  }
  let tdconf = document.createElement("td");
  let butonconf = document.createElement("button");
  butonconf.setAttribute("class", "confirm");
  tdconf.appendChild(butonconf);
  tr.appendChild(tdconf);
  let tdborrar = document.createElement("td");
  let butonborrar = document.createElement("button");
  butonborrar.setAttribute("class", "delete");
  tdborrar.appendChild(butonborrar);
  tr.appendChild(tdborrar);
  tabla.appendChild(tr);
}
