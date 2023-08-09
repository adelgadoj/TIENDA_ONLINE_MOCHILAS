<?php
include "../conexion.php";

// Comprobar si se ha enviado una imagen

if (isset($_FILES["image"])) {
    $nombre_modelo = $_POST["nombre_modelo"];
    $marca = $_POST["marca"];
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];
    $f_ingreso = $_POST["f_ingreso"];
    $nombre_img = $_POST["nombre_img"];
    $image = $_FILES["image"];
    $name = $image["name"];
    $tmp_name = $image["tmp_name"];
    $result = $conexion->query("SELECT MAX(id_mochila) FROM mochilas.mochila");
    $row = $result->fetch_assoc();
    $id_nuevo = $row['MAX(id_mochila)'];
    $id_nuevo++;

    // Validar datos de la imagen

    if ($nombre_modelo && $marca && $stock && $precio && $f_ingreso && $nombre_img) {
        // Subir imagen al servidor
        move_uploaded_file($tmp_name, "../img/" . $name);
        $conexion->query("INSERT INTO mochilas.mochila (id_mochila,nombre_modelo,marca,stock,precio,f_ingreso,nombre_img,ruta_img) VALUES ('$id_nuevo','$nombre_modelo','$marca','$stock','$precio','$f_ingreso','$nombre_img', '$name')");
        // Insertar datos de la imagen en la base de datos

        // Mostrar mensaje de éxito
        //echo "Imagen subida con éxito";
        echo "<script>
            window.location.href = '../subir_mochilas.php';
            </script>";
    } 

}


?>