<?php

namespace Artean\Routing;

use App\Controllers\GameController;
use App\Controllers\UserController;
use App\Controllers\ViewController\GenericViewController;

use App\Utils\Helpers\SessionHelper;
require_once('./app/utils/helpers/SessionHelper.php');


require_once('./app/controllers/gameController.php');
$gameController = new GameController();


require_once('./app/controllers/UserController.php');
$userController = new UserController();

require_once('IRouting.php');

abstract class GenericRouting implements IRouting
{
  private $gameController;
  private $userController;

  public function __construct(GameController $game, UserController $usr)
  {
    $this->gameController = $game;
    $this->userController = $usr;
  }


   abstract function showPage(GenericViewController $ctr);


  function gameManagement(){
    switch ($_GET["game"])
    {
      case 'insert':
        echo $this->gameController->showInsertAction();
        break;
      case 'edit':
        echo $this->gameController->showEditAction();
        break;
      case 'details':
        echo $this->gameController->showDetailsAction('private');
        break;
      case 'public-details':
        echo $this->gameController->showDetailsAction('public');
        break;
      case 'delete':
        echo $this->gameController->gameDeleteAction();
        break;
    }
  }

  function userManagement(){
    if(isset($_GET["user"]))
    {
      switch ($_GET["user"])
      {
        case 'login':
          echo $this->userController->showLoginAction();
          break;
        case 'signup':
          echo $this->userController->showSignupAction();
          break;
        case 'logout':
          SessionHelper::destroySession();
          header('Location: ./index.php');
          break;
      }
    }
  }
}







