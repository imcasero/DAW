window.onload = init();

function init() {
  const TABLA_GENERAL = document.getElementById("tabla_general");
  //creo la tabla dentro del div
  for (let i = 0; i < 8; i++) {
    let fila = document.createElement("tr"); //Tienen que estar dentro del for, si no solo creara uno
    TABLA_GENERAL.appendChild(fila);
    for (let j = 0; j < 10; j++) {
      let radio = crearInput("radio");
      let sub = crearInput("submit");
      let check = crearInput("checkbox");
      let array = new Array(radio, sub, check);
      let long = array.length;

      let num = Math.floor(Math.random() * long);
      let colum = document.createElement("td"); //creo td
      fila.appendChild(colum); //columna hija de fila
      colum.appendChild(array[num]);
    }
  }
}

function crearInput(tipo) {
  let inp = document.createElement("input");
  inp.setAttribute("type", tipo);
  return inp;
}
