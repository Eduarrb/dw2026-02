const perfil = document.querySelector('.perfil');

if (perfil) {
    const formulario = perfil.querySelector('.perfil__contenedor__principal__contenido__tarjeta__form');
    formulario.addEventListener('submit', evento => {
        evento.preventDefault();
        formulario.querySelector('[role="status"]').textContent = 'Cambios guardados en esta demostración. No se ha conectado ningún servidor.';
    });
    perfil.querySelector('[data-editar-direccion]').addEventListener('click', evento => {
        const boton = evento.currentTarget;
        const direccion = perfil.querySelector('[data-direccion]');
        direccion.toggleAttribute('hidden');
        boton.textContent = direccion.hidden ? 'Editar dirección' : 'Cerrar edición';
    });
}
