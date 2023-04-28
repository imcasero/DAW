let tabla = document.getElementById('tabla');
let generar = document.getElementById('generar');
let inputs = ['button', 'radio', 'checkbox', ''];
let fil = 6;
let col = 6;

generar.addEventListener('click', (e)=>{
   
    // Limpiar la tabla anterior
    while (tabla.rows.length) {
        tabla.removeChild(tabla.firstChild);
    }

    // Crear n tr
    for (let i = 0; i < fil; i++) {
        let tr = document.createElement('tr');

        // Crear n td's e inputs/nada
        for (let j = 0; j < col; j++) {
            let rnd = aleatorio(0,3);
            let td = document.createElement('td');
            let input = document.createElement('input');
            let label;
            
            // Poner un value al boton            
            if (inputs[rnd] == 'button')
                input.setAttribute("value", "Soy un botón");

            if (inputs[rnd] == 'radio'){
                label = document.createElement('label');
                label.textContent = "Radio";
            }
            

            if (inputs[rnd] == 'checkbox') {
                label = document.createElement('label');
                label.textContent = "Checkbox";
            }
        
            // Poner tipo al input, si no ha salido el indice de vacío ''
            if (inputs[rnd] != '') {
                input.setAttribute("type", inputs[rnd]);
                if (label != undefined)
                    td.appendChild(label);

                td.appendChild(input);
            }

            tr.appendChild(td);
        }

        tabla.appendChild(tr);
    }
    
    
});
