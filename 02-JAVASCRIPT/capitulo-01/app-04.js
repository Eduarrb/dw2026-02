/* ARRAYS Y OBJECTS */

let mixto = ['John', 'Ryo', 5698.23, true, '123456789'];
// console.log(mixto);
// console.log(mixto[0]);
// console.log(mixto.length);


// LOOPS
// contador, condicion, adision o sustracion
//      contador = 0 |  0 < 5 == true | contador = contador + 1 => 1
//      contador = 1 |  1 < 5 == true | => 2

// for(let contador = 0; contador < 5; contador++) {
//     console.log(personajes[contador]);
// }

// for(let i = 0; i < personajes.length; i++) {
//     console.log(personajes[i]);
// }

let personajes = ['Mario', 'Joshi', 'Luigui', 'Cuppa', 'Honguito'];
console.log(personajes);

let plantilla = ''; // => <h2>Mario</h2><h2>Joshi</h2>

// console.log(plantilla);

for (let i = 0; i < personajes.length; i++) {
    // console.log(personajes[i]);
    // plantilla = plantilla + `<h2>${personajes[i]}<h2>`;
    plantilla += `<h2>${personajes[i]}</h2>`;
}

console.log(plantilla);

const bloque = document.querySelector('.bloque');
bloque.innerHTML = plantilla;

// let nombre = 'Eduardo';
// // console.log(nombre);
// nombre = 'Carlos';
// // console.log(nombre);