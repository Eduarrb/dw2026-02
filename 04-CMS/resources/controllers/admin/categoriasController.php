<?php
    function post_categoriaAdd() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = escape(trim($_POST['nombre']));
            $slug = escape(trim($_POST['slug']));
            $estado = escape(trim($_POST['estado']));
            $orden = escape(trim($_POST['orden']));
            $descripcion = escape(trim($_POST['descripcion']));

            $imagenName = escape(trim($_FILES['imagen']['name']));
            $imgTmp = $_FILES['imagen']['tmp_name'];

            $imagenName = md5(uniqid()) . "." . explode(".", $imagenName)[1];
            move_uploaded_file($imgTmp, "../img/categorias/$imagenName");

            $res = query("INSERT INTO categorias (usuario_id, nombre, slug, orden, estado, descripcion, imagen) VALUES ($_SESSION[id], '$nombre', '$slug', $estado, $orden, '$descripcion', '$imagenName')");

            if($res) {
                setSwal('OK', 'Categoria agregada correctamente', 'success');
                redirect("/admin/categorias");
            }
        }
    }
?>