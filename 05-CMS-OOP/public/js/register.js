const register = document.querySelector('.register');

if (register) {
    const formulario = register.querySelector('.register__contenedor__contenido__tarjeta__form');
    const password = register.querySelector('#register-password');
    const confirmation = register.querySelector('#register-confirmacion');

    register.querySelectorAll('[data-mostrar-password]').forEach(button => button.addEventListener('click', () => {
        const campo = document.getElementById(button.dataset.mostrarPassword);
        const visible = campo.type === 'text';
        campo.type = visible ? 'password' : 'text';
        button.setAttribute('aria-label', visible ? 'Mostrar contraseña' : 'Ocultar contraseña');
        button.querySelector('i').className = visible ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash';
    }));

    formulario.addEventListener('submit', evento => {
        evento.preventDefault();
        if (password.value !== confirmation.value) {
            confirmation.setCustomValidity('Las contraseñas no coinciden.');
            confirmation.reportValidity();
            return;
        }
        confirmation.setCustomValidity('');
        formulario.querySelector('[role="status"]').textContent = 'Cuenta validada. El registro se conectará al backend en una etapa posterior.';
    });
    confirmation.addEventListener('input', () => confirmation.setCustomValidity(''));
}
