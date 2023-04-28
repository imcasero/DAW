//VARIABLES
const dropArea = document.querySelector(".drop-area");
const dragText = dropArea.querySelector("h2"); //solo selecciono dentro del area
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");
let files; //para los ficheros

//classList añade clases

//AGREGAMOS EVENTOS
button.addEventListener("click", (e) => {
  console.log("el boton funciona");
  input.click(); //Asi abrimos el explorador
});

input.addEventListener("change", (e) => {
  files = this.files;
  dropArea.classList.add("active"); //cada vez que reciba un archivo activare la clase .active
  showFiles(files);
  dropArea.classList.remove("active"); //desactivamos la clase
}); //para ver que los archivos estan cambiando

dropArea.addEventListener("dragover", (e) => {
  e.preventDefault(); //evitamos que el navegador ejecute el compotamiento prederminado del elemento
  dropArea.classList.add("active");
  dragText.textContent = "Suelta para subir los archivos";
}); //según arrastramos dentro del area

dropArea.addEventListener("dragleave", (e) => {
  e.preventDefault();
  dropArea.classList.remove("active");
  dragText.textContent = "Arratra y suelta";
}); //cuando salimos del area

dropArea.addEventListener("drop", (e) => {
  e.preventDefault();
  files = e.dataTransfer.files;
  showFiles(files);
  dropArea.classList.remove("active");
  dragText.textContent = "Arratra y suelta";
}); //cuando soltamos

function showFiles(files) {
  if (files.length === undefined) {
    //para comprobar si subo mas de un archivo
    processFile(files);
  } else {
    for (const file of files) {
      //leo cada valor como si fuera un array y almaceno en file
      processFile(file); //mando procesar cada uno de estos archivos
    }
  }
}

function processFile(file) {
  const docType = file.type; // alamacena el tipo de archivo
  const validExtension = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
  if (validExtension.includes(docType)) {
    //archivo valido
    const fileReader = new FileReader();
    const id = `file-${Math.random().toString(32).substring(7)}`; // para hacer refenerncia a cada uno de los elementos que se vayan a subir
    fileReader.addEventListener("load", (e) => {
      const fileUrl = fileReader.result; //eta es nuestra url local
      //Aqui realizaremos la inserccion de html
      const image = `
            <div id ="${id}" class="file-container">
                <img src="${fileUrl}" alt="${file.name}" width="50px">
                </div> 
                <div class="status">
                    <span>${file.name}</span>
                    <span class="status-text">
                        Loading...
                    </span>
                </<div>
            
        `;
      const html = document.querySelector("#preview").innerHTML;
      document.querySelector("#preview").innerHTML = image + html; //aqui le decimos lo que tiene que insertar
    });

    fileReader.readAsDataURL(file);
    uploadFile(file, id);
  } else {
    //archiivo no valido
    alert("Archivo no valido");
  }
}

async function uploadFile(file) {
  console.log("Aqui se conectaria con el servidor");
  //En caso de seguir aqui necesitariamos un try catch etc
}
