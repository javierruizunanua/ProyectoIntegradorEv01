<?php

namespace App\Controllers;

use App\DAO\ContentDAO;
use App\Models\Content;

require_once(dirname(__FILE__) . '/../DAO/ContentDAO.php');
require_once(dirname(__FILE__) . '/../models/Content.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pagecontentDAO =  new ContentDAO();
    $content = new Content();
    if(isset($_POST['introduction'])){
        $content->setPage('introduction');
        $content->setContent($_POST['introduction']);
    }else  if(isset($_POST['games'])){
        $content->setPage('games');
        $content->setContent($_POST['games']);
    }

    $content->setModifyName('admin');
    $content->setModifyDate(date("Y-m-d H:i:s"));
    $content = $pagecontentDAO->update($content);
    // Give the control to the private site
    header('Location: ../../index.php');
}


class ContentController
{

    function getContentAction($pagename)
    {
        $pagecontentDAO =  new ContentDAO();
        $content = $pagecontentDAO->selectByPage($pagename);
        return $content->getContent();
    }

}