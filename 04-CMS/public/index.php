<?php require_once '../resources/config.php'; ?>

<?php include VIEW_LAND_LAYOUT . DS . "head.php"; ?>

    <?php include VIEW_LAND_LAYOUT . DS . "nav.php"; ?>

    <?php 
        if($url === "/" || $url === "/index.php") {
            include VIEW_LAND_HOME . DS . "header.php";
        }
    ?>

    <?php if($url === "/producto"): ?>
        <main class="detalleProducto">
            <?php 
                include VIEW_LAND_PRODUCTO . DS . "nav.php";
                include VIEW_LAND_PRODUCTO . DS . "producto.php";
                include VIEW_LAND_PRODUCTO . DS . "beneficios.php";
                include VIEW_LAND_PRODUCTO . DS . "detalles.php";
                include VIEW_LAND_PRODUCTO . DS . "review.php";
                include VIEW_LAND_PRODUCTO . DS . "relacionado.php";
            ?>
        </main>
        <script src="js/producto.js"></script>
    <?php endif;?>

    <?php 
        if($url === "/" || $url === "/index.php") {
            include VIEW_LAND_LAYOUT . DS . "servicios.php";
            include VIEW_LAND_HOME . DS . "categorias.php"; 
            include VIEW_LAND_HOME . DS . "productos.php";
        }
    ?>
    
    <?php include VIEW_LAND_LAYOUT . DS . "footer.php"; ?>