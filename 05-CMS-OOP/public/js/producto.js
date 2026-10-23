const producto = document.querySelector('.producto');

if (producto) {
    const imagen = document.querySelector('#producto-imagen');
    const miniaturas = document.querySelectorAll('[data-imagen]');
    miniaturas.forEach(boton => boton.addEventListener('click', () => {
        imagen.src = boton.dataset.imagen;
        imagen.alt = `ASUS TUF Gaming GeForce RTX 4070 Ti SUPER, ${boton.querySelector('img').alt.toLowerCase()}`;
        miniaturas.forEach(item => {
            item.classList.toggle('active', item === boton);
            item.setAttribute('aria-pressed', String(item === boton));
        });
    }));

    const cantidad = document.querySelector('#producto-cantidad');
    const normalizarCantidad = () => {
        cantidad.value = Math.min(99, Math.max(1, Math.trunc(Number(cantidad.value) || 1)));
        return Number(cantidad.value);
    };
    cantidad.addEventListener('change', normalizarCantidad);
    document.querySelectorAll('[data-cantidad]').forEach(boton => boton.addEventListener('click', () => {
        cantidad.value = normalizarCantidad() + Number(boton.dataset.cantidad);
        normalizarCantidad();
    }));

    const favorito = document.querySelector('.producto__contenedor__info__acciones--favorito');
    favorito.addEventListener('click', () => {
        const activo = favorito.getAttribute('aria-pressed') !== 'true';
        favorito.setAttribute('aria-pressed', String(activo));
        favorito.setAttribute('aria-label', activo ? 'Quitar de favoritos' : 'Guardar en favoritos');
        favorito.querySelector('i').className = `${activo ? 'fa-solid' : 'fa-regular'} fa-heart`;
    });

    const estado = document.querySelector('.producto__contenedor__info--estado');
    document.querySelector('[data-agregar-principal]').addEventListener('click', () => {
        estado.textContent = `${normalizarCantidad()} unidad(es) agregada(s) al carrito de demostración.`;
    });
    document.querySelector('.producto__contenedor__info--comprar').addEventListener('click', () => {
        estado.textContent = 'Esta plantilla muestra la interfaz de compra; el pago no está conectado.';
    });
    document.querySelectorAll('[data-agregar]').forEach(boton => boton.addEventListener('click', () => {
        const nombre = boton.closest('article').querySelector('h3').textContent;
        document.querySelector('.productoRelacionados--estado').textContent = `${nombre} agregado al carrito de demostración.`;
    }));

    const tabs = [...document.querySelectorAll('[role="tab"]')];
    const activarTab = tab => tabs.forEach(item => {
        const activo = item === tab;
        item.classList.toggle('active', activo);
        item.setAttribute('aria-selected', String(activo));
        item.tabIndex = activo ? 0 : -1;
        document.getElementById(item.getAttribute('aria-controls')).hidden = !activo;
    });
    tabs.forEach((tab, indice) => {
        tab.addEventListener('click', () => activarTab(tab));
        tab.addEventListener('keydown', evento => {
            let siguiente;
            if (evento.key === 'ArrowRight') siguiente = (indice + 1) % tabs.length;
            if (evento.key === 'ArrowLeft') siguiente = (indice + tabs.length - 1) % tabs.length;
            if (evento.key === 'Home') siguiente = 0;
            if (evento.key === 'End') siguiente = tabs.length - 1;
            if (siguiente === undefined) return;
            evento.preventDefault();
            activarTab(tabs[siguiente]);
            tabs[siguiente].focus();
        });
    });

    const formulario = document.querySelector('.productoResenas__contenedor__lista__form');
    const escribir = document.querySelector('.productoResenas__contenedor__lista--escribir');
    escribir.setAttribute('aria-expanded', 'false');
    escribir.addEventListener('click', () => {
        formulario.hidden = !formulario.hidden;
        escribir.setAttribute('aria-expanded', String(!formulario.hidden));
        if (!formulario.hidden) formulario.querySelector('input').focus();
    });
    formulario.addEventListener('submit', evento => {
        evento.preventDefault();
        formulario.querySelector('[role="status"]').textContent = 'Gracias. Esta es una demostración; la reseña no se publica ni se guarda.';
    });
}
