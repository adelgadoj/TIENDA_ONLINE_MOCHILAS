<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <div class="bienvenida">
    <div class="formulario">
      <form method="post" action="">
        <?php
        include "conexion.php";
        include "CONTROLADOR/login.php";
        ?>
        <section class="vh-100">
          <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
              <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="img/porta.png" class="img-fluid" alt="Phone image">
              </div>
              <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form>
                  <div class="text-center">
                    <img src="img/login.png" class="img-fluid col-4" width="40%">
                  </div>
                  <!-- <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button><br><br> -->
                  <!-- Email input -->
                  <div class="form-outline mb-4 ">
                    <!-- <input type="email" id="form1Example13" class="form-controkl form-control-lg" /> -->
                    <label class="formulario_label" name="username_login" for="username_login">Nombre de usuario:</label><br>
                    <input class="casilla form-control" type="text" name="username_login"><br>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <!-- <input type="password" id="fkorm1Example23" class="form-control form-control-lg" /> -->
                    <label class="formulario_label" name="password_login" for="password_login">Contraseña:</label><br>
                    <input class="casilla form-control" type="password" name="password_login"><br><br>
                  </div>



                  <!-- Submit button -->
                  <div class="text-center">
                    <input class="boton btn btn-primary btn-lg btn-block" type="submit" name="btn_envio_login" value="Iniciar sesión">
                    <div class=""><a href=" registrarse.php" style="text-decoration: none; color:black;">¿Aun no tienes cuenta? </br> <b>Registrate aqui</b></a></div>
                  </div>

                  <div class="divider d-flex align-items-center my-4">

                </form>
              </div>
            </div>
          </div>
        </section>
      </form>
    </div>
  </div>
</body>

</html>