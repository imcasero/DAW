let clickPass = document.getElementById("passInput");
let tabla_pass = document.getElementById("div-tabla");
let dniInput = document.getElementById("dniInput");
const tabla = document.createElement("table");
const url_imgx =
  "http://127.0.0.1/2-DAW/Diseno/pepes_home/media/img/icon/x-mark-24.png";
const url_imgb =
  "http://127.0.0.1/2-DAW/Diseno/pepes_home/media/img/icon/check-mark-3-24.png";
const url_imgo =
  "http://127.0.0.1/2-DAW/Diseno/pepes_home/media/img/icon/circle-outline-24.png";
var contclick = 0;
var teclado;
var pass_global = new Array();
var possicion_ast = new Array();
var cadena_error = "Este campo es obligatorio";
let cadena_cont = "";
//let div_asteriscos = document.getElementById("passInput");
let tabla_asteriscos = document.getElementById("tablaAst"); // tabla con los asteriscos para cambiar valor
function validar() {
  let validacion = false;
  console.log("=======================Validacion=====================");
  let dniValue = document.getElementById("dniInput").value;
  var pattern = /^\d{8}[a-zA-Z]$/;
  if (pattern.test(dniValue)) {
    console.log("La dirección de email " + dniValue + " es correcta.");
    dniInput.classList.remove("error");
    validacion = true;
  } else {
    dniInput.classList.add("error");
    console.log("La dirección de email es incorrecta.");
    validacion = false;
  }
  if (validacion) {
    let boton = document.getElementById("submit");
    boton.removeAttribute("hidden");
  } else {
    let div_validacion = document.getElementById("validacion");
    div_validacion.appendChild(p);
    p.classList.add("error");
    p.textContent = cadena_error;
  }
}
clickPass.addEventListener("click", tablaRandom);
function tablaRandom() {
  console.log("=======================tabla=====================");
  if (document.getElementById("tablaDatos") === null) {
    var array = [];
    while (array.length < 10) {
      var numeroAleatorio = Math.floor(Math.random() * (10 - 0));
      var existe = false;
      for (var i = 0; i < array.length; i++) {
        if (array[i] == numeroAleatorio) {
          existe = true;
          break;
        }
      }
      if (!existe) {
        array[array.length] = numeroAleatorio;
      }
    }
    for (let index = 0; index < array.length; index++) {
      console.log("random en posicion " + index + " : " + array[index]);
    }

    tabla.setAttribute("id", "tablaDatos");
    let indice = 0;
    //seleccionar un padre (tabla_pass)
    //agregamos el nodo
    tabla_pass.appendChild(tabla);
    const tablaDatos = document.getElementById("tablaDatos");
    for (let i = 0; i < 2; i++) {
      var tr = document.createElement("tr");
      tablaDatos.appendChild(tr);
      for (let j = 0; j < 5; j++) {
        var td = document.createElement("td");
        tr.appendChild(td);
        td.textContent = array[indice];
        indice++;
      }
    }
    tablaAst(array);
  }
}
function tablaAst(password) {
  console.log("=======================Astericos=====================");
  let array = Array(6);
  //relleno el array
  for (let i = 0; i < array.length; i++) {
    array[i] = " ";
  }
  let cont = 0;
  while (cont < 3) {
    let num = Math.floor(Math.random() * (6 - 0));
    var existe = false;
    console.log("Contador: " + cont);

    if (array[num] === " ") {
      array[num] = "*";
      possicion_ast.push(num);
      cont++;
    } else {
      existe = true;
    }
  }

  for (let i = 0; i < array.length; i++) {
    console.log("Array asterisco " + i + " : " + array[i]);
    if (array[i] === " ") {
      cadena_cont += i + " ";
    }
  }
  let td_asteriscos = tabla_asteriscos.getElementsByTagName("td");
  let long_asteriscos = td_asteriscos.length;
  for (let i = 0; i < long_asteriscos; i++) {
    if (array[i] === " ") {
      td_asteriscos[i].innerHTML = '<img src="' + url_imgo + '"> </img>';
    } else {
      td_asteriscos[i].innerHTML = '<img src="' + url_imgx + '"> </img>';
    }
  }
  clickPass.removeEventListener("click", tablaRandom);
  recogerTeclado(password);
}
function recogerTeclado(password) {
  console.log("=======================Contraseña=====================");
  teclado = document.getElementById("tablaDatos");

  teclado.addEventListener("click", (e) => {
    if (contclick < 3) {
      if ((e.target.nodeName = "TD")) {
        console.log("Contador " + contclick);
        let tablaAst = document.getElementById("tablaAst");
        let array_tabla = tablaAst.getElementsByTagName("td");
        for (var i = 0; i < array_tabla.length; i++) {
          //para cambiar el contenido
          var td = array_tabla[i];
          var img = td.querySelector("img");
          var src = img.src;
          console.log(src);
          if (src == url_imgo) {
            console.log("dentro");
            array_tabla[i].innerHTML = '<img src="' + url_imgb + '"> </img>';
            break;
          }
        }
        contclick++;
        let celda = e.target;
        let col = parseInt(celda.cellIndex);
        let fil = parseInt(celda.parentNode.rowIndex);
        let tecl = document.getElementById("tablaAst");

        if (fil > 0) {
          // console.log("La celda es: " + col, fil);
          console.log("Valor de la contrasña " + password[5 + col]);
          pass_global.push(password[5 + col].toString());
          if (pass_global.length < 3) {
          } else {
            insertarHidden();
            clickPass.removeEventListener("click", tablaRandom);
          }
        } else {
          // console.log("La celda es: " + col, fil);
          console.log("Valor de la contrasña " + password[col]);
          pass_global.push(password[col].toString());
          if (pass_global.length < 3) {
          } else {
            insertarHidden();
            clickPass.removeEventListener("click", tablaRandom);
          }
        }
      }
    }
  });

  //LE PASO A LA FUNCION LOS DOS ARGUMENTOS QUE UTILIZARE PARA CMABIAR EL VALOR DE LOS HIDDEN
}

function insertarHidden() {
  console.log("=======================Hidden=====================");
  possicion_ast.sort(function (a, b) {
    return a - b;
  });
  console.log("Entra en funcion insertarHidden");
  //FOR PARA DEBUG

  for (let i = 0; i < possicion_ast.length; i++) {
    console.log("La posicion del asterisco " + i + " es " + possicion_ast[i]);
  }
  for (let i = 0; i < pass_global.length; i++) {
    console.log("El digito " + i + " es " + pass_global[i]);
  }
  let ast_string = possicion_ast.toString();
  let pass_string = pass_global.toString();
  console.log("asteriscos " + ast_string + " pass " + pass_string);
  let hiddenPass = document.getElementById("hiddenPass");
  let hiddenAst = document.getElementById("hiddenAst");
  let hiddenPos = document.getElementById("hiddenPos");

  hiddenPass.value = pass_string;
  hiddenAst.value = ast_string;
  hiddenPos.value = cadena_cont;

  console.log("La posicion de la contraseña es " + hiddenPos.value);
  console.log("El valor de la contraseña es " + hiddenPass.value);
  console.log("El valor de la posicion de asterisco " + hiddenAst.value);
}
function borrar(event) {
  //Funcion para borrar
  event.preventDefault();
  let tablaAst = document.getElementById("tablaAst");
  let array_tabla = tablaAst.getElementsByTagName("td");
  for (var i = array_tabla.length - 1; i >= 0; i--) {
    var td = array_tabla[i];
    console.log(td);
    var img = td.querySelector("img");
    var src = img.src;
    console.log(src);
    if (src == url_imgb) {
      console.log("dentro");
      array_tabla[i].innerHTML = '<img src="' + url_imgo + '"> </img>';
      pass_global.pop();
      contclick--;
      break;
    }
  }
}
