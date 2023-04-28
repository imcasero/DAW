window.onload = function () {
  alert("cargando");
  ajax();
};
function ajax() {
  url = "../php/anular.php";
  xml = new XMLHttpRequest(); //Creamos el objeto XMLhttprequest
  xml.onreadystatechange = procesaRespuesta; //Asignamos a los cambios de la solicitud la funcion
  xml.open("POST", url, true); //asignamos el metodo que queramos usar y la url
  xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //para a la hora de enviar daros enviarlos como form
  xml.send(); //enviamos la peticion
}
function procesaRespuesta() {
  //no importa donde este ya que se va a ejecutar cada vez que cambie la solicitud
  //similar a un vento change
  console.log("readyState " + xml.readyState); //para que la consulta sea correcta debe ser 4
  console.log("status " + xml.status); // y aqui debe ser 200
  //podemos sustituir la variable xml por this.
  if (xml.readyState == 4 && xml.status == 200) {
    //Si la peticion se ha completado
    var respuesta = xml.responseText; // asignamo a la variable respues la respuesta de la consola
    mostrar_datos(respuesta);
  }
}
function mostrar_datos(r) {}
