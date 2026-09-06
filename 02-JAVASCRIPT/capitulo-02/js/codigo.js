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
const listaTareas = document.querySelectorAll('.item');
// console.log(listaTareas.length);
// for (let i = 0; i < listaTareas.length; i++) {
//     console.log(listaTareas[i]);
// }

// METODO FOREACH
// listaTareas.forEach(function(item){
//     // console.log(item)
//     item.addEventListener('click', function() {
//         // console.log('hiciste clik en un item');
//         item.remove();
//     })
// });

const listaBox = document.querySelector('ul');
// console.log(listaBox);
listaBox.addEventListener('click', function(e){
    // console.log(e);
    if(e.target.tagName === 'LI') {
        e.target.remove();
    }
});
