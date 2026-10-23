const adminRespuesta = document.querySelector('[data-respuesta-form]');

if (adminRespuesta) {
    adminRespuesta.addEventListener('submit', evento => {
        evento.preventDefault();
        adminRespuesta.querySelector('[role="status"]').textContent = 'Respuesta preparada. El envío se conectará al servidor en una etapa posterior.';
    });
}
