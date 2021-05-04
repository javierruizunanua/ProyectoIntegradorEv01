<?php
// Analizo la sesión
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
require_once(dirname(__FILE__) . '/../../../../persistence/DAO/UserDAO.php');

if(isset($_GET["error"])){
    $error = $_GET['error'];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pagina</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="../../../../assets/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../../../../index.php"><img class="img-fluid rounded-sm" src="../../../../assets/img/icono.png" style="width: 50px; height: 50px" alt="icono" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a  class="nav-link " href="login.php">Acceder</a>
                    </li>
                </ul>
            </div>  
        </nav>  
        <!-- Page Content -->
        <div class="container">
            <div class="row m-y-2">
                <div class="col-lg-8 push-lg-4">
                    <form class="form-horizontal" role="form" method="POST" action="../../../controllers/user/insertController.php">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h2>Por favor registrate</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="sr-only" for="username">Username:</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon"></div>
                                        <input type="email" name="username" class="form-control" id="username"
                                               placeholder="vivayo@correo.com" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        <?php
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Contraseña:</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" ></div>
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-control-feedback">
                                    <span class="text-danger align-middle"><?php
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?> 
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success" value="Register" id="register" name="btnsubmit">Acceder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Java Script Boostrap-->
    <script src="../../../../assets/js/bootstrap.min.js"></script>

</body>

</html>
