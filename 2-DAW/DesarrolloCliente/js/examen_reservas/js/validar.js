const hora = document.getElementById("hora");
const fecha = document.getElementById("fecha");
const comensales = document.getElementById("comensales");
const boton_env = document.getElementById("enviar");
let inter = true;
let cont = 0;
const array = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
fecha.addEventListener("keydown", (e) => {
  cont++;
  if (cont == 5 || cont == 7) {
    fecha.value += "/";
  }
});
function validar(event) {
  event.preventDefault();
  validar_hora();
  validar_fecha();
  validar_comensales();
  mostrar_enviar();
}
function validar_hora() {
  let h = hora.value;
  if (h.length == 5 && h.charAt(2) == ":") {
    console.log("correcto");
    let arr = h.split(":");
    if (arr[0] <= 23 && arr[0] >= 0 && arr[1] % 15 == 0) {
      console.log("correcto");
      hora.classList.remove("error");
    } else {
      console.log("incorrecto");
      alert(
        "El formato de la hora debe ser 00:00 y estar comprendido entre 00:00 y 23:45 en margenes de 15 min"
      );
      hora.classList.add("error");
      inter = false;
    }
  } else {
    console.log("incorrecto");
    hora.classList.add("error");
    alert("La hora no es valida");
    inter = false;
  }
}
function validar_fecha() {
  let f = fecha.value;
  if (f.length == 10 && f.charAt(4) == "/" && f.charAt(7) == "/") {
    let date = new Date();
    let currentYear = date.getFullYear();
    let currentMonth = date.getMonth();
    let currentDay = date.getDate();
    let arr = f.split("/");
    let arr_erroes = new Array();
    if (arr[0] < currentYear) {
      fecha.classList.add("error");
      alert("El año establecido es anterior al actual");
      arr_erroes.push(false);
    } else if (arr[1] < currentMonth) {
      fecha.classList.add("error");
      alert("El mes establecido es anterior al actual");
      arr_erroes.push(false);
    } else if (arr[1] != currentMonth) {
      if (arr[2] > array[currentMonth - 1]) {
        fecha.classList.add("error");
        alert("El dia establecido es inexintente en el mes");
        arr_erroes.push(false);
      }
    } else {
      if (arr[2] < currentDay) {
        fecha.classList.add("error");
        alert("El dia establecido es anterior al actual");
        arr_erroes.push(false);
      }
    }

    if (arr_erroes.length != 0) {
      fecha.classList.add("error");
      inter = false;
    } else {
      fecha.classList.remove("error");
    }
  } else {
    fecha.classList.add("error");
    alert(
      "La fecha no es valida" + f.length + " " + f.charAt(4) + " " + f.charAt(6)
    );
  }
}
function validar_comensales() {
  if (comensales.value > 0 && comensales.value < 11) {
    comensales.classList.remove("error");
  } else {
    comensales.classList.add("error");
    alert("Los comensales deben estar comprendidos entre 1 y 10");
    inter = false;
  }
}
function mostrar_enviar() {
  if (inter) {
    boton_env.removeAttribute("hidden");
  } else {
    inter = true;
  }
}
