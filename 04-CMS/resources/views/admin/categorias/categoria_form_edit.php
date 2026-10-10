<main class="adminCategorias__contenido">
    <a href="categorias.html" class="adminCategorias__contenido__tarjeta--volver"><i class="fa-solid fa-arrow-left"></i> Volver a categorías</a>
    <section class="adminCategorias__contenido__tarjeta">
        <h1 class="adminCategorias__contenido__tarjeta--titulo">Nueva categoría</h1>
        <form class="adminCategorias__contenido__tarjeta__form" data-categoria-form method="post" enctype="multipart/form-data">
            <div class="adminCategorias__contenido__tarjeta__form__grupo">
                <label for="categoria-nombre">
                    Nombre
                </label>
                <input id="categoria-nombre" placeholder="Ej. Laptops" name="nombre" />
            </div>
            <div class="adminCategorias__contenido__tarjeta__form__grupo">
                <label for="categoria-slug">
                    Slug
                </label>
                <input id="categoria-slug" placeholder="laptops" name="slug" />
            </div>
            <div class="adminCategorias__contenido__tarjeta__form__grupo">
                <label for="categoria-estado">
                    Estado
                </label>
                <select id="categoria-estado" name="estado" required>
                    <option value="" selected disabled>
                        - Selecciona un estado -
                    </option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <div class="adminCategorias__contenido__tarjeta__form__grupo">
                <label for="categoria-orden">
                    Orden de aparición
                </label>
                <input id="categoria-orden" type="number" min="1" value="1" name="orden" />
            </div>
            <div class="adminCategorias__contenido__tarjeta__form__grupo adminCategorias__contenido__tarjeta__form__grupo--ancho">
                <label for="categoria-descripcion">
                    Descripción
                </label>
                <textarea id="categoria-descripcion" placeholder="Describe esta categoría" name="descripcion"></textarea>
            </div>
            <div class="adminCategorias__contenido__tarjeta__form__imagen">
                <i class="fa-regular fa-image"></i>
                <div>
                    <label for="categoria-imagen">
                        Imagen de categoría
                    </label>
                    <input id="categoria-imagen" type="file" accept="image/*" name="imagen" /></div>
            </div>
            <div class="adminCategorias__contenido__tarjeta__form--acciones">
                <a href="/admin/categorias" class="btn adminCategorias__contenido__tarjeta__form--acciones--cancelar">
                    Cancelar
                </a>
                <button type="submit" class="btn btn--primary">Guardar categoría</button>
            </div>
            <p role="status" class="adminCategorias__contenido__tarjeta__form--estado"></p>
        </form>
    </section>
</main>