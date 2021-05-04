<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../models/Game.php');


function indexAction() {
    $gameDAO = new GameDAO();
    return $gameDAO->selectAll();
}

?>