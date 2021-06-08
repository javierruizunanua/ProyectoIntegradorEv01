<?php

namespace Artean\Routing;


use App\Controllers\GameController;
use App\Controllers\UserController;
use App\Controllers\ViewController\PrivateViewController;
use App\Controllers\ViewController\PublicViewController;

use App\Utils\Helpers\SessionHelper;

require_once('./app/utils/helpers/SessionHelper.php');


require_once('./app/controllers/GameController.php');

// User controller: Manage authentication and authorization
require_once('./app/controllers/UserController.php');

// Private view controller: Controller for admin access
require_once('./app/controllers/PrivateViewController.php');
// Public view controller: Controller for public access
require_once('./app/controllers/PublicViewController.php');

// Private view routing: Render views for admin access
require_once('./etc/conf/PrivateViewRouting.php');
// Public view: Render views for public access
require_once('./etc/conf/PublicViewRouting.php');

class Routing{

  //private $privateViewRouting;
 // private $publicViewRouting;
  private $viewRouting;
  // Controller for the logic of private pages
  private $privateController;
  // Controller for the logic of public pages
  private $publicController;

  private $gameController;
  private $userController;

  public function __construct(){
     $gameController = new GameController();
     $userController = new UserController();
     $this->privateController = new PrivateViewController();
     $this->publicController = new PublicViewController();

    if(SessionHelper::loggedIn())
    {
      $this->viewRouting =  new PrivateViewRouting($gameController, $userController, $this->privateController);
    }
    else
    {
      $this->viewRouting =  new PublicViewRouting($gameController, $userController, $this->publicController);
    }
  }


  public function checkAuthorization(){
    if(isset($_GET["user"])){
        $this->viewRouting->userManagement();
    }
    // Load logic controller
    else if(isset($_GET["game"])){
      $this->viewRouting->gameManagement();
    }
  }

  public function checkAuthentication(){
    //
    if(SessionHelper::loggedIn()  && ( (! isset($_GET["game"]))  &&  (!  isset($_GET["user"]))   ) )
    {
      // Load view: show page to user
      $this->viewRouting->showPage($this->privateController);
    }
    else if((!  SessionHelper::loggedIn()  && ( (! isset($_GET["game"]))  &&  (!  isset($_GET["user"]))   ) ))
    {
      // Load view: show page to user
      $this->viewRouting->showPage($this->publicController);
    }
  }




}