<?php

namespace App\Controllers\ViewController;

require_once(dirname(__FILE__) . '/../DAO/GameDAO.php');
require_once(dirname(__FILE__) . '/../models/Game.php');

require_once(dirname(__FILE__) . '/GenericViewController.php');


class PrivateViewController extends GenericViewController {

    private $header;
    private $navbar;
    private $footer;

    function showGamesAction(){
        $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
        $this->navbar = include(dirname(__FILE__) . '/../private/views/navbar-private.php');
        $content = include(dirname(__FILE__) . '/../private/views/game/game-admin.php');
        $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
        $page = $this->header . $this->navbar .  $content . $this->footer ;
        
        return $page;
    }

    function showContentPageAction(){
        $this->header = include(dirname(__FILE__) . '/../../templates/header.php');
        $this->navbar = include(dirname(__FILE__) . '/../private/views/navbar-private.php');
        $content = include(dirname(__FILE__) . '/../private/views/game/game-admin.php');
        $this->footer = include(dirname(__FILE__) . '/../../templates/footer.php');
        $page = $this->header . $this->navbar .  $content . $this->footer;
        
        return $page;
    }
}