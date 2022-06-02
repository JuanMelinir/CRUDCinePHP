<?php
class Pelicula extends Evento{

    public $id;
    public $actores;
    public $productora;

    public function __construct(array $actores, int $productora){
    $this->actores=$actores;
    $this->productora=$productora;
    }
    public function setId(int $id){
    $this->id=$id;
    }
    public function getId(){
    $this->id;
    }
    public function setActores(array $actores){
    $this->actores=$actores;   
    }
    public function getActores(){
    return $this->actores;   
    }
    public function setProductora(int $productora){
    $this->productora=$productora;    
    }
    public function geProductora(){
    return $this->productora;    
    }
}
?>