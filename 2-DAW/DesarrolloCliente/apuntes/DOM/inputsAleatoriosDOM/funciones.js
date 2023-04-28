/**
 * 
 * @param {number} min El número menor del rango
 * @param {number} max El numero mayor del rango
 * @return {number} El numero aleatorio entre los dos numeros de arriba
 */

function aleatorio(min, max) {
    let rnd = Math.floor(Math.random()*(max - min + 1) + min);
    return rnd;
}

/**
 * 
 * @param {numer} min El número menor del rango
 * @param {number} max El número mayor del rango
 * @param {number} cuantos La cantidad de aleatorios deseada
 * @returns {array} Los numeros del rango deseados
 */

function aleatoriosSinRepeticion(min, max, cuantos) {
    //let rnd = Math.floor(Math.random()*(max - min + 1) + min);
    let i = 0;
    let array = [];
    
    while (array.length < cuantos) {
        let rnd = Math.floor(Math.random()*(max - min + 1) + min);
    
        if (!array.includes(rnd)) {
            array.push(rnd);
            i++;
        }
    }
    return array;
}

/**
 * 
 * @param {nodo} elementoTabla Tabla HTML vacía para rellenar con datos
 * @param {array} array Contiene los datos
 */

function rellenarTabla(elementoTabla, array) {
    let k = 0;

    for (let i = 0; i < elementoTabla.rows.length; i++) {
        for (let j = 0; j < elementoTabla.rows[i].cells.length; j++) {
            elementoTabla.rows[i].cells[j].innerHTML = array[k];
            k++;
        }
    }
}