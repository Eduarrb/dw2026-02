<?php
    ob_start();
    session_start();
    
    require __DIR__ . "/../public/vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    require_once 'routes/landingRoutes.php';

    require_once 'routes/adminRoutes.php';

    require_once 'db.php';

    $db = conectarDB();

    require_once 'utils/util.php';
    require_once 'utils/sendEmail.php';
    require_once 'caller.php';
?>