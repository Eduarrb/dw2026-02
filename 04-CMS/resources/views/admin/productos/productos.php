<main class="adminProductos__contenido">
    <header class="adminProductos__contenido__encabezado">
        <div>
            <h1>Productos</h1>
            <p>Administra el catálogo de tu tienda.</p>
        </div>
        <a href="producto-form.html" class="btn btn--primary adminProductos__contenido__encabezado--nuevo"><i class="fa-solid fa-plus"></i> Nuevo producto</a>
    </header>
    <div class="adminProductos__contenido__filtros">
        <input type="search" data-busqueda placeholder="Buscar por nombre o SKU" aria-label="Buscar productos" /><select aria-label="Filtrar por categoría">
            <option>Todas las categorías</option>
            <option>Laptops</option>
            <option>Periféricos</option>
            <option>Monitores</option></select
        ><select aria-label="Filtrar por estado">
            <option>Todos los estados</option>
            <option>Activo</option>
            <option>Agotado</option>
        </select>
    </div>
    <section class="adminProductos__contenido__tabla" aria-label="Listado de productos">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>SKU</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr data-producto>
                    <td>
                        <div class="adminProductos__contenido__tabla__producto">
                            <img src="../img/product-laptop-01.png" alt="ASUS ROG Zephyrus G14" />
                            <div><strong>ASUS ROG Zephyrus G14</strong><span>Ryzen 9 8945HS · 32GB · 1TB</span></div>
                        </div>
                    </td>
                    <td>TBX-LAP-001</td>
                    <td>Laptops</td>
                    <td>S/ 7,599.00</td>
                    <td>12</td>
                    <td><span class="adminProductos__contenido__tabla--estado activo">Activo</span></td>
                    <td>
                        <div class="adminProductos__contenido__tabla__acciones">
                            <a href="producto-detalle.html" aria-label="Ver producto"><i class="fa-regular fa-eye"></i></a><a href="producto-form.html" aria-label="Editar producto"><i class="fa-regular fa-pen-to-square"></i></a
                            ><button type="button" data-eliminar-producto aria-label="Eliminar producto"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-producto>
                    <td>
                        <div class="adminProductos__contenido__tabla__producto">
                            <img src="../img/product-keyboard-01.png" alt="Logitech G Pro X TKL" />
                            <div><strong>Logitech G Pro X TKL</strong><span>Teclado mecánico GX Blue</span></div>
                        </div>
                    </td>
                    <td>TBX-PER-014</td>
                    <td>Periféricos</td>
                    <td>S/ 699.00</td>
                    <td>0</td>
                    <td><span class="adminProductos__contenido__tabla--estado agotado">Agotado</span></td>
                    <td>
                        <div class="adminProductos__contenido__tabla__acciones">
                            <a href="producto-detalle.html" aria-label="Ver producto"><i class="fa-regular fa-eye"></i></a><a href="producto-form.html" aria-label="Editar producto"><i class="fa-regular fa-pen-to-square"></i></a
                            ><button type="button" data-eliminar-producto aria-label="Eliminar producto"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <p data-estado-productos role="status" class="adminProductos__contenido__estado"></p>
        <div class="adminProductos__contenido__paginacion">
            <span>Mostrando 1–2 de 24 productos</span>
            <div class="adminProductos__contenido__paginacion__numeros">
                <button class="active">1</button><button>2</button><button>3</button><button aria-label="Siguiente"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </section>
</main>