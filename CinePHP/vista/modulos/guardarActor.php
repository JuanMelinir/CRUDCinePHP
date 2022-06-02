<?php

$nombre=$_POS['nombreActor'];
$apellido=$_POST['apellidoActor'];
$array=array("nombre"->$nombre,"apellido"->$apellido);
console.log($_POS['nombre']):
if(file_exists("actores.json")){
$contenido=file_get_contents("actores.json");
$data=json_encode($contenido);
array_push($data,$array);
file_put_contents("actores.json",json_encode($data));
}else{
$data=array();
array_push($data,$array);
$f=fopen("actores.json","w");
fwrite($f,json_encode($data));
fclose($f);
}
header("Location:cargarPelicula.php");

?>