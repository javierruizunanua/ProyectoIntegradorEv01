<?php

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
    
    
    function privateGame2HTML() {
        
        $result = '<div class="col-md-4">';
            $result .= '<div class="card" style="width: 20rem;">';
                $result .= '<div class="card-header">';
                    $result .= '<h1 class="card-title text-center text-primary">' . $this->getName() . '</h1>';
                $result .= '</div>';
                $result .= ' <img class="card-img-top rounded mx-auto d-block avatar" src='.$this->getCover().' alt="Card image cap">';
                $result .= '<div class="card-body">';
                    $result .= '<div class="card-block">';
                        $result .= '<h3 class="card-subtitle mb-2 text-success">Price: ' . $this->getPrice() . ' €</h3>';
                        $result .= '<h5 class="card-subtitle mb-2 text-secondary">Valoration: ' . $this->getValoration() . '</h5>';
                        $result .= '<p class=" card-text description">Description: '.$this->getDescription().'</p>';
                        $result .= '<p class="card-text"><small class="text-muted">Made by: '.$this->getCompany().'</small></p>';              
                    $result .= '</div>';
                $result .= '</div>';
                $result .= ' <div  class=" btn-group card-footer" role="group">';
                    $result .= '<a type="button" class="btn btn-secondary" href="../../private/views/game/detail.php?idgame='.$this->getIdGame().'">Ver Detalles</a>';
                    $result .= '<a type="button" class="btn btn-success" href="../../private/views/game/edit.php?idgame='.$this->getIdGame().'">Modificar</a> ';
                    $result .= '<a type="button" class="btn btn-danger" href="../../controllers/game/deleteController.php?idgame='.$this->getIdGame().'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg></a> ';
                $result .= ' </div>';
            $result .= '</div>';
        $result .= '</div>';
        
        return $result;
    }
        
 
    
    function publicGame2HTML() {
        $result = '<div class="col-md-4">';
            $result .= '<div class="card" style="width: 20rem;">';
                $result .= '<div class="card-header">';
                    $result .= '<h1 class="card-title text-center text-primary">' . $this->getName() . '</h1>';
                $result .= '</div>';
                $result .= ' <img class="card-img-top rounded mx-auto d-block avatar" src='.$this->getCover().' alt="Card image cap">';
                $result .= '<div class="card-body">';
                    $result .= '<div class="card-block">';
                        $result .= '<h3 class="card-subtitle mb-2 text-success">Price: ' . $this->getPrice() . ' €</h3>';
                        $result .= '<h5 class="card-subtitle mb-2 text-secondary">Valoration: ' . $this->getValoration() . '</h5>';
                        $result .= '<p class=" card-text description">Description: '.$this->getDescription().'</p>';
                        $result .= '<p class="card-text"><small class="text-muted">Made by: '.$this->getCompany().'</small></p>';              
                    $result .= '</div>';
                $result .= '</div>';
                $result .= ' <div  class=" btn-group card-footer" role="group">';
                    $result .= '<a type="button" class="btn btn-secondary" href="../../public/views/game/detail.php?idgame='.$this->getIdGame().'">Ver Detalles</a>';
                $result .= ' </div>';
            $result .= '</div>';
        $result .= '</div>';

        return $result;
    }
    
    
}
