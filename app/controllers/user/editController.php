<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../models/User.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $userid = $_POST["iduser"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User();
    $user->setIdUser($userid);
    $user->setUsername($username);
    $user->setPassword($password);

    $userDAO = new UserDAO();
    $userDAO->update($user);

    header('Location: ../../index.php');
}

?>

