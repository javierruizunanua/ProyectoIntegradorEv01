<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../../models/Game.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $idgame = $_POST["idgame"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $cover = $_POST["cover"];
    $price = $_POST["price"];
    $valoration = $_POST["valoration"];
    $company = $_POST["company"];
    

    $game = new Game();
    $game->setIdGame($idgame);
    $game->setName($name);
    $game->setDescription($description);
    $game->setCover($cover);
    $game->setPrice($price);
    $game->setValoration($valoration);
    $game->setCompany($company);

    $gameDAO = new GameDAO();
    $gameDAO->update($game);

    header('Location: ../../../index.php');
}

?>

