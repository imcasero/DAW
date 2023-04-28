let dias = 7;
for (let i = 0; i < 5; i++) {
  let date = new Date();
  sumarDias(date, dias);
  dias = dias + 7;
}

function sumarDias(fecha, dias) {
  fecha.setDate(fecha.getDate() + dias);
  console.log(fecha.toLocaleDateString());
}