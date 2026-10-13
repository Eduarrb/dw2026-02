<?php
    function post_productoAddAdmin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = escape(trim($_POST['nombre']));
            $sku = escape(trim($_POST['sku']));
            $categoria_id = escape(trim($_POST['categoria_id']));
            $precio = escape(trim($_POST['precio']));
            $stock = escape(trim($_POST['stock']));
            $estado = escape(trim($_POST['estado']));
            $descripcion = escape(trim($_POST['descripcion']));

            $main_imagen_name = escape(trim($_FILES['imagen']['name']));
            $main_imagen_tmp = $_FILES['imagen']['tmp_name'];

            $main_imagen_name = md5(uniqid()) . "." . explode(".", $main_imagen_name)[1];

            move_uploaded_file($main_imagen_tmp, "../img/productos/$main_imagen_name");

            query("INSERT INTO productos (usuario_id, categoria_id, nombre, sku, precio, stock, estado, descripcion, imagen) VALUES ($_SESSION[id], $categoria_id, '$nombre', '$sku', $precio, $stock, $estado, '$descripcion', '$main_imagen_name')");
            
            $last_id = last_id();

            $galery = $_FILES['imagenes_referenciales'];
            foreach($galery['name'] as $indice => $nombre) {
                $img_name = $nombre;
                $img_tmp = $galery['tmp_name'][$indice];
                
                $img_name = md5(uniqid()) . "." . explode(".", $img_name)[1];
                move_uploaded_file($img_tmp, "../img/productos/$img_name");

                query("INSERT INTO producto_galeria (producto_id, imagen) VALUES ($last_id, '$img_name')");
                
            }
            setSwal('Ok', 'Producto agregado correctamente', 'success');
            redirect('/admin/productos');
        }
    }

    function get_productosShowAdmin(){
        $res = query("SELECT a.id, a.imagen, a.nombre AS prod_name, a.descripcion, sku, b.nombre AS cat_name, a.precio, a.stock, a.estado FROM productos a INNER JOIN categorias b ON a.categoria_id = b.id");

        while($row = arrayAssoc($res)) {
            $estado = $row['estado'] == '1' ? 'Activo' : 'Agotado';
            $className = $row['estado'] == '1' ? 'activo' : 'agotado';
            $producto = <<<DELIMITER
                <tr data-producto>
                    <td>
                        <div class="adminProductos__contenido__tabla__producto">
                            <img src="../img/productos/{$row['imagen']}" alt="{$row['prod_name']}" />
                            <div><strong>{$row['prod_name']}</strong><span>{$row['descripcion']}</span></div>
                        </div>
                    </td>
                    <td>{$row['sku']}</td>
                    <td>{$row['cat_name']}</td>
                    <td>S/ {$row['precio']}</td>
                    <td>{$row['stock']}</td>
                    <td><span class="adminProductos__contenido__tabla--estado {$className}">{$estado}</span></td>
                    <td>
                        <div class="adminProductos__contenido__tabla__acciones">
                            <a href="producto-detalle.html" aria-label="Ver producto">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="producto-form.html" aria-label="Editar producto">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button type="button" data-eliminar-producto aria-label="Eliminar producto">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </div>
                    </td>
                </tr>
DELIMITER;
            echo $producto;
        }
    }

?>