<main class="adminProductos__contenido">
    <a href="productos.html" class="adminProductos__contenido__tarjeta--volver"><i class="fa-solid fa-arrow-left"></i> Volver a productos</a>
    <section class="adminProductos__contenido__tarjeta">
        <h1 class="adminProductos__contenido__tarjeta--titulo">Nuevo producto</h1>
        <?php post_productoAddAdmin(); ?>
        <form class="adminProductos__contenido__tarjeta__form" data-producto-form method="post" enctype="multipart/form-data">
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-nombre">
                    Nombre del producto
                </label>
                <input id="producto-nombre" placeholder="Ej. ASUS ROG Zephyrus G14" name="nombre" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-sku">
                    SKU
                </label>
                <input id="producto-sku" placeholder="TBX-LAP-001" name="sku" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-categoria">
                    Categoría
                </label>
                <select id="producto-categoria" name="categoria_id">
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
                <input id="producto-precio" type="number" min="0" step=".01" placeholder="0.00" name="precio" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-stock">
                    Stock
                </label>
                <input id="producto-stock" type="number" min="0" placeholder="0" name="stock" />
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
            <fieldset class="adminProductos__contenido__tarjeta__form__imagenes">
                <legend>Imágenes del producto</legend>
                <div class="adminProductos__contenido__tarjeta__form__imagenes__principal">
                    <div class="adminProductos__contenido__tarjeta__form__imagenes__vista">
                        <i class="fa-regular fa-image" aria-hidden="true"></i>
                        <img data-imagen-principal-preview alt="Vista previa de la imagen principal" hidden />
                    </div>
                    <div>
                        <label for="producto-imagen-principal">Imagen principal</label>
                        <p>Se mostrará como imagen principal del producto.</p>
                        <input id="producto-imagen-principal" type="file" accept="image/png,image/jpeg,image/webp" name="imagen" data-imagen-principal />
                        <small>PNG, JPG o WEBP. Máximo recomendado: 2 MB.</small>
                    </div>
                </div>
                <div class="adminProductos__contenido__tarjeta__form__imagenes__referenciales">
                    <div class="adminProductos__contenido__tarjeta__form__imagenes__referenciales__encabezado">
                        <div>
                            <label for="producto-imagenes-referenciales">Imágenes referenciales</label>
                            <p>Agrega vistas adicionales del producto.</p>
                        </div>
                        <input id="producto-imagenes-referenciales" type="file" accept="image/png,image/jpeg,image/webp" name="imagenes_referenciales[]" multiple data-imagenes-referenciales />
                        <label for="producto-imagenes-referenciales" class="btn">Seleccionar imágenes</label>
                    </div>
                    <small>Puedes seleccionar varias imágenes.</small>
                    <div class="adminProductos__contenido__tarjeta__form__imagenes__referenciales__galeria" data-galeria-referenciales>
                        <div class="adminProductos__contenido__tarjeta__form__imagenes__referenciales__vacio" data-galeria-vacia>
                            <i class="fa-regular fa-images" aria-hidden="true"></i>
                            <span>Aún no hay imágenes referenciales.</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="adminProductos__contenido__tarjeta__form--acciones">
                <a href="productos.html" class="btn adminProductos__contenido__tarjeta__form--acciones--cancelar">Cancelar</a><button type="submit" class="btn btn--primary">Guardar producto</button>
            </div>
            <p role="status" class="adminProductos__contenido__tarjeta__form--estado"></p>
        </form>
    </section>
</main>