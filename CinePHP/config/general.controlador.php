<?php
class generalControlador{
    public function loadModel($nombreModelo){
    require_once 'models/'.'$nombreModelo'.'.php';
    return new nombreModel();
    }
}
?>