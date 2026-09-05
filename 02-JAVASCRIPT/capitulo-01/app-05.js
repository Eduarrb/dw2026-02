/* ⚡⚡ OBJECTS ⚡⚡ */

const persona = {
    nombre: "Joe",
    apellido: 'Smith',
    profesion: 'Programador',
    edad: 32,
    habilidades: ['php', 'mysql', 'C#', "hmtl", 'css'],
    casado: true
}

// console.log(persona);
// console.log(persona.nombre);
// console.log(persona.habilidades);

// ⚡⚡ METODOS -> FUNCIONES DENTRO DE UN OBJETO
// ⚡⚡ FUNCIONES de expresion simple o regular


function saludar() {
    // aqui va el código a ejecutarse
    console.log('hola mi nombre es Juan');
}

// saludar();

// VARIABLES GLOBALES
let num1 = 10;
let num2 = 20;

// dentro de un ambito, contexto o scope
function sumar() {
    let num1 = 5;
    // ?????? donde esta la variable num1???
    let res = num1 + num2;
    console.log(res);
}

// sumar();

// PARAMETROS Y ARGUMENTOS DE LAS FUNCIONES
//                       PARAMETROS
function multiDosNumeros (num1, num2) {
    let res = num1 * num2;
    console.log(res)
}

// PASAREMOS ARGUMENTOS
// multiDosNumeros(2, 5);
// multiDosNumeros(num1, num2);

// ⚡⚡ ARROW FUNCTIONS

const correr = (nombre) => {
    let res = `${nombre} empezó a correr`;
    console.log(res)
}

// correr("Sofia");

// const restar = (a, b) => {
//     return a - b;
// }

const restar = (a, b) => a - b;

let res = restar(4, 1);
console.log(res);
