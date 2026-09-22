const adminMensajes = document.querySelector('.adminMensajes');

if (adminMensajes) {
    const busqueda = adminMensajes.querySelector('[data-busqueda-mensaje]');
    const mensajes = [...adminMensajes.querySelectorAll('[data-mensaje]')];
    busqueda?.addEventListener('input', () => { const consulta = busqueda.value.toLowerCase().trim(); mensajes.forEach(mensaje => { mensaje.hidden = consulta && !mensaje.textContent.toLowerCase().includes(consulta); }); });
    adminMensajes.querySelectorAll('[data-marcar-leido]').forEach(mensaje => mensaje.addEventListener('click', () => { mensaje.closest('[data-mensaje]').classList.remove('noLeido'); }));
}
