<main class="login">
    <div class="login__contenedor contenedor">
        <nav class="login__contenedor__ruta" aria-label="Ruta de navegación"><a href="index.html">Inicio</a><span>/</span><span aria-current="page">Iniciar sesión</span></nav>
        <div class="login__contenedor__contenido">
            <section class="login__contenedor__contenido__tarjeta" aria-labelledby="login-titulo">
                <header class="login__contenedor__contenido__tarjeta__encabezado">
                    <div class="login__contenedor__contenido__tarjeta__encabezado--icono"><i class="fa-solid fa-user" aria-hidden="true"></i></div>
                    <h1 id="login-titulo">Bienvenido de nuevo</h1>
                    <p>Inicia sesión para continuar en TechBox</p>
                </header>
                <?php showSwalMensaje(); ?>
                <?php $res = post_validarLogin(); ?>
                <form class="login__contenedor__contenido__tarjeta__form" method="post">
                    <div class="login__contenedor__contenido__tarjeta__form__grupo">
                        <label for="login-correo">Correo electrónico</label>
                        <input id="login-correo" name="correo" type="email" autocomplete="email" placeholder="Ingresa tu correo electrónico" value="<?php echo getDato($res, 1, 'correo'); ?>" />
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'correo'); ?>
                        </div>
                    </div>
                    <div class="login__contenedor__contenido__tarjeta__form__grupo">
                        <label for="login-password">Contraseña</label>
                        <div class="login__contenedor__contenido__tarjeta__form__grupo__password">
                            <input id="login-password" name="password" type="password" autocomplete="current-password" placeholder="Ingresa tu contraseña" /><button type="button" data-mostrar-password aria-label="Mostrar contraseña">
                                <i class="fa-regular fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'password'); ?>
                        </div>
                    </div>
                    <div class="login__contenedor__contenido__tarjeta__form__opciones">
                        <label for="login-recordar"><input id="login-recordar" name="recordar" type="checkbox" /> Recordarme</label><a href="#recuperar">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn--primary login__contenedor__contenido__tarjeta__form--enviar">Iniciar sesión</button>
                    <p class="login__contenedor__contenido__tarjeta__form--estado" role="status" aria-live="polite"></p>
                </form>
                <p class="login__contenedor__contenido__tarjeta__registro">¿Aún no tienes una cuenta? <a href="./register">Crear una cuenta</a></p>
            </section>
        </div>
    </div>
</main>