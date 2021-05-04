<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../../models/Game.php');

$gameDAO = new GameDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
//Llamo que hace la edición contra BD
    deleteAction();
}

function deleteAction() {
    $idGame = $_GET["idgame"];

    $gameDAO = new GameDAO();
    $gameDAO->delete($idGame);

    header('Location: ../../../index.php');
}
?>

