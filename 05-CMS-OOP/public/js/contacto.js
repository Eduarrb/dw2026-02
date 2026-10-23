const contactoForm = document.querySelector('.contacto__contenedor__contenido__mensaje__form');

if (contactoForm) {
    const estadoContacto = contactoForm.querySelector('[role="status"]');
    const camposContacto = contactoForm.querySelectorAll('input:not([type="checkbox"]), textarea');

    camposContacto.forEach(campo => {
        campo.addEventListener('input', () => {
            campo.setCustomValidity(campo.value.trim() ? '' : 'Completa este campo.');
            estadoContacto.textContent = '';
        });
    });

    contactoForm.addEventListener('submit', evento => {
        evento.preventDefault();
        estadoContacto.textContent = 'Mensaje validado correctamente. Esta es una demostración: no se ha enviado ni guardado ningún dato.';
    });

    const privacidadContacto = contactoForm.querySelector('[aria-controls="contacto-politica"]');
    const politicaContacto = document.querySelector('#contacto-politica');

    privacidadContacto.addEventListener('click', () => {
        politicaContacto.hidden = !politicaContacto.hidden;
        privacidadContacto.setAttribute('aria-expanded', String(!politicaContacto.hidden));
    });
}
