const contenedor = document.getElementById("contenedor");
const array_descrip = [
  "1DAW",
  "2DAW",
  "1DAM",
  "2DAM",
  "1FPB",
  "2FPB",
  "1SMR",
  "2SMR",
];
let tabla = document.createElement("table");
tabla.id = "tabla";
for (let i = 0; i < 10; i++) {
  let tr = document.createElement("tr");
  for (let j = 0; j < 10; j++) {
    let td = document.createElement("td");
    tr.appendChild(td);
  }
  tabla.appendChild(tr);
}
let button = document.createElement("button");
button.id = "boton";
button.textContent = "AÑADIR ELEMENTOS";
contenedor.appendChild(button);
contenedor.appendChild(tabla);

button.addEventListener("click", (e) => {
  for (let i = 0; i < tabla.rows.length; i++) {
    const fila = tabla.rows[i];
    for (let j = 0; j < fila.cells.length; j++) {
      const celda = fila.cells[j];
      const randomIndex = Math.floor(Math.random() * array_descrip.length);
      celda.textContent = array_descrip[randomIndex];
    }
  }
});
tabla.addEventListener("click", (e) => {
  let celda_target = e.target;
  let contenido = celda_target.textContent;
  console.log(contenido);
  if (contenido != " ") {
    for (let i = 0; i < tabla.rows.length; i++) {
      const fila = tabla.rows[i];
      for (let j = 0; j < fila.cells.length; j++) {
        let celda = fila.cells[j];
        if (celda.textContent != contenido) {
          celda.textContent = " ";
        }
      }
    }
  } else {
    alert("Recarge los datos primero");
  }
});
