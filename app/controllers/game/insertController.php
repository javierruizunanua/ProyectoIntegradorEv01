<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../../models/Game.php');
require_once(dirname(__FILE__) . '/../../models/validations/ValidationsRules.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Llamo a la función en cuanto se redirija el action a esta página
    createAction();
}

function createAction() {
    
    $name = ValidationsRules::test_input($_POST["name"]);
    $description = ValidationsRules::test_input($_POST["description"]);
    $cover = ValidationsRules::test_input($_POST["cover"]);
    $price = ValidationsRules::test_input($_POST["price"]);
    $valoration = ValidationsRules::test_input($_POST["valoration"]);
    $company = ValidationsRules::test_input($_POST["company"]);
    
    // Creación de objeto auxiliar   
    $game = new Game();
    $game->setName($name);
    $game->setDescription($description);
    $game->setCover($cover);
    $game->setPrice($price);
    $game->setValoration($valoration);
    $game->setCompany($company);

    //Creamos un objeto GameDAO para hacer las llamadas a la BD
    $gameDAO = new GameDAO();
    $gameDAO->insert($game);
    
    header('Location: ../../../index.php');
    
}
?>

