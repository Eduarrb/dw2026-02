<?php
    if(!isset($_GET['email']) || !isset($_GET['token'])) {
        setSwal('Error', 'Credenciales invalidas o faltantes', 'error');
        redirect('./register');
    } else {
        post_activateUser();
    }

?>