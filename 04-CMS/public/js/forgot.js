const forgot = document.querySelector('.forgot');

if (forgot) {
    const formulario = forgot.querySelector('.forgot__contenedor__contenido__tarjeta__form');
    formulario.addEventListener('submit', evento => {
        evento.preventDefault();
        formulario.querySelector('[role="status"]').textContent = 'Si el correo está registrado, recibirás instrucciones para recuperar tu contraseña. Esta es una demostración estática.';
    });
}
