<?php
    function get_categoriasLand() {
        $query = query("SELECT COUNT(categoria_id) AS canti, b.nombre, b.imagen FROM productos a
                        RIGHT JOIN categorias b ON a.categoria_id = b.id 
                        WHERE a.estado = 1 OR b.estado = 1 GROUP BY a.categoria_id;");
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        echo json_encode($res);
    }

?>