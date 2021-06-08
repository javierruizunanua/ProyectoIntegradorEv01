<?php
namespace App\Models;

class Game {

    private $idgame;
    private $name;
    private $description;
    private $cover;
    private $price;
    private $valoration;
    private $company;

    //Constructor
    public function __construct() {
        
    }

    //Getters
    public function getIdGame() {
        return $this->idgame;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public  function getCover() {
        return $this->cover;
    }
    
    public  function getPrice() {
        return $this->price;
    }
    
    public  function getValoration() {
        return $this->valoration;
    }
    
    public  function getCompany() {
        return $this->company;
    }
    
    //Setters
    public function setIdGame($idgame) {
        $this->idgame = $idgame;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    function setCover($cover) {
        $this->cover = $cover;
    }
    
    function setPrice($price) {
        $this->price = $price;
    }
    
    function setValoration($valoration) {
        $this->valoration = $valoration;
    }
    
    function setCompany($company) {
        $this->company = $company;
    }
    
}
