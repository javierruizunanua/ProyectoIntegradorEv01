<?php

namespace App\DAO;

use App\Utils\PersistentManager;
use App\Models\Game;

require_once(dirname(__FILE__) . '\..\utils\PersistentManager.php');

class GameDAO {

    //Se define una constante con el nombre de la tabla
    const GAMES_TABLE = 'games';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . GameDAO::GAMES_TABLE;
        $result = mysqli_query($this->conn, $query);
        $games = array();
        while ($gameRow = mysqli_fetch_array($result)) {

            $game = new Game();
            $game->setIdGame($gameRow["idgame"]);
            $game->setName($gameRow["name"]);
            $game->setDescription($gameRow["description"]);
            $game->setCover($gameRow["cover"]);
            $game->setPrice($gameRow["price"]);
            $game->setValoration($gameRow["valoration"]);
            $game->setCompany($gameRow["company"]);
            
            array_push($games, $game);
        }
        return $games;
    }

    public function insert($game) {
        $query = "INSERT INTO " . GameDAO::GAMES_TABLE .
                " (name, description, cover, price, valoration, company) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $game->getName();
        $description = $game->getDescription();
        $cover = $game->getCover();
        $price = $game->getPrice();
        $valoration = $game->getValoration();
        $company = $game->getCompany();
        
        mysqli_stmt_bind_param($stmt, 'sssdds', $name, $description, $cover, $price, $valoration, $company);
        return $stmt->execute();
    }

    public function selectById($idgame) {
        $query = "SELECT name, description, cover, price, valoration, company FROM " . GameDAO::GAMES_TABLE . " WHERE idgame=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idgame);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $cover, $price, $valoration, $company);

        $game = new Game();
        while (mysqli_stmt_fetch($stmt)) {
            $game->setIdGame($idgame);
            $game->setName($name);
            $game->setDescription($description);
            $game->setCover($cover);
            $game->setPrice($price);
            $game->setValoration($valoration);
            $game->setCompany($company);
            
       }

        return $game;
    }

    public function update($game) {
        $query = "UPDATE " . GameDAO::GAMES_TABLE .
                " SET name=?, description=?, cover=?, price=?, valoration=?, company=?"
                . " WHERE idgame=?";
        $stmt = mysqli_prepare($this->conn, $query);
        
        $name = $game->getName();
        $description= $game->getDescription();
        $cover = $game->getCover();
        $price = $game->getPrice();
        $valoration = $game->getValoration();
        $company = $game->getCompany();
        
        $idgame = $game->getIdGame();
        mysqli_stmt_bind_param($stmt, 'sssddsi', $name, $description, $cover, $price, $valoration, $company, $idgame);
        return $stmt->execute();
    }
    
    public function delete($idgame) {
        $query = "DELETE FROM " . GameDAO::GAMES_TABLE . " WHERE idgame=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idgame);
        return $stmt->execute();
    }

        
}

?>
