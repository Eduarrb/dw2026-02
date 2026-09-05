// 1️⃣ manipular el valor del input
const input = document.querySelector('.tarea');

// 2️⃣ manipular el evento click del boton
const btn = document.querySelector('button');
//                            callback -> ejcutar un funcion dentro de otra funcion 

const lista = document.querySelector('ul');
// console.log(lista);

btn.addEventListener('click', function(){
    // 3️⃣ agregar la nueva tarea a la lista
    // console.log(input.value);
    const item = `<li class="item">${input.value}</li>`;
    // lista.insertAdjacentHTML('afterbegin', item);
    lista.insertAdjacentHTML('beforeend', item);
});


// 4️⃣ eliminar tareas al hacer click
