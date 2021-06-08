<?php

namespace App\Controllers;

use App\DAO\GameDAO;
use App\Models\Game;

require_once(dirname(__FILE__) . '/../DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../models/Game.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $description = $_POST["description"];
    $cover = $_POST["cover"];
    $price = $_POST["price"];
    $valoration = $_POST["valoration"];
    $company = $_POST["company"];

    $game = new Game();

    $game->setName($name);
    $game->setDescription($description);
    $game->setCover($cover);
    $game->setPrice($price);
    $game->setValoration($valoration);
    $game->setCompany($company);

    $gameDAO = new GameDAO();

    if($_POST["id"]){
        $idgame = $_POST["id"];
        $game->setIdGame($idgame);
        $gameDAO->update($game);
    }
    else{
        $gameDAO->insert($game);
    }

    header('Location: ./../../index.php');
}


class GameController {
  private $header;
  private $navbar;
  private $footer;

  private $gameDAO;


    public function __construct()
    {
        $this->gameDAO = new GameDAO();
    }


    function showInsertAction(){
        $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
        $this->navbar = include(dirname(__FILE__) . '/../private/views/navbar-private.php');
        $content = include(dirname(__FILE__) . '/../private/views/game/game-insert.php');
        $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
        $page = $this->header . $this->navbar .  $content . $this->footer;
        return $page ;
    }

  function showEditAction(){
    $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
    $this->navbar = include(dirname(__FILE__) . '/../private/views/navbar-private.php');
    $content = include(dirname(__FILE__) . '/../private/views/game/game-edit.php');
    $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
    $page = $this->header . $this->navbar .  $content . $this->footer;
    return $page ;
  }

  function getGameToEditAction($id){
    return $this->getGameById($id) ;
  }


    function showDetailsAction($value){
        
        if($value == 'private'){
            $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
            $this->navbar = include(dirname(__FILE__) . '/../private/views/navbar-private.php');
            $content = include(dirname(__FILE__) . '/../private/views/game/game-details.php');
            $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
        }else {
            $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
            $this->navbar = include(dirname(__FILE__) . '/../../public/views/navbar.php');
            $content = include(dirname(__FILE__) . '/../../public/views/game/detail.php');
            $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
        }
        $page = $this->header . $this->navbar .  $content . $this->footer;
        return $page ;
    }


    function getGameDetailsAction($id){
       return $this->getGameById($id);
    }


    function gameDeleteAction(){
        $this->gameDAO->delete($_GET["idgame"]);
      // Give the control to the private site
      header('Location: index.php');
    }


    function getGameById($id) {
      $game = $this->gameDAO->selectById($id);
      return $game;
    }

}