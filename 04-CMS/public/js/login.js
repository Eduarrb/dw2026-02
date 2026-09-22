const login = document.querySelector('.login');

if (login) {
    const formulario = login.querySelector('.login__contenedor__contenido__tarjeta__form');
    const password = login.querySelector('#login-password');
    const togglePassword = login.querySelector('[data-mostrar-password]');

    togglePassword.addEventListener('click', () => {
        const visible = password.type === 'text';
        password.type = visible ? 'password' : 'text';
        togglePassword.setAttribute('aria-label', visible ? 'Mostrar contraseña' : 'Ocultar contraseña');
        togglePassword.querySelector('i').className = visible ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash';
    });

    formulario.addEventListener('submit', evento => {
        evento.preventDefault();
        formulario.querySelector('[role="status"]').textContent = 'Datos validados. El inicio de sesión se conectará al backend en una etapa posterior.';
    });
}
