<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use App\Models\User;
use App\Utils\Helpers\SessionHelper;

require_once(dirname(__FILE__) . '/../utils/helpers/SessionHelper.php');


require_once(dirname(__FILE__) . '/../DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../models/User.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST['btnregister']))
  {
    createAction();
  }
  else
  {
    checkAction();
  }
}



function checkAction() {
    
  $user = new User();
  $user->setUsername($_POST["username"]);
  $user->setPassword($_POST["password"]);

  $userDAO = new UserDAO();
  
  if($userDAO->checkExists($user))
  {
    SessionHelper::startSessionIfNotStarted();
    SessionHelper::setSession($user->getUsername());
  }


  header('Location: ../../index.php');
}


function createAction() {
  $user = new User();
  $user->setUsername($_POST["username"]);
  $user->setPassword($_POST["password"]);


  $userDAO = new UserDAO();
  $userDAO->insert($user);

  SessionHelper::setSession($user->getUsername());

  header('Location: ../../index.php');
}


class UserController {

  private $header;
  private $navbar;
  private $footer;


  function showSignupAction(){
    $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
    $this->navbar = include(dirname(__FILE__) . '/../../public/views/navbar.php');
    $content = include(dirname(__FILE__) . '/../../public/views/user/signup.php');
    $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
    $page = $this->header . $this->navbar .  $content . $this->footer;
    return $page;
  }

  function showLoginAction(){
    $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
    $this->navbar = include(dirname(__FILE__) . '/../../public/views/navbar.php');
    $content = include(dirname(__FILE__) . '/../../public/views/user/login.php');
    $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
    $page = $this->header . $this->navbar .  $content . $this->footer;
    return $page;
  }

}