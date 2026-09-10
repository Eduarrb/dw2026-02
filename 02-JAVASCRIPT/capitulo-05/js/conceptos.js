// ⚡⚡ EJECUCIONES SINCRONAS Y ASINCRONAS ⚡⚡

// // 1️⃣ SINCRONO
// let num = 10;
// console.log(num);

// // asincrona

// // 2️⃣ ASINCRONO
// // JS separa un stack de ejecución 
// setInterval(function(){
//     console.log('soy un loop asincrono');
// }, 3000);

// function saludar() {
//     console.log('hola a todos');
// }

// function usarVariable(v) {
//     console.log(v);
// }

// saludar();
// usarVariable(num);

// const lista = ['pedro', 'juan'];
// console.log(lista);

// fetch('data/usuarios.json')
fetch('https://pokeapi.co/api/v2/pokemon/ditto')
    .then(
        async function(res) {
            // console.log('funciona');
            // console.log(res.json());
            let data = await res.json();
            console.log(data);
        }
    )
    .catch(
        function(error){
            console.log(error);
        }
    )