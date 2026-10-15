<?php
    require_once '../../resources/config.php';

    if(isset($_GET['action']) && $_GET['action'] === 'getCategorias') {
        get_categoriasLand();
    }

    if(isset($_GET['action']) && $_GET['action'] === 'getProductos') {
        get_productosLand();
    }
    
?>