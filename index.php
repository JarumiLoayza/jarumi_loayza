<?php
include "includes/config.php";
session_start();

if (isset($_SESSION["user_email"])) {
    header("Location: todos.php");
    die();
}
?>

<!doctype html>
<html lang="en">

<head>

    <?php getHead(); ?>
<style type="text/css">



.container.col-xl-10.col-xxl-8.px-4.py-5 .row.align-items-center.g-lg-5.py-5 .col-lg-7.text-center.text-lg-start {
	font-family: Lucida Console, Monaco, monospace;
	color: #006;
}
.container.col-xl-10.col-xxl-8.px-4.py-5 .row.align-items-center.g-lg-5.py-5 .col-lg-7.text-center.text-lg-start .display-4.fw-bold.lh-1.mb-3 em {
	font-family: Lucida Console, Monaco, monospace;
}
.container.col-xl-10.col-xxl-8.px-4.py-5 .row.align-items-center.g-lg-5.py-5 .col-lg-7.text-center.text-lg-start .display-4.fw-bold.lh-1.mb-3 em {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
.titulo {
	height: 50px;
	width: 50px;
}
</style>
</head>


                <h2 align="center" class="display-4 fw-bold lh-1 mb-3"><em> <font color="#000000"> Registrate para almacenar tu<br>
Todo_List <body style="background-image:url(img/fondo.jpg)" </em></h2>
<div align="center"><strong>crea tu lista de tarea gratis</strong> <img src="img/check.png" width =40;
height =40; </div>          
  </div>
</div>
            <div class="col-md-10 mx-auto col-lg-50">
              <form action="login.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <strong>
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  Correo Electronico</strong></div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <strong>                        Contraseña
                    </strong></div>
                <button name="submit" class="w-100 btn btn-lg btn-success" type="submit"><strong>REGISTRARME</strong></button>
                  <div align="center">Aceptaras los terminos de uso<small class="text-muted"></small>
                </div>
              </form>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>