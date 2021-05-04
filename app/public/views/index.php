<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../controllers/indexController.php');
//Recupero de la BD todos los empleos a través del controlador
$games = indexAction();
// Gestión de sesión
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Game</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <a class="navbar-brand" href="#"><img class="img-fluid rounded-sm" src="../../../assets/img/icono.png" style="width: 50px; height: 50px" alt="icono" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  class="nav-link " href="user/signup.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link " href="user/login.php">Login</a>
                    </li>
                    <li class="nav-item ">

                    </li>
                </ul>
                   <span class='badge badge-danger mr-2'> regístrate o inicia sesión</span>
                   <form class="form-inline" role="form" method="POST" action="../../controllers/user/userController.php">
                            <input type="text" name="username" class="form-control" id="username"
                                   placeholder="yoxti@ejemplo.com" required autofocus>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Contraseña" required>
                        <button type="submit" class="btn btn-success" value="Login" id="login" name="btnsubmit">Acceder</button>
                    </form> 
            </div>  
        </nav>

        </br>
        <!-- Games Cards -->
            <?php
            for ($i = 0; $i < sizeof($games); $i+=3) {
            ?>
                <div class="card-group">
                <?php
                for ($j = $i; $j < ($i + 3); $j++) {
                    if (isset($games[$j])) {

                        echo $games[$j]->publicGame2HTML();
                    }
                }
                ?>
                </div> 
            <?php
            }
            ?>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; A. F. 2017</p>
            </div>
        </div>
    </footer>
    
    <!-- Java Script Boostrap-->
    <script src="../../../assets/js/bootstrap.min.js" ></script>
</body>
</html>
