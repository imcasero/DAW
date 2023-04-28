function doSearch(array, target) {
  //unidimensional
  for (var i = 0; i < array.length; i++) {
    if (array[i] === target) {
      return i; // Retorna la posición donde se encontró el elemento
    }
  }
  return -1; // Retorna -1 si el elemento no se encuentra en la tabla
}
function doSearch(array, target) {
  //bidimensional
  for (var i = 0; i < array.length; i++) {
    for (var j = 0; j < array[i].length; j++) {
      if (array[i][j] === target) {
        return [i, j]; // Retorna la posición donde se encontró el elemento
      }
    }
  }
  return [-1, -1]; // Retorna [-1, -1] si el elemento no se encuentra en la matriz
}
function doSearch(array, target) {
  //bidimensional foreach
  var coords = [-1, -1]; // Inicializamos las coordenadas a [-1, -1]
  array.forEach(function (row, i) {
    row.forEach(function (element, j) {
      if (element === target) {
        coords = [i, j]; // Actualizamos las coordenadas si encontramos el elemento
      }
    });
  });
  return coords;
}
function doSearch(target) {
  var table = document.getElementById("tabla");
  var coords = [-1, -1]; // Inicializamos las coordenadas a [-1, -1]
  Array.from(table.rows).forEach(function (row, i) {
    Array.from(row.cells).forEach(function (cell, j) {
      if (cell.textContent === target) {
        coords = [i, j]; // Actualizamos las coordenadas si encontramos el elemento
      }
    });
  });
  return coords;
}
