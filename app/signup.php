<?php

require_once(dirname(__FILE__) . '/../templates/header_app.php');
require_once(dirname(__FILE__) . '/../persistence/conf/PersistentManager.php');
require_once(dirname(__FILE__) . '/../persistence/DAO/UserDAO.php');

$error = $user = $pass = "";

if (isset($_POST['user'])) {
    
  // TODO Realiza la lectura de los campos del formulario en $user y $pass
  // $user=""
  // $pass=""
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "" || $pass == "") {
        $error = "Debes completar todos los campos<br><br>";
    }
    else {
        $uDAO = new UserDAO();
        
        //$result = queryMysql("SELECT * FROM usuarios WHERE user='$user'");

        if ($uDAO->checkUserNameExists($user))
        {
            $error = "<span class='error'>Ya se ha registrado con ese usuario</span><br><br>";
        }
        else {
            $result = $uDAO->insert($user, $pass);
            //queryMysql("INSERT INTO usuarios(user,pass) VALUES('$user', '$pass')");

            $sh = new SessionHelper();
            $sh->setSession($user);
            
            header('Location: login.php?');

    }
  }
}
?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="signup.php">
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
                    <label class="sr-only" for="email">Email:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i
                                    class="fa fa-at"></i></div>
                        <input type="text" name="user" class="form-control"
                               id="email"
                               placeholder="vivayo@correo.com" required
                               autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <i class="fa fa-close"></i> <?php
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
                        <div class="input-group-addon" style="width: 2.6rem"><i
                                    class="fa fa-key"></i></div>
                        <input type="password" name="pass"
                               class="form-control" id="password"
                               placeholder="Password" required>
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

        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i
                            class="fa fa-sign-in"></i> Acceder
                </button>
            </div>
        </div>
    </form>
</div>
