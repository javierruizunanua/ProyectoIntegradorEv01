<?php
namespace App\DAO;
use App\Utils\PersistentManager;
use App\Models\Content;
require_once(dirname(__FILE__) . '\..\utils\PersistentManager.php');


class ContentDAO
{
    //Se define una constante con el nombre de la tabla
    const CONTENT_TABLE = 'contents';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectByPage($page) {
        $query = "SELECT content, modify_name, modify_date FROM " . ContentDAO::CONTENT_TABLE . " WHERE page=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $page);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $content, $modify_name, $modify_date);

        $pagecontent = new Content();

        while (mysqli_stmt_fetch($stmt)) {
            $pagecontent->setContent($content);
            $pagecontent->setModifyDate($modify_date);
            $pagecontent->setModifyName($modify_name);
        }
        
        return $pagecontent;
    }

    public function update($pagecontent) {
        $query = "UPDATE " . ContentDAO::CONTENT_TABLE .
            " SET content=?, modify_name=?, modify_date=?"
            . " WHERE page=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $content = $pagecontent->getContent();
        $modify_name= $pagecontent->getModifyName();
        $modify_date = $pagecontent->getModifyDate();
        $page = $pagecontent->getPage();
        mysqli_stmt_bind_param($stmt, 'ssss', $content, $modify_name, $modify_date, $page);
        return $stmt->execute();
    }

}



