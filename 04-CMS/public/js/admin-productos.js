const adminProductos = document.querySelector('.adminProductos');

if (adminProductos) {
	const busqueda = adminProductos.querySelector('[data-busqueda]');
	const filas = [...adminProductos.querySelectorAll('[data-producto]')];
	const actualizarListado = () => {
		const consulta = busqueda.value.toLowerCase().trim();
		filas.forEach((fila) => {
			fila.hidden = consulta && !fila.textContent.toLowerCase().includes(consulta);
		});
	};
	if (busqueda) busqueda.addEventListener('input', actualizarListado);
	adminProductos.querySelectorAll('[data-eliminar-producto]').forEach((boton) =>
		boton.addEventListener('click', () => {
			const fila = boton.closest('[data-producto]');
			fila.hidden = true;
			adminProductos.querySelector('[data-estado-productos]').textContent = 'Producto eliminado de la vista de demostración.';
		}),
	);
	const formulario = adminProductos.querySelector('[data-producto-form]');
	if (formulario) {
		const crearVista = (archivo, principal = false) => {
			if (!archivo.type.startsWith('image/')) return;
			const imagen = document.createElement('img');
			imagen.alt = principal ? 'Vista previa de la imagen principal' : `Vista referencial de ${archivo.name}`;
			imagen.src = URL.createObjectURL(archivo);
			if (principal) {
				const preview = formulario.querySelector('[data-imagen-principal-preview]');
				preview.src = imagen.src;
				preview.hidden = false;
				preview.previousElementSibling.hidden = true;
			} else {
				const galeria = formulario.querySelector('[data-galeria-referenciales]');
				const item = document.createElement('div');
				item.className = 'adminProductos__contenido__tarjeta__form__imagenes__referenciales__item';
				item.append(imagen);
				galeria.querySelector('[data-galeria-vacia]')?.remove();
				galeria.append(item);
			}
		};
		formulario.querySelector('[data-imagen-principal]')?.addEventListener('change', (evento) => {
			if (evento.target.files[0]) crearVista(evento.target.files[0], true);
		});
		formulario.querySelector('[data-imagenes-referenciales]')?.addEventListener('change', (evento) => [...evento.target.files].forEach((archivo) => crearVista(archivo)));
		// formulario.addEventListener('submit', evento => { evento.preventDefault(); formulario.querySelector('[role="status"]').textContent = 'Producto guardado en esta demostración estática.'; });
	}
}
