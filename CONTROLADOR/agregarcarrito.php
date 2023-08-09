<?php
session_start();
include "../conexion.php";
if (!empty($_SESSION["id_usuario"])) {
    if (!empty($_GET["id_mochila"])) {
        $id_mochila = $_GET["id_mochila"];
        $sql = $conexion->query("SELECT * FROM mochilas.mochila WHERE id_mochila = $id_mochila");
        if ($datos = $sql->fetch_object()) {
            $id_mochila = $datos->id_mochila;
            $marca = $datos->marca;
            $nombre_modelo = $datos->nombre_modelo;
            $precio = $datos->precio;
            $ruta_img = $datos->ruta_img;
            $nombre_img = $datos->nombre_img;
            $sql2 = $conexion->query("INSERT INTO mochilas.carrito (id_mochila,marca,nombre_modelo,precio,ruta_img,nombre_img) VALUES ('$id_mochila','$marca','$nombre_modelo','$precio','$ruta_img','$nombre_img')");
            if ($sql2) {
                header("Location: ../tienda.php");
            } else {
                echo "Error al agregar al carrito";
            }
        } else {
            echo "Error al agregar al carrito";
        }
    } else {
        echo "Error al agregar al carrito";
    }
} else {
    header("Location: ../index.php");
}
