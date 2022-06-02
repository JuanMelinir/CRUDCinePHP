<?php
require_once 'config/general.controlador.php';

class MenuController extends generalControlador{

    public function listar(){
        $objectMenu=$this->loadModel("MenuModel");
        $dataMenu=$objectMenu->listar();
        print_r($dataMenu);
        echo "estoy en el metodo listar de menu controller";
    }

    public function mostrar(){
        echo "estoy en el metodo mostrar de menu controller"; 
    }
}
?>