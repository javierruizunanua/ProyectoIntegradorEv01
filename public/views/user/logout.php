<?php
// Gestión de sesión
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
SessionHelper::destroySession();
$salir = "<div class='main'>Has salido de tu sesión. ";
// redirección a la pantalla principal
header('Location: ../index.php');
?>

