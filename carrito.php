<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRITO</title>
    <link rel="stylesheet" href="css/estilos_carrito.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="titulo">
        <div class="titulo_hijo1">
            <h1>CARRITO DE COMPRAS</h1>
        </div>

        <div class="titulo_hijo2">
            <a class="titulo_a" href="tienda.php" class="btn_volver">Volver a la tienda</a>
            <a class="titulo_a" href="CONTROLADOR/cerrarsesion.php" class="btn_cerrar">Cerrar Sesion</a>
            <a class="titulo_a" href="pagar.php" class="btn_pagar">Pagar</a>
        </div>
    </div>

    <?php
    include "conexion.php";
    $sql = $conexion->query("SELECT id_mochila,marca,nombre_modelo,SUM(precio) AS precio_total,COUNT(*) AS cantidad FROM carrito GROUP BY id_mochila, marca;");
    echo "<div class='contenedor'>";

    while ($datos = $sql->fetch_object()) {
        echo "<div class='mochila'>";

        $sql2 = $conexion->query("SELECT * FROM mochila WHERE id_mochila=$datos->id_mochila");
        while ($datos2 = $sql2->fetch_object()) {
            echo "<img class='mochila_img' src='img/$datos2->ruta_img' alt=' '>";
        }
        echo "<div class='mochila_text'>";
        echo "<p><b>MARCA: </b>" . $datos->marca . "<br>";
        echo "<b>MODELO: </b>" . $datos->nombre_modelo . "<br>";
        echo "<b>CANTIDAD: </b>" . $datos->cantidad . "<br>";
        echo "<b>PRECIO: </b>" . $datos->precio_total . "</p>";
        echo "</div>";
        echo "<button class='btn_add'><a href='CONTROLADOR/eliminarcarrito.php?id_mochila=$datos->id_mochila'>Eliminar del carrito</a></button>";
        echo "</div>";
    }
    echo "</div>";
    ?>



</body>
<script>
    $(document).ready(function() {
        setInterval(function() {
            location.reload();
        }, 1000); 
    });
</script>

</html>