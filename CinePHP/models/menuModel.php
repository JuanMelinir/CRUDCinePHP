<?php
require_once 'includes/conexion.php';

class menuModel extends Conexion{

    public function registrar($tabla,$datos){
        return $this->grabarData($tabla,$datos);
    }
    public function listar($tabla){
        return $this->obtenerData("SELECT * FROM $tabla);
    }
}
?>