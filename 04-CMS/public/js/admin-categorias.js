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
		boton.addEventListener('click', function() {
			const cat_id = this.getAttribute('data-id');
			const cat_name = this.getAttribute('data-name');
			Swal.fire({
				title: '¿Estas seguro de desactivar la categoría?',
				text: "Desactivaras la categoria " + cat_name,
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: '¡Si, desactivalo!',
			}).then((result) => {
				if (result.isConfirmed)
					location.href = 'http://localhost:3000/admin/categorias_deactivate?id=' + cat_id
			});
		});
	});

	adminCategorias.querySelector('[data-categoria-form]')?.addEventListener('submit', (evento) => {
		evento.preventDefault();
		evento.currentTarget.querySelector('[role="status"]').textContent = 'Categoría guardada en esta demostración estática.';
	});
}
