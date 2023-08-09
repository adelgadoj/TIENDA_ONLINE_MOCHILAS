<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGAR</title>
    <link rel="stylesheet" href="css/estilos_pago.css">
</head>

<body>
    <div class="titulo">
        <div class="titulo_hijo1">
            <h1>PAGAR CON TARJETA</h1>
        </div>

        <div class="titulo_hijo2">
            <a class="titulo_a" href="tienda.php" class="btn_volver">Volver a la tienda</a>
            <a class="titulo_a" href="CONTROLADOR/cerrarsesion.php" class="btn_cerrar">Cerrar Sesion</a>
            <a class="titulo_a" href="pagar.php" class="btn_pagar">Pagar</a>
        </div>
    </div>
    <div class="formulario">
        <form class="form_padre" action="">
            <div class="form_hijo">
                <label for="">Nombre del titular: </label>
                <input type="text" name="nombre_titular" id="nombre_titular">
            </div>
            <div class="form_hijo">
                <label for="">Numero de tarjeta: </label>
                <input type="number" name="numero_tarjeta" id="numero_tarjeta">
            </div>
            <div class="form_hijo">
                <label for="">CCI: </label>
                <input type="number" name="cci" id="cci">
            </div>
            <div class="form_hijo">
                <label for="">Fecha de vencimiento: </label>
                <input type="number" name="fecha_vencimiento_mes" id="fecha_vencimiento_mes" placeholder="Mes">
                <input type="number" name="fecha_vencimiento_año" id="fecha_vencimiento_año" placeholder="Año">
            </div>
            <div class="form_hijo">

                <label for="">Codigo de seguridad: </label>
                <input type="number" name="codigo_seguridad" id="codigo_seguridad">
            </div>
            <div class="form_hijo_paga">

                <input type="submit" value="Pagar">
            </div>
        </form>
    </div>



</body>

</html>