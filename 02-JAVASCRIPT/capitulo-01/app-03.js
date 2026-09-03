/* ⚡⚡ TEMPLATE STRINGS ⚡⚡ */
let nombre = 'Pepito';
let apellido = "García";
let edad = 26;

// 💥 Concatenar
let saludo = 'Hola mi nombre y apelllido es ' + nombre + ' ' + apellido + ' y tengo ' + edad + ' años';
console.log(saludo);

let saludoT = `Hola, soy ${nombre} ${apellido} y tengo ${edad} años`;
console.log(saludoT);

const bloque = document.querySelector('.bloque');

const plantilla = `
    <h1 class="contenedor">
        ${saludoT}
    </h1>
`;

// console.log(plantilla);
bloque.innerHTML = plantilla;