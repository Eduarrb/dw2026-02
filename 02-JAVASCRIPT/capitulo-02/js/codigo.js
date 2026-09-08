const input = document.querySelector('.tarea');

const btn = document.querySelector('button');

const lista = document.querySelector('ul');

const alerta = document.querySelector('p');

btn.addEventListener('click', function(){
    if(input.value === '') {
        alerta.textContent = 'No puedes agregar un elemento vacio';
    } else {
        const item = `<li class="item">${input.value}</li>`;
        lista.insertAdjacentHTML('beforeend', item);
        input.value = '';
        alerta.textContent = '';
    }
});

const listaBox = document.querySelector('ul');
listaBox.addEventListener('click', function(e){
    if(e.target.tagName === 'LI') {
        e.target.remove();
    }
});
