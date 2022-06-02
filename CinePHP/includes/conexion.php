<?php
require "config/config.php";
class Conexion{
    public static function conect(){
     $mysql=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     $mysql->set_charset(DB_CHARSET);
     if(mysqli_connect_errno()){
        echo "Error en la conexion: ".mysqli_connect_errno();
     }else{
        echo "conexion exitosa";
     }
     return $mysql;
    }
   public static function query($consulta){
   
   }
   }
?>