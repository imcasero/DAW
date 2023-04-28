let formulario = document.querySelector('form');
let inp = document.getElementById('capt');
let valores_array = '';
let btn = document.getElementById('enviar');
setInterval(cargar_img, 5000);
let inter = true;



btn.addEventListener('click', e => {
    //e.preventDefault();
    let inp_value = inp.value;
    if (inp_value === '') {
        error('Debe rellenar el registro de seguridad');
    } else {
        console.log('entrnado en comp valor');
        comp_valor(inp_value);
    }
    if(!inter){
        e.preventDefault();
    }

});
function error(string) {
    let parra = document.createElement('p');
    let existe = formulario.getElementsByTagName('p');
    if (existe.length !== 0){

    }else {
    parra.textContent = string;
    formulario.appendChild(parra);
    }
}
function cargar_img() {
    let existe = document.getElementsByTagName('img');

    if (existe.length !== 0){
        let div_img = document.getElementById('imagenes');
        div_img.innerHTML = '';
    }
    let array_img = [];
    for (let i = 0; i < 10; i++) {
       array_img[i] = crearImg(i);
    }
    valores_array = '';
    for (let i = 0; i < 4; i++) {
        let num =  Math.floor(Math.random() * array_img.length);
        console.log(array_img[num]);
        valores_array += inserta_img(array_img , num );
    }
    console.log(valores_array);
    
}
function crearImg(n){
    let img = document.createElement('img');
    img.src='../enum/img/'+n+'.jpg';
    return img;
};
function inserta_img(array_img , num ){
    let text = num.toString();
    let img = array_img[num];
    let div_img = document.getElementById('imagenes');
    img.classList.add('imagen');
    div_img.appendChild(img);   
    return text;
}

function comp_valor(inp_value){
    console.log('Dentro de comp_valor');
    let text = inp_value.toString();
    console.log(text);
    console.log(valores_array);

    if(text === valores_array){
        console.log('correcto');
        inter = true;
    }else {
        inter = false;
        error('El parametro no coincide');
    }
}
