<?php
class ObraDeTeatro extends Evento{
    public id;
    public compania;
    public escenografia;
    public actores;

    public function __construct(string $compania, bool $escenografia,array $actores){
    $this->compania=$compania;
    $this->escenografia=$escenografia;
    $this->actores=array();
    }
    public function setId(int $id){
    $this->id=$id;
    }
    public function getId(){
    $this->id;
    }
    public function setCompania(string $compania){
    $this->compania=$compania;   
    }
    public function getCompania(){
    return $this->compania;   
    }
    public function setEscenografia(bool $escenografia){
    $this->escenografia;    
    }
    public function getEscenografia(){
    return $this->escenografia;    
    }
    public function setActores(array $actores){
    $this->actores=$actores;    
    }
    public function getActores(){
    return $this->actores;    
    }
}
?>