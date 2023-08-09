<?php
    include "../conexion.php";
    session_start();
    
    if(!empty($_SESSION["id_usuario"])){
        if(!empty($_GET["id_mochila"])){
            $id_mochila = $_GET["id_mochila"];
            $sql = $conexion->query("SELECT * FROM mochilas.mochila WHERE id_mochila = $id_mochila");
            if($datos = $sql->fetch_object()){
                $sql2 = $conexion->query("INSERT INTO mochilas.carrito(id_mochila,marca,nombre_modelo,precio,ruta_img,nombre_img) VALUES ('$id_mochila','$datos->marca','$datos->nombre_modelo','$datos->precio','$datos->ruta_img','$datos->nombre_img')");
                if($sql2){
                    header("Location: ../tienda.php");
                }
                else{
                    echo "Error al agregar al carrito";
                }
            }
            else{
                echo "Error al agregar al carrito";
            }
        }
        else{
            echo "Error al agregar al carrito";
        }
    }
    else{
        header("Location: ../index.php");
    }


?>