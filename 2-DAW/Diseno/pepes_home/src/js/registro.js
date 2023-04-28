//VALIDACION DE FORMULARIO
const form = document.createElement("form");
let validacion = true;
function recogerDatos(event) {
  event.preventDefault();
  validacion = true;
  console.log("------------------RECOGIDA DE DATOS------------------");
  let email = document.getElementById("emailInput").value;
  console.log("el email es: " + email);
  let emailInput = document.getElementById("emailInput");
  let pass = document.getElementById("passInput").value;
  let passInput = document.getElementById("passInput");
  console.log("la contraseña es: " + pass);
  let name = document.getElementById("nameInput").value;
  let nameInput = document.getElementById("nameInput");
  console.log("el nombre es: " + name);
  let surname = document.getElementById("surnameInput").value;
  let surnameInput = document.getElementById("surnameInput");
  console.log("el apellido es: " + surname);
  let address = document.getElementById("addressInput").value;
  let addressInput = document.getElementById("addressInput");
  console.log("el address es: " + address);
  let date = document.getElementById("datepicker").value;
  let dateInput = document.getElementById("datepicker");
  console.log("el date es: " + date);
  let dni = document.getElementById("dniInput").value;
  let dniInput = document.getElementById("dniInput");
  console.log("el DNI es: " + dni);
  let tel = document.getElementById("telInput").value;
  let telInput = document.getElementById("telInput");
  console.log("el DNI es: " + dni);
  let check = document.getElementById("checkTerms").checked;
  let checkInput = document.getElementById("checkTerms");
  let divTerms = document.getElementById("div-terms");
  console.log("El check es: " + check);

  console.log("El div es :" + divTerms);
  console.log("------------------VALIDACION------------------");
  validarEmail(email);
  validarContrasena(pass);
  validarName(name);
  validarSurname(surname);
  validarAddress(address);
  validarCheck(check, divTerms);
  validarTel(tel);
  validarDNI(dniInput);
  validarFin(validacion, form);
}
function validarEmail(emailValue) {
  emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
  if (emailRegex.test(emailValue)) {
    console.log("La dirección de email " + emailValue + " es correcta.");
    emailInput.classList.remove("error");
  } else {
    emailInput.classList.add("error");
    console.log("La dirección de email es incorrecta.");
    validacion = false;
  }
}
function validarContrasena(passwordValue) {
  var pattern = /^[0-9]{6}$/;
  if (!pattern.test(passwordValue)) {
    passInput.classList.add("error");
    validacion = false;
  } else {
    passInput.classList.remove("error");
  }
}
function validarName(nameValue) {
  if (isNaN(nameValue) && nameValue.length < 25) {
    console.log("Nombre valido");
    nameInput.classList.remove("error");
  } else {
    console.log("Nombre no valido");
    nameInput.classList.add("error");
    validacion = false;
  }
}
function validarSurname(surnameValue) {
  if (isNaN(surnameValue) && surnameValue.length < 25) {
    console.log("Apellido valido");
    surnameInput.classList.remove("error");
  } else {
    console.log("Apellido no valido");
    surnameInput.classList.add("error");
    validacion = false;
  }
}
function validarAddress(address) {
  if (isNaN(address)) {
    console.log("Direccion valida");
    addressInput.classList.remove("error");
  } else {
    console.log("Direccion no valida");
    addressInput.classList.add("error");
    validacion = false;
  }
}
function validarTel(tel) {
  var pattern = /^(6|7)[0-9]{8}$/;
  if (pattern.test(tel)) {
    console.log("telefono valido");
    telInput.classList.remove("error");
  } else {
    console.log("telefono no valida");
    telInput.classList.add("error");
    validacion = false;
  }
}
function validarDNI(dniInput) {
  var pattern = /^\d{8}[a-zA-Z]$/;
  var dni = dniInput.value;
  if (pattern.test(dni)) {
    // Obtener la letra del DNI
    var letter = dni.charAt(dni.length - 1).toUpperCase();
    // Obtener el número del DNI
    var number = dni.substr(0, dni.length - 1);
    // Calcular la letra correcta del DNI
    var correctLetter = "TRWAGMYFPDXBNJZSQVHLCKE"[number % 23];
    // Comparar la letra obtenida con la letra correcta
    if (letter === correctLetter) {
      dniInput.classList.remove("error");
    } else {
      validacion = false;
      dniInput.classList.add("error");
    }
  } else {
    validacion = false;
    dniInput.classList.add("error");
  }
}
function validarCheck(check, divTerms) {
  if (check) {
    console.log("Los terminos han sido aceptados");
    divTerms.classList.remove("error");
  } else {
    console.log("Los terminos no han sido aceptados");
    divTerms.classList.add("error");
    validacion = false;
  }
}
function validarFin(validacion) {
  if (validacion == false) {
    console.log("No se ha validado");
    alert("ERROR EN LOS DATOS");
  } else {
    console.log("validacion completada");
    mostrarsubmit();
  }
}
function mostrarsubmit() {
  let div_buttons = document.getElementById("buttons");
  let submitBtn = document.createElement("button");
  let botones = div_buttons.getElementsByTagName("button");
  if (botones.length > 1) {
  } else{
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-outline-dark");
    submitBtn.innerText = "Sign up";
    div_buttons.appendChild(submitBtn);
  }
}
