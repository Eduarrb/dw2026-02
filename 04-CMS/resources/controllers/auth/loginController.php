<?php
    function post_validarLogin() {
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = escape(trim($_POST['correo']));
            $password = escape(trim($_POST['password']));
            // coalesing operator
            $recordar = $_POST['recordar'] ?? '';

            // dd($recordar);
            if(strlen($correo) <= 0) {
                $errores['correo'] = "El campo email no debe estar vacio";
            }
            if(empty($password)) {
                $errores['password'] = "El campo password no debe estar vacio";
            }

            if(!empty($errores)) {
                $data['correo'] = $correo;
                return [$errores, $data];
            } else {
                post_loginUsuario($correo, $password, $recordar);
            }

        }
    }

    function post_loginUsuario($correo, $password, $recordar) { 
        $res = query("SELECT * FROM usuarios WHERE correo = '$correo' AND estado = 1");
        if(mysqli_num_rows($res) === 1) {
            $fila = arrayAssoc($res);
            $user_id = $fila['id'];
            $user_nombres = $fila['nombres'];
            $user_apellidos = $fila['apellidos'];
            $user_rol = $fila['rol'];
            $user_pass = $fila['password'];

            if(password_verify($password, $user_pass)) {
                if($recordar === 'on') {
                    setcookie('name', $user_nombres, time() + 3600);
                } else {
                    setcookie('name', $user_nombres, time() + 60 * 2);
                }
                $_SESSION['id'] = $user_id;
                $_SESSION['nombres'] = $user_nombres;
                $_SESSION['apellidos'] = $user_apellidos;
                $_SESSION['rol'] = $user_rol;
                redirect('./');
            } else {
                setSwal('Error', 'Contraseña incorrecta', 'error');
                redirect('./login');
            }
        } else {
            setSwal('Error', 'Credenciales incorrectas', 'error');
            redirect('./login');
        }
    }
?>