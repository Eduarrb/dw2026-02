<?php
    function post_validarRegistro() {
        $errores = [];
        $data = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombres = escape(trim($_POST['nombres']));
            $apellidos = escape(trim($_POST['apellidos']));
            $correo = escape(trim($_POST['correo']));
            $telefono = escape(trim($_POST['telefono']));
            $password = escape(trim($_POST['password']));
            $confirmPasword = escape(trim($_POST['confirmacion']));

            if(empty($nombres)) {
                $errores['nombres'] = "El campo nombres no debe estar vacio";
            }
            if(empty($apellidos)) {
                $errores['apellidos'] = "El campo apellidos no debe estar vacio";
            }
            if(empty($correo)) {
                $errores['correo'] = "El campo correo no debe estar vacio";
            }
            if(validarCorreo($correo)) {
                $errores['correo'] = "El correo ya esta registrado";
            }
            if(empty($telefono)) {
                $errores['telefono'] = "El campo teléfono no debe estar vacio";
            }
            if(empty($password)) {
                $errores['password'] = "El campo password no debe estar vacio";
            }
            if($password !== $confirmPasword) 
                $errores['confirmPassword'] = "Las contraseñas no coinciden";

            if(!empty($errores)) {
                $data['nombres'] = $nombres;
                $data['apellidos'] = $apellidos;
                $data['correo'] = $correo;
                $data['telefono'] = $telefono;
                return [$errores, $data];
            }

            else {
                post_registarUsuario($nombres, $apellidos, $correo, $telefono, $password);
            }
        }
    }

    function post_registarUsuario(String $nombres, $apellidos, $correo, $telefono, $password) {
        $res = query("INSERT INTO usuarios (nombres, apellidos, correo, telefono, password) VALUES ('$nombres', '$apellidos', '$correo', '$telefono', '$password')");
    }
?>