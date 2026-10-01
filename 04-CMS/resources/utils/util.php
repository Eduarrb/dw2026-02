<?php 
    function dd($valor) {
        echo "<pre style='font-size: 1.6rem;'>";
        var_dump($valor);
        echo "</pre>";
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
?>