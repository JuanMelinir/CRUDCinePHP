<?php
class Evento{

public $id;
public $nombre;
public $anio;
public $estrellas;
public $duracion;

public function __construct(string $nombre,int $anio,int $estrellas,int $duracion){
    $this->nombre=$nombre;
    $this->anio=$anio;
    $this->estrellas=$estrellas;
    $this->duracion=$duracion;
}

public function setId(int $id){
$this->id=$id;
}
public function setAnio(int $anio){
$this->anio=$anio;
}
public function setEstrellas(int $estrellas){
$this->estrellas=$estrellas;
}
public function setDuracion(int $duracion){
$this->cronograma=$cronograma;
}
public function getId(){
$this->id;
}
public function getAnio(){
return $this->anio;
}
public function getEstrellas(){
return $this->estrellas;
}
public function getduracion(){
return $this->duracion;
}
}
?>