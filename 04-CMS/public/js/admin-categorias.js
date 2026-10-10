const adminCategorias = document.querySelector('.adminCategorias');

if (adminCategorias) {
	const busqueda = adminCategorias.querySelector('[data-busqueda-categoria]');
	const filas = [...adminCategorias.querySelectorAll('[data-categoria]')];
	busqueda?.addEventListener('input', () => {
		const consulta = busqueda.value.toLowerCase().trim();
		filas.forEach((fila) => {
			fila.hidden = consulta && !fila.textContent.toLowerCase().includes(consulta);
		});
	});
	// adminCategorias.querySelectorAll('[data-eliminar-categoria]').forEach((boton) =>
	// 	boton.addEventListener('click', () => {
	// 		boton.closest('[data-categoria]').hidden = true;
	// 		adminCategorias.querySelector('[data-estado-categorias]').textContent = 'Categoría eliminada de la vista de demostración.';
	// 	}),
	// );

	adminCategorias.querySelectorAll('[data-eliminar-categoria]').forEach((boton) => {
		boton.addEventListener('click', (e) => {
			// console.log('funciona');
			Swal.fire({
				title: '¿Estas seguro de desactivar la categoría?',
				text: "Desactivaras la categoria Laptops",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: '¡Si, desactivalo!',
			}).then((result) => {
				if (result.isConfirmed)
					console.log(location.href);
					location.href = 'http://localhost:3000/admin/categorias_delete?id=1'
			});
		});
	});

	adminCategorias.querySelector('[data-categoria-form]')?.addEventListener('submit', (evento) => {
		evento.preventDefault();
		evento.currentTarget.querySelector('[role="status"]').textContent = 'Categoría guardada en esta demostración estática.';
	});
}
