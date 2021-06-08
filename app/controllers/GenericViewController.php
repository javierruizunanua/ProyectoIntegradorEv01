<?php

namespace App\Controllers\ViewController;
use App\DAO\GameDAO;

abstract class GenericViewController{

  function getActualGamesAction() {
    $gamesDAO = new GameDAO();
    return $gamesDAO->selectAll();
  }

 
  abstract function showGamesAction();

  abstract function showContentPageAction();
}