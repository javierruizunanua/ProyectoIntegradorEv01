<?php
namespace Artean\Routing;

use App\Controllers\ViewController\GenericViewController;
require_once(dirname(__FILE__) .'/GenericRouting.php');

interface IRouting {


  function showPage(GenericViewController $ctr);

  function gameManagement();

  function userManagement();
}