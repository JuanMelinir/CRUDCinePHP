<?php

class Cronograma{

public $id_cronograma;
public $evento;
public $fecha;
public $hora_inicio;
public $hora_fin;

public function __construct(string $fecha,string $hora_inicio, string $hora_fin){
    $this->fecha=$fecha;
    $this->hora_inicio=$hora_inicio;
    $this->hora_fin=$hora_fin;
}
public function setIdCronograma(int $id){
$this->id_cronograma=$id;
}
public function getIdCronograma(){
return $this->id_cronograma;    
}
public function setFecha(string $fecha){
$this->fecha=$fecha;
}
public function getFecha(){
return $this->fecha;
}
public function setHoraInicio(string $inicio){
$this->inicio=$inicio;
}
public function getHoraInicio(){
return $this->hora_inicio;
}
public function setHoraFin(string $fin){
$this->hora_fin=$fin; 
}
public function getHoraFin(){
return $this->hora_fin;
}

}
?>