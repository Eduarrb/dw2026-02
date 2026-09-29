<main class="adminProductos__contenido">
    <a href="productos.html" class="adminProductos__contenido__tarjeta--volver"><i class="fa-solid fa-arrow-left"></i> Volver a productos</a>
    <section class="adminProductos__contenido__tarjeta">
        <h1 class="adminProductos__contenido__tarjeta--titulo">Nuevo producto</h1>
        <form class="adminProductos__contenido__tarjeta__form" data-producto-form>
            <div class="adminProductos__contenido__tarjeta__form__grupo"><label for="producto-nombre">Nombre del producto</label><input id="producto-nombre" required placeholder="Ej. ASUS ROG Zephyrus G14" /></div>
            <div class="adminProductos__contenido__tarjeta__form__grupo"><label for="producto-sku">SKU</label><input id="producto-sku" required placeholder="TBX-LAP-001" /></div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-categoria">Categoría</label
                ><select id="producto-categoria" required>
                    <option value="">Selecciona una categoría</option>
                    <option>Laptops</option>
                    <option>Periféricos</option>
                    <option>Monitores</option>
                    <option>Componentes</option>
                </select>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo"><label for="producto-precio">Precio</label><input id="producto-precio" type="number" min="0" step=".01" placeholder="0.00" required /></div>
            <div class="adminProductos__contenido__tarjeta__form__grupo"><label for="producto-stock">Stock</label><input id="producto-stock" type="number" min="0" placeholder="0" required /></div>
            <div class="adminProductos__contenido__tarjeta__form__grupo">
                <label for="producto-estado">Estado</label
                ><select id="producto-estado">
                    <option>Activo</option>
                    <option>Agotado</option>
                </select>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__grupo adminProductos__contenido__tarjeta__form__grupo--ancho">
                <label for="producto-descripcion">Descripción</label><textarea id="producto-descripcion" placeholder="Describe las características del producto"></textarea>
            </div>
            <div class="adminProductos__contenido__tarjeta__form__imagen">
                <i class="fa-regular fa-image"></i>
                <p>Imagen del producto</p>
                <input type="file" accept="image/*" aria-label="Subir imagen" />
            </div>
            <div class="adminProductos__contenido__tarjeta__form--acciones">
                <a href="productos.html" class="btn adminProductos__contenido__tarjeta__form--acciones--cancelar">Cancelar</a><button type="submit" class="btn btn--primary">Guardar producto</button>
            </div>
            <p role="status" class="adminProductos__contenido__tarjeta__form--estado"></p>
        </form>
    </section>
</main>