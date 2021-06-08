<?php

use Artean\Routing\Routing;

    require_once(dirname(__FILE__) . '/etc/conf/Routing.php');

    $routing = new Routing( );
    checkSecurity($routing);


    function checkSecurity(Routing $facade){
        // Check user
        $facade->checkAuthentication();
        // The facade determines which view must show
        $facade->checkAuthorization();
    }
