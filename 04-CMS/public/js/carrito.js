const carritoLista = document.querySelector('.carrito__contenedor__contenido__lista');

if (carritoLista) {
    const actualizarCarrito = () => {
        let subtotal = 0;
        carritoLista.querySelectorAll('[data-item]').forEach(item => {
            const cantidad = Math.max(1, Math.min(99, Number(item.querySelector('[data-cantidad]').value) || 1));
            const precio = Number(item.dataset.precio);
            const importe = cantidad * precio;
            item.querySelector('[data-cantidad]').value = cantidad;
            item.querySelector('[data-importe]').textContent = `S/ ${importe.toLocaleString('es-PE', { minimumFractionDigits: 2 })}`;
            subtotal += importe;
        });
        const envio = subtotal >= 199 || subtotal === 0 ? 0 : 15;
        document.querySelector('[data-subtotal]').textContent = `S/ ${subtotal.toLocaleString('es-PE', { minimumFractionDigits: 2 })}`;
        document.querySelector('[data-envio]').textContent = envio ? `S/ ${envio.toFixed(2)}` : 'Gratis';
        document.querySelector('[data-total]').textContent = `S/ ${(subtotal + envio).toLocaleString('es-PE', { minimumFractionDigits: 2 })}`;
        document.querySelector('.nav__contenedor__actions--link--num').textContent = carritoLista.querySelectorAll('[data-item]').length;
        const vacio = carritoLista.querySelector('.carrito__contenedor__contenido__lista__vacio');
        const tieneProductos = carritoLista.querySelectorAll('[data-item]').length > 0;
        vacio.hidden = tieneProductos;
        carritoLista.querySelector('.carrito__contenedor__contenido__lista--cabecera').hidden = !tieneProductos;
        carritoLista.querySelector('.carrito__contenedor__contenido__lista__acciones').hidden = !tieneProductos;
    };

    carritoLista.addEventListener('click', evento => {
        const boton = evento.target.closest('[data-cantidad-cambio]');
        if (boton) {
            const input = boton.closest('[data-item]').querySelector('[data-cantidad]');
            input.value = Number(input.value) + Number(boton.dataset.cantidadCambio);
            actualizarCarrito();
        }
        const eliminar = evento.target.closest('[data-eliminar]');
        if (eliminar) {
            eliminar.closest('[data-item]').remove();
            actualizarCarrito();
        }
        if (evento.target.closest('[data-vaciar]')) {
            carritoLista.querySelectorAll('[data-item]').forEach(item => item.remove());
            actualizarCarrito();
        }
    });
    carritoLista.addEventListener('change', evento => { if (evento.target.matches('[data-cantidad]')) actualizarCarrito(); });
    document.querySelector('[data-comprar]').addEventListener('click', () => {
        document.querySelector('[data-estado-carrito]').textContent = 'Esta es una plantilla estática: el proceso de pago se conectará en una etapa posterior.';
    });
    actualizarCarrito();
}
