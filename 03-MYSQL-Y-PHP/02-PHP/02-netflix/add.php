<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <?php include 'db.php'; ?>
    <h1 class="text-center bg-danger text-white pt-5 pb-5">Bienvenidos a Netflix</h1>
    <section class="container">
        <div class="row py-4">
            <a href="add.php" class="btn btn-success mr-2">Agregar pelicula</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <div class="row justify-content-center">
            <h2 class="col-md-12 text-center mb-4">Agregar nueva película</h2>
            <form class="col-md-6" method="post">
                <div class="form-group">
                    <label for="peli_nombre">Nombre de la pelicula</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="peli_nombre" 
                        name="peli_nombre"
                    >
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" id="peli_genero" name="peli_genero">
                </div>
                <div class="form-group">
                    <label for="peli_estreno">Fecha de estreno</label>
                    <input type="date" class="form-control" id="peli_estreno" name="peli_estreno">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="peli_restricciones" name="peli_restricciones">
                </div>
                <div class="form-group">
                    <label for="peli_imagen">Imagen URL</label>
                    <input type="text" class="form-control" id="peli_imagen" name="peli_imagen">
                </div>
                <div class="form-group">
                    <label for="peli_dire_id">Directores</label>
                    <select name="peli_dire_id" id="peli_dire_id" class="form-control" required>
                        <option value="" selected disabled>- Selecciona un director -</option>
                        <?php
                            $query = "SELECT * FROM directores";
                            $res = mysqli_query($con, $query);
                        ?>
                        <?php while($fila = mysqli_fetch_assoc($res)): ?>
                            <option value="<?php echo $fila['dire_id']; ?>">
                                <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>