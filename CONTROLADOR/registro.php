<?php
    session_start();
    if(!empty($_POST["btn_envio"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["nombre"]) && !empty($_POST["p_ape"]) && !empty($_POST["s_ape"]) && !empty($_POST["email"]) && !empty($_POST["genero"]) && !empty($_POST["dni"]) && !empty($_POST["telefono"]) && !empty($_POST["f_nac"]) && !empty($_POST["ciudad"])){

            $username = $_POST["username"];
            $password = $_POST["password"];
            $nombre = $_POST["nombre"];
            $p_ape = $_POST["p_ape"];
            $s_ape = $_POST["s_ape"];
            $email = $_POST["email"];
            $genero = $_POST["genero"];
            $dni = $_POST["dni"];
            $telefono = $_POST["telefono"];
            $f_nac = $_POST["f_nac"];
            $ciudad = $_POST["ciudad"];
            $result = $conexion->query("SELECT MAX(id_persona) FROM mochilas.persona");
            $row = $result->fetch_assoc();
            $id_nuevo = $row['MAX(id_persona)'];
            $id_nuevo++;
            $conexion->query("INSERT INTO mochilas.persona (id_persona,nombres,p_apel,s_apel,email,genero,DNI,ciudad) VALUES ('$id_nuevo','$nombre','$p_ape','$s_ape','$email','$genero','$dni','$ciudad')");
            $conexion->query("INSERT INTO mochilas.cliente (id_persona,f_nac,usuario,clave)
            VALUES ('$id_nuevo','$f_nac','$username','$password')");
            $conexion->query("INSERT INTO mochilas.persona_telefono (id_persona,telefono) VALUES ('$id_nuevo','$telefono')");
            echo "<div class= 'alertab'>Usuario creado, inicia sesion</div>";
        }
        else{
            echo "<div class= 'alerta'>Campos vacios</div>";
        }
        

    }
