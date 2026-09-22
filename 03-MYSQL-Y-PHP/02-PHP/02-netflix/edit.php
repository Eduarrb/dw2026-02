<?php ob_start(); ?>
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
            <a href="./" class="btn btn-success mr-2">Inicio</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <div class="row justify-content-center">
            <h2 class="col-md-12 text-center mb-4">Agregar nueva película</h2>
            <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id WHERE peli_id = $id";
                $res = mysqli_query($con, $query);
                $fila = mysqli_fetch_assoc($res);
            ?>
            <form class="col-md-6" method="post">
                <div class="form-group">
                    <label for="peli_nombre">Nombre de la pelicula</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="peli_nombre" 
                        name="peli_nombre"
                        value="<?php echo $fila['peli_nombre']; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" id="peli_genero" name="peli_genero" value="<?php echo $fila['peli_genero']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_estreno">Fecha de estreno</label>
                    <input type="date" class="form-control" id="peli_estreno" name="peli_estreno" value="<?php echo $fila['peli_estreno']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="peli_restricciones" name="peli_restricciones" value="<?php echo $fila['peli_restricciones']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_imagen">Imagen URL</label>
                    <input type="text" class="form-control" id="peli_imagen" name="peli_imagen" value="<?php echo $fila['peli_img']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_dire_id">Directores</label>
                    <select name="peli_dire_id" id="peli_dire_id" class="form-control" required>
                        <option value="" selected disabled>- Selecciona un director -</option>
                        <?php
                            $query = "SELECT * FROM directores";
                            $res = mysqli_query($con, $query);
                        ?>
                        <?php while($filaDire = mysqli_fetch_assoc($res)): ?>
                            <!-- filaDire = 2 == fila[peli_dire_id] = 1 -->
                            <?php if($filaDire['dire_id'] === $fila['peli_dire_id']): ?>
                                <option value="<?php echo $filaDire['dire_id']; ?>" selected>
                                    <?php echo $filaDire['dire_nombres'] . " " . $filaDire['dire_apellidos']; ?>
                                </option>
                            <?php else: ?>
                                <option value="<?php echo $filaDire['dire_id']; ?>">
                                    <?php echo $filaDire['dire_nombres'] . " " . $filaDire['dire_apellidos']; ?>
                                </option>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="editar">Editar</button>
                </div>
            </form>
            <?php 
                if(isset($_POST['editar'])) {
                    $peli_nombre = $_POST['peli_nombre'];
                    $peli_genero = $_POST['peli_genero'];
                    $peli_estreno = $_POST['peli_estreno'];
                    $peli_restricciones = $_POST['peli_restricciones'];
                    $peli_imagen = $_POST['peli_imagen'];
                    $peli_dire_id = $_POST['peli_dire_id'];
                    
                    $query = "UPDATE peliculas SET peli_nombre = '$peli_nombre', peli_genero = '$peli_genero', peli_estreno = '$peli_estreno', peli_restricciones = '$peli_restricciones', peli_img = '$peli_imagen', peli_dire_id = $peli_dire_id WHERE peli_id = $id";

                    mysqli_query($con, $query);
                    header("Location: ./");
                }
            ?>
        </div>
    </section>
</body>
</html>