<?php

namespace App\DAO;

use App\Utils\PersistentManager;
use App\Models\User;

require_once(dirname(__FILE__) . '\..\utils\PersistentManager.php');

class UserDAO {

    //Se define una constante con el nombre de la tabla
    const USER_TABLE = 'users';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    
    public function selectAll() {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $users= array();
        while ($userBD = mysqli_fetch_array($result)) {

            $user = new User();
            $user->setIdUser($userBD["iduser"]);
            $user->setUsername($userBD["username"]);
            $user->setPassword($userBD["password"]);
            
            array_push($users, $user);
        }
        return $users;
    }
    
    
    public function checkExists($user) {
        $query = "SELECT username, password FROM " . UserDAO::USER_TABLE . " WHERE username=? AND password=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxUsername = $user->getUsername();
        $auxPass =  $user->getPassword();
                 
        mysqli_stmt_bind_param($stmt, 'ss', $auxUsername, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt); 
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)         
            return true;
        else
            return false;
    }
    
    
    public function selectById($id) {
        $query = "SELECT username, password FROM " . UserDAO::USER_TABLE . " WHERE iduser=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $username, $password);

        $user = new User();
        while (mysqli_stmt_fetch($stmt)) {
            $user->setIdUser($id);
            $user->setUsername($username);
            $user->setPassword($password);
       }

        return $user;
    }
    
    
    public function update($user) {
        $query = "UPDATE " . UserDAO::USER_TABLE .
                " SET username=?, password=?"
                . " WHERE iduser=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $username = $user->getUsername();
        $password= $user->getPassword();
        $id = $user->getIdUser();
        mysqli_stmt_bind_param($stmt, 'ssi', $username, $password, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . UserDAO::USER_TABLE . " WHERE iduser =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

    /* Función de login de usuario */

    public function login($username, $password) {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE .
                " WHERE username='" . $username . "' AND password='" .
                $password . "'";
        $result = mysqli_query($this->conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $userBD = mysqli_fetch_array($result);
         
            $user = new User();
            $user->setIdUser($userBD['iduser']);
            $user->setUsername($userBD['username']);
            $user->setPassword($userBD['password']);

            return $user;
        } 
        return null;
    }


    public function insert($user) {
        
        $query = "INSERT INTO " . UserDAO::USER_TABLE . " (username, password) VALUES(?, ?)";
        $stmt = mysqli_prepare($this->conn, $query);
        
        $username = $user->getUsername();
        $password = $user->getPassword();
        
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        return $stmt->execute();
    }
      
}

?>
