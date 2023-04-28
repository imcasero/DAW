let array = Array(6);
for(let i = 0 ; i < array.length; i++) {
    array[i] = 0;
}
let cont = 0
while (cont < 3) {
    let num = Math.floor(Math.random() * (6-0));
    var existe = false;
    if (array[num] === 0) {
        array[num] = '*';
        cont++;
    } else {
        existe = true;
        break;
    }
}
for (let i = 0; i < array.length; i++) {
    console.log(array[i]);
}