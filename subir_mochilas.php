<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR MOCHILAS</title>
</head>

<body>
    <h1>SUBIR MOCHILAS</h1>
    <form action="CONTROLADOR/subir.php" method="post" enctype="multipart/form-data">
        <label for="">Nombre del modelo: </label>
        <input type="text" name="nombre_modelo" id="nombre_modelo">
        <br>
        <label for="">Marca: </label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="">Stock: </label>
        <input type="number" name="stock" id="stock">
        <br>
        <label for="">Precio: </label>
        <input type="number" name="precio" id="precio">
        <br>
        <label for="">Fecha: </label>
        <input type="date" name="f_ingreso" id="f_ingreso">
        <br>
        <label for="">Nombre imagen: </label>
        <input type="text" name="nombre_img" id="nombre_img">
        <label for="">Subir Imagen: </label>
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" value="Subir">

    </form>

</body>

</html>