<?php
namespace App\Models;
class User {

    //Atributos
    private $iduser;
    private $username;
    private $password;


    //Getters
    public function getIdUser() {
        return $this->userid;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    //Setters
    public function setIdUser($iduser) {
        $this->iduser = $iduser;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

?>
