<main class="adminProductos__contenido">
    <a href="productos.html" class="adminProductos__contenido__tarjeta--volver"><i class="fa-solid fa-arrow-left"></i> Volver a productos</a>
    <section class="adminProductos__contenido__tarjeta">
        <h1 class="adminProductos__contenido__tarjeta--titulo">Nuevo producto</h1>
        <form class="adminProductos__contenido__tarjeta__form" data-producto-form method="post" enctype="multipart/form-data">
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-nombre">
                    Nombre del producto
                </label>
                <input id="producto-nombre" required placeholder="Ej. ASUS ROG Zephyrus G14" name="nombre" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-sku">
                    SKU
                </label>
                <input id="producto-sku" required placeholder="TBX-LAP-001" name="sku" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-categoria">
                    Categoría
                </label>
                <select id="producto-categoria" required name="categoria_id">
                    <option selected disabled>
                        Selecciona una categoría
                    </option>
                    <?php get_adminCategoriasSelect(); ?>
                </select>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-precio">
                    Precio
                </label>
                <input id="producto-precio" type="number" min="0" step=".01" placeholder="0.00" required name="precio" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-stock">
                    Stock
                </label>
                <input id="producto-stock" type="number" min="0" placeholder="0" required name="stock" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-estado">
                    Estado
                </label>
                <select id="producto-estado" name="estado">
                    <option selected disabled>
                        - Selecciona un estado -
                    </option>
                    <option value="1">Activo</option>
                    <option value="0">Agotado</option>
                </select>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo adminProductos__contenido__tarjeta__form__grupo--ancho">
                <label for="producto-descripcion">
                    Descripción
                </label>
                <textarea id="producto-descripcion" placeholder="Describe las características del producto" name="descripcion"></textarea>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__imagen">
                <i class="fa-regular fa-image"></i>
                <p>Imagen del producto</p>
                <input type="file" accept="image/*" aria-label="Subir imagen" name="imagen" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form--acciones">
                <a href="productos.html" class="btn adminProductos__contenido__tarjeta__form--acciones--cancelar">Cancelar</a><button type="submit" class="btn btn--primary">Guardar producto</button>
            </div>
            <p role="status" class="adminProductos__contenido__tarjeta__form--estado"></p>
        </form>
    </section>
</main>