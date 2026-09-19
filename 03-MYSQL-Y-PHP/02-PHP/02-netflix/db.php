<?php
    $con = mysqli_connect('localhost', 'root', 'web12345678', 'netflix');
    if(!$con) {
        echo 'error en la conexion';
        exit;
    }
?>