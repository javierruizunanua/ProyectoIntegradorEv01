<?php

session_start([
    'cookie_lifetime' => 86400,
]);

// Realizando la llamada al script functions establezco la conexión con base de datos
require_once(dirname(__FILE__) . '/../utils/SessionHelper.php');

$userstr = ' (Invitado)';
// Gestión de la sesión de usuario
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else{
    $loggedin = FALSE;
   
}
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$appname $userstr" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
    </head>
    <body>   
        <?php    
        if ($loggedin)
        {
            // En caso de tener una sesión registrada con antelación mostramos las opciones avanzadas de la aplicación
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="img-fluid rounded-sm" src="/../assets/img/icono.png" style="width: 50px; height: 50px" alt="icono"></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                        <li class="nav-item">
                           <a class="nav-link" href="app/logout.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php
        }
        else
        {
            // En caso de ser usuario no registrado, (Invitado)  
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <a class="navbar-brand" href="index.php"><img class="img-fluid rounded-sm" src="https://image.flaticon.com/icons/png/128/1474/1474155.png" style="width: 50px; height: 50px" alt="icono"></a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                         <li class="nav-item">
                              <a class="nav-link" href="app/signup.php">Registrarse</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="app/login.php">Entrar</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
        <?php
        }
        ?>

        <script src="assets/js/bootstrap.min.js"></script>