const indexCategoriasBox = document.querySelector('.landCategorias__contenedor__bottom');

const renderIndexCategorias = async () => {
    const categorias = await obtenerJson('getCategorias');
    let plantilla = '';
    categorias.forEach(cat => {
        plantilla += `
            <div class="landCategorias__contenedor__bottom__item">
                <img src="img/categorias/${cat.imagen}" alt="${cat.nombre}">
                <div class="landCategorias__contenedor__bottom__item__data">
                    <h4>${cat.nombre}</h4>
                    <p>${cat.canti} productos</p>
                </div>
            </div>
        `;
    });
    indexCategoriasBox.innerHTML = plantilla;
}

renderIndexCategorias();