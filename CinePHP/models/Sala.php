<?php

require_once '../../includes/conexion.php';

class Sala extends Conexion{

public $id;
public $capacidad;
public $teatro;
public $cronograma;

public function __construct(int $id,int $capacidad,bool $teatro,array $cronograma){
    $this->id=$id;
    $this->capacidad=$capacidad;
    $this->teatro=$teatro;
    $this->cronograma=$cronograma;
}

public function setId(int $id){
$this->id=$id;
}
public function setCapacidad(int $capacidad){
$this->capacidad=$capacidad;
}
public function setTeatro(bool $teatro){
$this->teatro=$teatro;
}
public function setCronograma(array $cronograma){
$this->cronograma=$cronograma;
}
public function getId(){
return $this->id;    
}
public function getCapacidad(){
return $this->capacidad;
}
public function getTeatro(){
return $this->teatro;
}
public function getCronograma(){
return $this->cronograma;
}
}
?>