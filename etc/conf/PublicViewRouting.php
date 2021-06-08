<?php

namespace Artean\Routing;

use App\Controllers\GameController;
use App\Controllers\UserController;
use App\Controllers\ViewController\GenericViewController;
use App\Controllers\ViewController\PublicViewController;

require_once(dirname(__FILE__) .'/GenericRouting.php');

require_once(dirname(__FILE__) .'/../../app/controllers/GameController.php');
require_once(dirname(__FILE__) .'/../../app/controllers/UserController.php');

require_once(dirname(__FILE__) .'/../../app/controllers/PublicViewController.php');


class PublicViewRouting extends GenericRouting{


  public $controller;

  public function __construct(GameController $game, UserController $usr, PublicViewController $ctr){
    parent::__construct($game, $usr);
    $controller = $ctr;
  }
  /***
   * Show functions
   */

  function showPage(GenericViewController $ctr){
    $this->controller = $ctr;

    ob_end_clean();

    if(isset($_GET["goto"]))
    {
      if($_GET["goto"] == 'games'){
        echo $this->controller->showGamesAction();
      }
      else{

        echo $this->controller->showContentPageAction($_GET["goto"]);
      }
    }
    else{

      $_GET["goto"] = 'introduction';
      echo $this->controller->showContentPageAction($_GET["goto"]);
    }
  }


}