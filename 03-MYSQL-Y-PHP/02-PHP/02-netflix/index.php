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
        <pre>
            <?php
                $query = "SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id";
                $res = mysqli_query($con, $query);
            ?>
        </pre>
        <div class="row">
            <?php while($fila = mysqli_fetch_assoc($res)): ?>
                <article class="col-md-3 mb-4">
                    <img src="https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="Interestellar" style="width:100%">
                    <h4>
                        <?php echo $fila['peli_nombre']; ?>
                    </h4>
                    <div>
                        <strong>Director: </strong><?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                    </div>
                    <div>
                        <strong>Género: </strong> <?php echo $fila['peli_genero']; ?>
                    </div>
                    <div>
                        <strong>Rating: </strong> <?php echo $fila['peli_restricciones']; ?>
                    </div>
                    <div>
                        <a href="#" class="btn btn-warning">editar</a>
                        <a href="#" class="btn btn-danger">borrar</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</body>
</html>