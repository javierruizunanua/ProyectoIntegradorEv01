<?php

namespace Artean\Routing;


use App\Controllers\GameController;
use App\Controllers\UserController;
use App\Controllers\ViewController\PrivateViewController;
use App\Controllers\ViewController\GenericViewController;


require_once(dirname(__FILE__) .'/GenericRouting.php');

require_once(dirname(__FILE__) .'/../../app/controllers/GameController.php');
require_once(dirname(__FILE__) .'/../../app/controllers/UserController.php');
require_once(dirname(__FILE__) .'/../../app/controllers/PrivateViewController.php');



class PrivateViewRouting extends GenericRouting{

  public $controller;

  public function __construct(GameController $game, UserController $usr, PrivateViewController $ctr){
    parent::__construct($game, $usr);
    $controller = $ctr;
  }


  function showPage(GenericViewController $ctr){
    $this->controller = $ctr;

    if(isset($_GET["edit"])){
      if($_GET["edit"] == 'games'){
        echo $this->controller->showGamesAction();
      }else{
        echo $this->controller->showContentPageAction();
      }
    } else{
      echo $this->controller->showGamesAction();
    }
  }

}