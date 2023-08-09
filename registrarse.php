<!DOCTYPE html>
<html>

<head>
    <title>REGISTRATE</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css""> -->
    <!-- <link rel=" stylesheet" type="text/css" href="CSS/estilos.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <br>
        <img src="img/logo_porta.png" class="img-fluid col-2"">
    </div>
    <br>
    <div class="container">
    <?php
    include "conexion.php";
    include "CONTROLADOR/registro.php";
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Expires: 0");
    ?>
    <form method="post" class="row g-2 "action="">  
        <div class="col-md-6">
            <label class="formulario_label" for="username">Nombre de usuario:</label><br>
            <input class="casilla form-control" type="text" name="username"><br>
        </div>
        <div class="col-md-6">
            <label class="formulario_label" for="password">Contraseña:</label><br>
            <input class="casilla form-control" type="password" name="password"><br>
        </div>
        <div class="col-md-6">
            <label class="formulario_label" for="nombre">Nombre:</label><br>
            <input class="casilla form-control" type="text" name="nombre"><br>
        </div>
        <div class="col-md-6">
            <label class="formulario_label" for="p_ape">Apellido Paterno:</label><br>
            <input class="casilla form-control" type="text" name="p_ape"><br>
        </div>
            <div>
            <label class="formulario_label" for="s_ape">Apellido Materno:</label><br>
            <input class="casilla form-control" type="text" name="s_ape"><br>
        </div>
        <div class="col-md-6">
            <label class="formulario_label" for="email">E-Mail:</label><br>
            <input class="casilla form-control" type="text" name="email"><br>
        </div>
        <div class="col-md-6">
        <label class="formulario_label" for="genero">Genero(M-F-O):</label><br>
        <input class="casilla form-control" type="text" name="genero"><br>
        </div>
        <div class="col-md-4">
            <label class="formulario_label" for="dni">Número de DNI:</label><br>
            <input class="casilla form-control" type="text" name="dni"><br>
        </div>
        <div class="col-md-4">
        <label class="formulario_label" for="telefono">Número de Celular:</label><br>
            <input class="casilla form-control" type="text" name="telefono"><br>
            
        </div>
        <div class="col-md-4">
            <label class="formulario_label" for="f_nac">Fecha de Nacimiento:</label><br>
            <input class="casilla form-control" type="date" name="f_nac"><br>
        </div>
        <label class="formulario_label" for="ciudad">Ciudad:</label><br>
        <?php
        $sql = $conexion->query("SELECT * FROM mochilas.ciudades");
        echo "<select class='casilla casilla form-control' name='ciudad'>";
        while ($datos = mysqli_fetch_array($sql)) {
            echo "<option value='" . $datos['id_ciudad'] . "'>" . $datos['ciudad'] . "</option>";
        }
        echo "</select>";
        ?>
        <br>
        <input class="btn btn-success" type="submit" name="btn_envio" value="Crear Cuenta" onclick="validarData()">
    </form>
    </div>
    <div class="text-center">
        <div class="registrate"><a href="CONTROLADOR/cerrarsesion.php">¿Ya tienes cuenta? </br> Inicia sesion</a></div>
    </div>
    </div>
   </div>
</body>

<script type="text/javascript">
    function validarData() {
        var username = document.getElementById("username").value;
        if (username.length == 0) {
            alert("El nombre de usuario es obligatorio");
            return false;
        }
        var password = document.getElementById("password").value;
        if (password.length == 0) {
            alert("La contraseña es obligatoria");
            return false;
        }
        var nombre = document.getElementById("nombre").value;
        if (nombre.length == 0 || !/^[a-zA-Z]+$/.test(nombre)) {
            alert("Error en nombre");
            return false;
        }
        var p_ape = document.getElementById("p_ape").value;
        if (p_ape.length == 0 || !/^[a-zA-Z]+$/.test(p_ape)) {
            alert("Error en apellido paterno");
            return false;
        }
        var s_ape = document.getElementById("s_ape").value;
        if (s_ape.length == 0 || !/^[a-zA-Z]+$/.test(s_ape)) {
            alert("Error en apellido materno");
            return false;
        }
        var email = document.getElementById("email").value;
        if (email.length == 0 || !/^[a-zA-Z0-9]+@unsa.edu.pe$/.test(email)) {
            alert("Email Incorrecto(solo formato @unsa.edu.pe)");
            return false;
        }
        var genero = document.getElementById("genero").value;
        var dni = document.getElementById("dni").value;
        var telefono = document.getElementById("telefono").value;
        var f_nac = document.getElementById("f_nac").value;

    }
</script>


</html>