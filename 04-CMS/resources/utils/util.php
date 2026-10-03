<?php 
    function dd($valor) {
        echo "<pre style='font-size: 1.6rem;'>";
        var_dump($valor);
        echo "</pre>";
        die();
    }

    function escape($valor) {
        global $db;
        return mysqli_real_escape_string($db, $valor);
    }

    function getDato($array, $index, $key) {
        if(isset($array[$index][$key])) {
            return $array[$index][$key];
        } else {
            return '';
        }
    }

    function query($query) {
        global $db;
        return mysqli_query($db, $query);
    }

    function validarCorreo($correo) {
        $res = query("SELECT * FROM usuarios WHERE correo = '$correo'");

        if(mysqli_num_rows($res) > 0) {
            return true;
        } 
        return false;
    }

    function redirect(String $url) {
        header("Location: $url");
    }

    function setSwal($titulo, $texto, $icono) {
        if(!empty($titulo)) {
            $_SESSION['titulo'] = $titulo;
            $_SESSION['texto'] = $texto;
            $_SESSION['icono'] = $icono;
        } else {
            $titulo = '';
            $texto = '';
            $icono = '';
        }
    }

    function showSwalMensaje() {
        if(isset($_SESSION['titulo'])) {
            $titulo = $_SESSION['titulo'];
            $texto = $_SESSION['texto'];
            $icono = $_SESSION['icono'];

            $script = <<<DELIMITADOR
                <script>
                    showSwal("$titulo", "$texto", "$icono");
                </script>
DELIMITADOR;
            echo $script;
            unset($_SESSION['titulo'], $_SESSION['texto'], $_SESSION['icono']);
        }
    }

?>