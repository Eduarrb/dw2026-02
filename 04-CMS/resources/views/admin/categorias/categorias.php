
<main class="adminCategorias__contenido">
    <header class="adminCategorias__contenido__encabezado">
        <div>
            <h1>Categorías</h1>
            <p>Organiza las categorías del catálogo.</p>
        </div>
        <a href="/admin/categorias_add" class="btn btn--primary"><i class="fa-solid fa-plus"></i> Nueva categoría</a>
    </header>
    <div class="adminCategorias__contenido__filtros">
        <input type="search" data-busqueda-categoria placeholder="Buscar categoría" aria-label="Buscar categoría" /><select aria-label="Filtrar por estado">
            <option>Todos los estados</option>
            <option>Activo</option>
            <option>Inactivo</option>
        </select>
    </div>
    <section class="adminCategorias__contenido__tabla">
        <table>
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Slug</th>
                    <th>Productos</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php get_adminCategorias(); ?>
                <!-- <tr data-categoria>
                    <td>
                        <div class="adminCategorias__contenido__tabla__categoria">
                            <img src="../img/home-category-laptop.png" alt="Laptops" />
                            <div><strong>Laptops</strong><span>Equipos portátiles</span></div>
                        </div>
                    </td>
                    <td>laptops</td>
                    <td>24 productos</td>
                    <td><span class="adminCategorias__contenido__tabla--estado activo">Activo</span></td>
                    <td>
                        <div class="adminCategorias__contenido__tabla__acciones">
                            <a href="categoria-detalle.html" aria-label="Ver categoría"><i class="fa-regular fa-eye"></i></a><a href="categoria-form.html" aria-label="Editar categoría"><i class="fa-regular fa-pen-to-square"></i></a
                            ><button type="button" data-eliminar-categoria aria-label="Eliminar categoría"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-categoria>
                    <td>
                        <div class="adminCategorias__contenido__tabla__categoria">
                            <img src="../img/home-category-component.png" alt="Componentes" />
                            <div><strong>Componentes</strong><span>Hardware para PC</span></div>
                        </div>
                    </td>
                    <td>componentes</td>
                    <td>38 productos</td>
                    <td><span class="adminCategorias__contenido__tabla--estado activo">Activo</span></td>
                    <td>
                        <div class="adminCategorias__contenido__tabla__acciones">
                            <a href="categoria-detalle.html" aria-label="Ver categoría"><i class="fa-regular fa-eye"></i></a><a href="categoria-form.html" aria-label="Editar categoría"><i class="fa-regular fa-pen-to-square"></i></a
                            ><button type="button" data-eliminar-categoria aria-label="Eliminar categoría"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-categoria>
                    <td>
                        <div class="adminCategorias__contenido__tabla__categoria">
                            <img src="../img/home-category-monitor.png" alt="Monitores" />
                            <div><strong>Monitores</strong><span>Pantallas y monitores</span></div>
                        </div>
                    </td>
                    <td>monitores</td>
                    <td>16 productos</td>
                    <td><span class="adminCategorias__contenido__tabla--estado inactivo">Inactivo</span></td>
                    <td>
                        <div class="adminCategorias__contenido__tabla__acciones">
                            <a href="categoria-detalle.html" aria-label="Ver categoría"><i class="fa-regular fa-eye"></i></a><a href="categoria-form.html" aria-label="Editar categoría"><i class="fa-regular fa-pen-to-square"></i></a
                            ><button type="button" data-eliminar-categoria aria-label="Eliminar categoría"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <p data-estado-categorias role="status"></p>
    </section>
</main>
<script src="../js/admin-categorias.js"></script>