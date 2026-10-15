<?php
    function get_productosLand() {
        $query = query("SELECT a.id, a.imagen, b.nombre AS cat_nombre, a.nombre AS prod_nombre, a.precio FROM productos a INNER JOIN categorias b ON a.categoria_id = b.id WHERE a.estado = 1");
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        echo json_encode($res);
    }
?>