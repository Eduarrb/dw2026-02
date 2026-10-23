<section class="productoResenas contenedor" id="resenas" aria-labelledby="resenas-titulo">
    <h2 id="resenas-titulo">Reseñas de clientes</h2>
    <div class="productoResenas__contenedor">
        <div class="productoResenas__contenedor__resumen">
            <div class="productoResenas__contenedor__resumen__nota">
                <strong>4.8</strong>
                <div>
                    <span class="productoEstrellas" aria-label="5 de 5 estrellas">★★★★★</span>
                    <p>18 reseñas</p>
                </div>
            </div>
            <div class="productoResenas__contenedor__resumen__fila"><span>5 estrellas</span><meter min="0" max="18" value="15" aria-label="5 estrellas: 15 reseñas"></meter><span>15</span></div>
            <div class="productoResenas__contenedor__resumen__fila"><span>4 estrellas</span><meter min="0" max="18" value="2" aria-label="4 estrellas: 2 reseñas"></meter><span>2</span></div>
            <div class="productoResenas__contenedor__resumen__fila"><span>3 estrellas</span><meter min="0" max="18" value="1" aria-label="3 estrellas: 1 reseñas"></meter><span>1</span></div>
            <div class="productoResenas__contenedor__resumen__fila"><span>2 estrellas</span><meter min="0" max="18" value="0" aria-label="2 estrellas: 0 reseñas"></meter><span>0</span></div>
            <div class="productoResenas__contenedor__resumen__fila"><span>1 estrella</span><meter min="0" max="18" value="0" aria-label="1 estrellas: 0 reseñas"></meter><span>0</span></div>
        </div>
        <div class="productoResenas__contenedor__lista">
            <article class="productoResenas__contenedor__lista__item">
                <div class="productoResenas__contenedor__lista__item__top">
                    <span class="productoResenas__contenedor__lista__item__top--avatar">JP</span>
                    <div>
                        <h3>Juan Pérez</h3>
                        <p>12 de mayo de 2024</p>
                    </div>
                    <span class="productoEstrellas" aria-label="5 de 5 estrellas">★★★★★</span>
                </div>
                <p>Excelente rendimiento en 1440p y 4K. Las temperaturas se mantienen muy bajas y es muy silenciosa. Totalmente recomendada.</p>
            </article>
            <article class="productoResenas__contenedor__lista__item">
                <div class="productoResenas__contenedor__lista__item__top">
                    <span class="productoResenas__contenedor__lista__item__top--avatar">MG</span>
                    <div>
                        <h3>María González</h3>
                        <p>5 de mayo de 2024</p>
                    </div>
                    <span class="productoEstrellas" aria-label="5 de 5 estrellas">★★★★★</span>
                </div>
                <p>La compré para edición de video y juegos. DLSS 3 marca una gran diferencia en los FPS. Muy buena construcción.</p>
            </article>
            <button type="button" class="btn productoResenas__contenedor__lista--escribir">Escribir una reseña</button>
            <form class="productoResenas__contenedor__lista__form" hidden>
                <h3>Tu reseña</h3>
                <label for="resena-nombre">Nombre</label><input id="resena-nombre" name="nombre" required maxlength="60" /><label for="resena-nota">Valoración</label
                ><select id="resena-nota" name="nota">
                    <option value="5">5 estrellas</option>
                    <option value="4">4 estrellas</option>
                    <option value="3">3 estrellas</option>
                    <option value="2">2 estrellas</option>
                    <option value="1">1 estrella</option></select
                ><label for="resena-texto">Comentario</label><textarea id="resena-texto" name="comentario" required maxlength="1000" rows="4"></textarea><button class="btn btn--primary" type="submit">Enviar reseña</button>
                <p role="status"></p>
            </form>
        </div>
    </div>
</section>