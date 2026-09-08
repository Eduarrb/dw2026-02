const btn = document.querySelector('button');

const popup = document.querySelector('.popup-caja');

const popupClose = document.querySelector('.popup-close');

btn.addEventListener('click', () => {
    popup.classList.add('mostrarCaja');
});

popupClose.addEventListener('click', function() {
    popup.classList.remove('mostrarCaja');
});

popup.addEventListener('click', (e) => {
    if(e.target.classList.contains('mostrarCaja')) {
        e.target.classList.remove('mostrarCaja');
    }
});

window.addEventListener('keyup', function(e) {
    console.log(e);
    if(e.code === 'Escape') {
        popup.classList.remove('mostrarCaja');
    }
});