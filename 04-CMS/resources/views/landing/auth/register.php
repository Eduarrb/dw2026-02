<main class="register">
    <div class="register__contenedor contenedor">
        <nav class="register__contenedor__ruta" aria-label="Ruta de navegación"><a href="index.html">Inicio</a><span>/</span><span aria-current="page">Crear cuenta</span></nav>
        <div class="register__contenedor__contenido">
            <section class="register__contenedor__contenido__tarjeta" aria-labelledby="register-titulo">
                <header class="register__contenedor__contenido__tarjeta__encabezado">
                    <div class="register__contenedor__contenido__tarjeta__encabezado--icono"><i class="fa-solid fa-user-plus" aria-hidden="true"></i></div>
                    <h1 id="register-titulo">Crea tu cuenta</h1>
                    <p>Regístrate para disfrutar de todos los beneficios de TechBox</p>
                </header>
                <?php $res = post_validarRegistro(); ?>
                <?php //dd($res); ?>
                <form class="register__contenedor__contenido__tarjeta__form" method="post">
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-nombres">Nombres</label>
                        <input id="register-nombres" name="nombres" autocomplete="given-name" placeholder="Ingresa tus nombres" value="<?php echo getDato($res, 1, 'nombres'); ?>" />
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'nombres'); ?>
                        </div>
                    </div>
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-apellidos">Apellidos</label><input id="register-apellidos" name="apellidos" autocomplete="family-name" placeholder="Ingresa tus apellidos" value="<?php echo getDato($res, 1, 'apellidos'); ?>" />
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'apellidos'); ?>
                        </div>
                    </div>
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-correo">Correo electrónico</label>
                        <input 
                            id="register-correo" 
                            name="correo" 
                            type="email" 
                            autocomplete="email" 
                            placeholder="Ingresa tu correo electrónico" 
                            value="<?php echo getDato($res, 1, 'correo'); ?>"
                        />
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'correo'); ?>
                        </div>
                    </div>
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-telefono">Teléfono</label>
                        <input id="register-telefono" name="telefono" type="tel" autocomplete="tel" placeholder="000 000 000" value="<?php echo getDato($res, 1, 'telefono'); ?>" />
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'telefono'); ?>
                        </div>
                    </div>
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-password">Contraseña</label>
                        <div class="register__contenedor__contenido__tarjeta__form__grupo__password">
                            <input id="register-password" name="password" type="password" autocomplete="new-password" placeholder="Mínimo 6 caracteres" />
                            <button
                                type="button"
                                data-mostrar-password="register-password"
                                aria-label="Mostrar contraseña"
                            >
                                <i class="fa-regular fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'password'); ?>
                        </div>
                    </div>
                    <div class="register__contenedor__contenido__tarjeta__form__grupo">
                        <label for="register-confirmacion">Confirmar contraseña</label>
                        <div class="register__contenedor__contenido__tarjeta__form__grupo__password">
                            <input id="register-confirmacion" name="confirmacion" type="password" autocomplete="new-password" placeholder="Repite tu contraseña" /><button
                                type="button"
                                data-mostrar-password="register-confirmacion"
                                aria-label="Mostrar contraseña"
                            >
                                <i class="fa-regular fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="color-danger">
                            <?php echo getDato($res, 0, 'confirmPassword'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn--primary register__contenedor__contenido__tarjeta__form--enviar">
                        Crear cuenta
                    </button>
                    <p class="register__contenedor__contenido__tarjeta__form--estado" role="status" aria-live="polite"></p>
                </form>
                <p class="register__contenedor__contenido__tarjeta__login">¿Ya tienes una cuenta? <a href="login.html">Iniciar sesión</a></p>
            </section>
        </div>
    </div>
</main>