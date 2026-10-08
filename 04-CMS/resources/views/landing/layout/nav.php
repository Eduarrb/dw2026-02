<nav class="nav">
    <div class="nav__contenedor contenedor d-flex justify-content-between pt-1 pb-1 pl-2 pr-2">
        <a href="./" class="nav__contenedor__logoBox">
            <img src="img/techbox-logo-horizontal.png" alt="TechBox" class="nav__contenedor__logoBox--logo">
        </a>
        <div class="nav__contenedor__menu d-flex">
            <a href="./" class="nav__contenedor__menu--link active">inicio</a>
            <a href="#" class="nav__contenedor__menu--link">productos</a>
            <a href="#" class="nav__contenedor__menu--link">categorias</a>
            <a href="#" class="nav__contenedor__menu--link">ofertas</a>
            <a href="#" class="nav__contenedor__menu--link">contacto</a>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
                <a href="/admin" class="nav__contenedor__menu--link">Admin</a>
            <?php endif; ?>
        </div>
        <div class="nav__contenedor__actions">
            <a href="#" class="nav__contenedor__actions--link">
                <i class="fa-regular fa-heart"></i>
            </a>
            <a href="#" class="nav__contenedor__actions--link">
                <i class="fa-regular fa-user"></i>
            </a>
            <a href="#" class="nav__contenedor__actions--link">
                <span class="nav__contenedor__actions--link--num">1</span>
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="#" class="nav__contenedor__actions--menuBox">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </div>
</nav>