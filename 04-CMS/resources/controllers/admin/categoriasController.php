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

            $res = query("INSERT INTO categorias (usuario_id, nombre, slug, orden, estado, descripcion, imagen) VALUES ($_SESSION[id], '$nombre', '$slug', $orden, $estado, '$descripcion', '$imagenName')");

            if($res) {
                setSwal('OK', 'Categoria agregada correctamente', 'success');
                redirect("/admin/categorias");
            }
        }
    }

    function get_adminCategorias() {
        $res = query("SELECT id, nombre, slug, estado, descripcion, imagen FROM categorias");
        if($res) {
            while($row = arrayAssoc($res)) {
                // dd($row);
                $estado = $row['estado'] == '1' ? 'Activo' : 'Inactivo';
                $className = $row['estado'] == '1' ? 'activo' : 'inactivo';
                $categoria = <<<DELIMITER
                    <tr data-categoria>
                        <td>
                            <div class="adminCategorias__contenido__tabla__categoria">
                                <img src="../img/categorias/{$row['imagen']}" alt="{$row['nombre']}" />
                                <div><strong>{$row['nombre']}</strong><span>{$row['descripcion']}</span></div>
                            </div>
                        </td>
                        <td>{$row['slug']}</td>
                        <td>24 productos</td>
                        <td><span class="adminCategorias__contenido__tabla--estado {$className}">{$estado}</span></td>
                        <td>
                            <div class="adminCategorias__contenido__tabla__acciones">
                                <a href="/admin/categoria_detalle?id={$row['id']}" aria-label="Ver categoría">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="/admin/categoria_edit?id={$row['id']}" aria-label="Editar categoría">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <button 
                                    type="button" 
                                    data-eliminar-categoria
                                    aria-label="Eliminar categoría"
                                    data-name={$row['nombre']}
                                    data-id={$row['id']}
                                >
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
DELIMITER;
            echo $categoria;
            }
        }
    }

    function post_deactivateCategory() {
        if(!isset($_GET['id'])) {
            setSwal("Error", "Datos de categoria incorrectos", "error");
            redirect('/admin/categorias');
        } else {
            $id = escape(trim($_GET['id']));
            $cat_res = query("SELECT * FROM categorias WHERE id = $id");
            $cat_fila = arrayAssoc($cat_res);
            if($cat_fila['estado'] != 1) {
                setSwal("Error", "La categoria ya esta desactivada", "error");
                redirect('/admin/categorias');
            } else {
                $res = query("UPDATE categorias SET estado = 0 WHERE id = $id");
                if($res) {
                    setSwal("Ok", "Categoria desactivada correctamente", "succes");
                    redirect("/admin/categorias");
                }
            }
            
        }
    }

    function get_adminCategoriasSelect(){
        $res = query("SELECT id, nombre FROM categorias WHERE estado = 1");
        while($row = arrayAssoc($res)) {
            $categoria = <<<DELIMITER
                <option value="{$row['id']}">{$row['nombre']}</option>
DELIMITER;
            echo $categoria;
        }
    }
?>