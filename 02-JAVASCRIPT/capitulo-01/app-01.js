/*
    JAVASCRIPT - VANILLA

    - Lenguaje de programación
    - Se ejecuta del lado del cliente o del navegador
    - ESCMAScript 2015 "LET Y CONST" 💥💥 VAR
    - JS no es de tipado alto
    - JS se basa todo en objetos
        let usuario =  {
            dni: 123456789,
            nombre: 'Juan',
            // metodos
            correr: function() {
                console.log('Estoy corriendo');
            }
        }
        usuario.dni => 123456789
        usuario.correr()

    - JS es keySensitive 
        var usuarioNuevo = 'Juan'
        usuarionuevo
    
    - JS puede manipular el DOM (Document Object Model)
    - En JS no es necesario terminar la liena del código con punto y coma
*/

// ⚡⚡01 TIPOS DE DATOS⚡⚡
/*
    1. STRINGS (CADENAS DE TEXTO)
*/

let nombre = "Joe";
const apellido = 'Doe';

console.log(nombre);
console.log(apellido);

nombre = 'José';
console.log(nombre);
// 💥💥💥 NO se puede cambiar el valor de una constante
// apellido = 'Smith';

// Solo una propiedad
console.log(nombre.length);
// tenemos varios metodos
console.log(nombre.toUpperCase());

console.log(nombre[0]);

// 0   1   2   3
// J   O   S   E
console.log(nombre[3])

let parrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa amet ab, repellendus sequi qui ipsam incidunt ad aliquid mollitia quas veritatis sapiente eos obcaecati temporibus nesciunt commodi quo alias atque?'

console.log(parrafo[parrafo.length - 1]);

const dni = '123456789'
const num = 123456789;

console.log(dni);
console.log(num);



