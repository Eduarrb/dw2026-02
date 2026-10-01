<?php

    require __DIR__ . "/../public/vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_LAND_LAYOUT") ? null : define("VIEW_LAND_LAYOUT", __DIR__ . DS . "views" . DS . "landing" . DS . "layout");

    defined("VIEW_LAND_HOME") ? null : define("VIEW_LAND_HOME", __DIR__ . DS . "views" . DS . "landing" . DS . "home");

    defined("VIEW_LAND_PRODUCTO") ? null : define("VIEW_LAND_PRODUCTO", __DIR__ . DS . "views" . DS . "landing" . DS . "producto");

    defined("VIEW_LAND_AUTH") ? null : define("VIEW_LAND_AUTH", __DIR__ . DS . "views" . DS . "landing" . DS . "auth");

    /*********************************************** */
    defined("VIEW_ADMIN_LAYOUT") ? null : define("VIEW_ADMIN_LAYOUT", __DIR__ . DS . "views" . DS . "admin" . DS . "layout");

    defined("VIEW_ADMIN_DASH") ? null : define("VIEW_ADMIN_DASH", __DIR__ . DS . "views" . DS . "admin" . DS . "dashboard");

    defined("VIEW_ADMIN_PROD") ? null : define("VIEW_ADMIN_PROD", __DIR__ . DS . "views" . DS . "admin" . DS . "productos");

    require_once 'db.php';

    $db = conectarDB();

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    require_once 'utils/util.php';
    require_once 'caller.php';
?>