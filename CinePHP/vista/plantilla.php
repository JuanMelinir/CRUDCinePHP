<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas cine</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="vista/assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<?php
/*
include_once __DIR__.'../../includes/conexion.php';
$db=Conexion::conect();*/
include "modulos/header.php";

?>
<div class="container-fluid">
<?php 
if (isset($_GET["ruta"])) {
    $ruta = $_GET["ruta"];
    if ($ruta == 'cargarEvento' || $ruta == 'cargarPelicula' || $ruta == 'cargarObraTeatro' || $ruta == 'cargarSala' || $ruta == 'cargarFunciones') {
      include "modulos/cargarEvento.php";
    } else if ($ruta=='mostrar' || $ruta == 'mostrarPeliculas' || $ruta == 'mostrarObrasTeatro' || $ruta == 'mostrarSalas' || $ruta == 'mostrarFunciones') {
        include "modulos/mostrar.php";
    }else if($ruta=='modificar'){
        include "modulos/modificarEvento.php";
    }else if($ruta=='salir'){
        include "modulos/login.php"; 
    }
  }else{
      
    /*include "modulos/cargarEvento.php";*/
  }
    


    
?>
</div> 
</body>
</html>