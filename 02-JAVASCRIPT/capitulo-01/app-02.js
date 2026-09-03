// ⚡⚡ NUMBERS ⚡⚡
// OPERADORES MATEMATICOS, LOGICOS Y COMPARACIÓN (==, ===)
// logicos => true, false
let num1 = 4;

let num2 = 3;
let textNum = '10';

// EL SIGNO MAS "+" FUNCIONA PRA OPERACIONES MATEMÁTICAS Y CONCATENACIÓN
console.log(textNum + num1);

let nombre = 'Joe';
let apellido = 'Doe';

let completo = nombre + ' ' + apellido;
console.log(completo);

// OPERADORES MATEMÁTICOS => +, -, *, /

let suma = num1 + num2;
console.log(suma);

let resta = num2 - num1;
console.log(resta);

let multi = num1 * num2;
console.log(multi);

let div = num1 / num2;
console.log(div);

let expo = num1 ** num2;
console.log(expo);

// COMPARACIÓN Y LOGICA
/*
    SIGNOS
    < menor que
    > mayor que
    <= menor igual
    >= mayor igual
    == igualdad simple
    === igualdad estricta
    != diferente que simple
    !== diferente que estricto
*/

// logica
// comparamos condiciones
if(num1 > num2) { 
    // si es true
    // se ejecuta esta sección
    console.log('si num1 es mayor que num2')
}
else {
    // si es false
    // se ejecuta esta sección
    console.log('num1 es menor que num2')

}

let num3 = 10;
let num4 = '10';

if(num3 === num4) {
    console.log('ambos datos son iguales');
} else {
    console.log('los datos no son iguales');
}

let num5 = 1;
console.log(num5);

// num5 = num5 + 1;
num5 += 10;
console.log(num5); // 11

num5 -= 1; // => num5 = num5 - 1
console.log(num5); // 10

num5 *= 2; // => num5 = num5 * 2
console.log(num5); // 20

num5 /= 2;
console.log(num5); // 10

let num6 = 1;
console.log(num6);

// adisiona en 1
num6++; // 2
console.log(num6);

num6++; // 3
console.log(num6);

num6--; // 2
console.log(num6);

// El objeto Math


let numero = Math.random();
console.log(numero); // 0.000000000001 -> 0.999999999999
numero *= 10; // numero = numero * 10;
console.log(numero);
console.log(numero.toFixed(0)); // devuelve el redondeo pero en string

// Redondeo con Math
let nota = 10.4;
// ceil, floor, round
console.log(Math.ceil(nota)); // 11

console.log(Math.floor(nota)); // 11

console.log(Math.round(nota)); 


