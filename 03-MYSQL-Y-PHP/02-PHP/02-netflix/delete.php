<?php
    ob_start();
    include 'db.php';

    $id = $_GET['id'];
    $query = "DELETE FROM peliculas WHERE peli_id = $id";
    mysqli_query($con, $query);

    header("Location: ./");
?>