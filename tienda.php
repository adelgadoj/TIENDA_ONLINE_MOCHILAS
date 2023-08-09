<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA DE MOCHILAS</title>
    <link rel="stylesheet" href="css/estilo_tienda.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




</head>

<body>
    <nav class="navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="tienda.php">
                <img src="img/logo_porta.png" alt="Logo" width="150">
            </a>
        </div>
    </nav>
    <?php
    include "conexion.php";
    // echo "<h1>TIENDA DE MOCHILAS</h1>";
    echo "<div class='menu'>";
    echo "<div class='menu_hijo_bienvenido'><p>Bienvenido ";
    echo $_SESSION["usuario"];
    echo "</p> </div>";
    ?>
    <div class='menu_padre'>
        <a href="carrito.php" class="menu_hijo"><img src="img/carrito2.png" alt="carrito" width="35px"></a>
    </div>
    <div class='menu_padre'>
        <a href="CONTROLADOR/cerrarsesion.php" class="menu_hijo">Cerrar Sesion</a>
    </div>
    </div>

    <?php
    $sql = $conexion->query("SELECT * FROM mochilas.mochila");
    echo "<div class='contenedor'>";
    while ($datos = $sql->fetch_object()) {

        echo "<div class='mochila'>";
        echo "<img class='mochila_img' src='img/$datos->ruta_img' alt='" . $datos->nombre_img . "' width='10%'>";
        echo "<div class='mochila_text'>";
        echo "<p><b>MARCA: </b>" . $datos->marca . "<br>";
        echo "<b>MODELO: </b>" . $datos->nombre_modelo . "<br>";
        echo "<b>PRECIO: </b>" . $datos->precio . "</p> <br>";
        echo "</div>";
        echo "<button class='btn_add'><a href='CONTROLADOR/agregarcarrito.php?id_mochila=$datos->id_mochila' class='sin_sub'>Agregar al carrito</a></button>";
        echo "</div>";
    }
    ?>
    </div>

</body>


</html>