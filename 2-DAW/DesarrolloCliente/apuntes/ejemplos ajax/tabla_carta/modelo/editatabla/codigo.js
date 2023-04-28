/* *******************************************************
** Código JavaScript para editar los datos de una tabla **
** JavierB Enero 2007                                   **
*********************************************************/ 

var miTabla = 'tabla'; // poner aquí el id de la tabla que queremos editar
 
// preparar la tabla para edición
function iniciarTabla() {
 	tab = document.getElementById(miTabla);
  filas = tab.getElementsByTagName('tr');
  for (i=1; fil = filas[i]; i++) {
  	celdas = fil.getElementsByTagName('td');
    for (j=1; cel = celdas[j]; j++) {
      if ((i>0 && j==celdas.length-1) || (i==filas.length-1 && j!=0)) continue; // La última columna  y la última fila no se pueden editar
      cel.onclick = function() {crearInput(this)} 
    } // end for j 
  } //end for i
  
  // añadir funcion onclick a las imágenes para borrar y añadir y ocultar las imágenes de borrar
  for (i=0; im = document.images[i]; i++) 
    if (im.alt=='añadir fila')
      im.onclick = function() {anadir(this,0)}
    else if (im.alt=='añadir columna')  
      im.onclick = function() {anadir(this,1)}
    else if (im.alt=='borrar fila') {
      im.onclick = function() {borrar(this,0)}
      im.style.visibility = 'hidden';
    }
    else if (im.alt=='borrar columna') {
      im.onclick = function() {borrar(this,1)}
      im.style.visibility = 'hidden';
    }  
} // end function

// crear input para editar datos
function crearInput(celda) {
  celda.onclick = function() {return false}
  txt = celda.innerHTML;
  celda.innerHTML = '';
  obj = celda.appendChild(document.createElement('input'));
  obj.value = txt;
  obj.focus();
  obj.onblur = function() {
    txt = this.value;
    celda.removeChild(obj);
    celda.innerHTML = txt;
    celda.onclick = function() {crearInput(celda)}
    sumar();    
  }
}

// sumar los datos de la tabla
function sumar() {
  tab = document.getElementById(miTabla);
  filas = tab.getElementsByTagName('tr');
  sum = new Array(filas.length); 
  for (i=0; i<sum.length; i++)
    sum[i]=0;
  for (i=2, tot=filas.length-1; i<tot; i++) { 
    total = 0;
    celdas = filas[i].getElementsByTagName('td');
    for (j=2, to=celdas.length-1; j<to; j++) {
      num = parseFloat(celdas[j].innerHTML);
      if (isNaN(num)) num = 0;
      total += num;
      sum[j-2] += num;
    } // end for j
    celdas[celdas.length-1].innerHTML = total;
    sum[j-2] += total;
  } // end for i
  
  subt = filas[filas.length-1].getElementsByTagName('td');
  for (i=2, tot=subt.length; i<tot; i++)
    subt[i].innerHTML = sum[i-2];
} // end function

// añadir filas o columnas
function anadir(obj,num) {
  if (num==0) { // añadir filas
  fila = obj.parentNode.parentNode;
  nuevaFila = fila.cloneNode(true);
  im = nuevaFila.getElementsByTagName('img');
  im[0].onclick = function() {anadir(this,0)}
  im[1].onclick = function() {borrar(this,0)}
  for (i=2, tot=nuevaFila.getElementsByTagName('td').length-1; i<tot; i++) {
    nuevaFila.getElementsByTagName('td')[i].onclick = function() {crearInput(this)} ;
    nuevaFila.getElementsByTagName('td')[i].innerHTML = 0;
  }
  fila.parentNode.insertBefore(nuevaFila,fila);
  } // end añadir filas
  
  else { // añadir columnas
    tab = document.getElementById(miTabla);
    cabecera = tab.getElementsByTagName('tr')[0];
    // averiguar nº de columna
    for (num=0; cel = cabecera.getElementsByTagName('td')[num]; num++)
      if (cel==obj.parentNode) break;
    for (i=0; fila = tab.getElementsByTagName('tr')[i]; i++) {
      ele = fila.getElementsByTagName('td')[num];
      nuevaColumna = ele.cloneNode(true);
      if (i==0) {
          im = nuevaColumna.getElementsByTagName('img');
          im[0].onclick = function() {anadir(this,1)}
          im[1].onclick = function() {borrar(this,1)}
       }
       else {
          nuevaColumna.innerHTML = (i==1) ? '' : 0;
          nuevaColumna.onclick = function() {crearInput(this)} ;
      }
      fila.insertBefore(nuevaColumna,ele);
    } //end for i
  } // end añadir columnas
  mostrarImagenes();
}

// borrar filas o columnas 
function borrar(obj,num) {
  if (num==0) { // borrar filas
    tab = obj.parentNode.parentNode.parentNode;
    tab.removeChild(obj.parentNode.parentNode);
  } // end borrar filas
  else { // borrar columnas
    tab = document.getElementById(miTabla);
    cabecera = tab.getElementsByTagName('tr')[0];
    // averiguar nº de columna
    for (num=0; cel = cabecera.getElementsByTagName('td')[num]; num++)
      if (cel==obj.parentNode) break;
    for (i=0; fila = tab.getElementsByTagName('tr')[i]; i++)
      fila.removeChild(fila.getElementsByTagName('td')[num]);
  }
  sumar();
  mostrarImagenes();
}

// mostrar/ocultar imagenes para borrar
function mostrarImagenes() {
  tab = document.getElementById(miTabla);
  filas = tab.getElementsByTagName('tr');
  columnas = filas[0].getElementsByTagName('td');
  numFilas = filas.length;
  numColumnas = columnas.length;
  for (i=0; im=tab.getElementsByTagName('img')[i]; i++)
    if (im.alt == 'borrar fila')
      im.style.visibility = (numFilas>5) ? 'visible' : 'hidden';
    else if (im.alt == 'borrar columna')
      im.style.visibility = (numColumnas>5) ? 'visible' : 'hidden';
}