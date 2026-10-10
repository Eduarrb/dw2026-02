
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
                <?php showSwalMensaje(); ?>
                <?php get_adminCategorias(); ?>
            </tbody>
        </table>
        <p data-estado-categorias role="status"></p>
    </section>
</main>
<script src="../js/admin-categorias.js"></script>