const indexProductosBox = document.querySelector('.landingProductos__contenedor__bottom');

const renderIndexProductos = async () => {
    const productos = await obtenerJson('getProductos');
    console.log(productos);
    let plantilla = ``;
    productos.forEach(prod => {
        plantilla += `
            <div class="landingProductos__contenedor__bottom__item">
                <a href="#" class="landingProductos__contenedor__bottom__item__favorito">
                    <i class="fa-regular fa-heart"></i>
                </a>
                <div class="landingProductos__contenedor__bottom__item__imgBox">
                    <img src="img/productos/${prod.imagen}" alt="${prod.prod_nombre}">
                </div>
                <div class="landingProductos__contenedor__bottom__item__data">
                    <div class="landingProductos__contenedor__bottom__item__data--categoria mb-1">
                        ${prod.cat_nombre}
                    </div>
                    <div class="landingProductos__contenedor__bottom__item__data--nombre mb-1">
                        ${prod.prod_nombre}
                    </div>
                    <div class="landingProductos__contenedor__bottom__item__data--stars mb-2">
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <span>(24)</span>
                    </div>
                    <div class="landingProductos__contenedor__bottom__item__data--precio">
                        S/ ${prod.precio}
                    </div>
                </div>
                <div class="landingProductos__contenedor__bottom__item__actions mt-2">
                    <a href="/producto?id=${prod.id}" class="btn btn--cart">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span>Agregar al carrito</span>
                    </a>
                </div>
            </div>
        `;
    });
    indexProductosBox.innerHTML = plantilla;
}

renderIndexProductos();