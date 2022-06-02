<div class="container-fluid">

<form  method="POST">
<!--
  <div class="form-group">
    <label for="formGroupExampleInput" class="form-label">Numero de sala</label>
    <input type="text" class="form-control .form-control-sm." name="numero sala" placeholder="" >
  </div>-->
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Sala</label>
<select class="form-select" aria-label="Default select example" name="teatro">
  <option selected>si</option>
  <option value="1">no</option>
</select>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Evento</label>
<select class="form-select" aria-label="Default select example" name="teatro">
  <option selected>si</option>
  <option value="1">no</option>
</select>
  </div>
  <h3>Horarios</h3>
  <div class="form-row">
        <div class="col-auto">
          <label for="" class="form-label">Fecha</label>
          <input type="text" class="form-control" name="nombreActor" id="nombreActor" placeholder="">
        </div>
        <div class="col-auto">
          <label for="" class="form-label">Hora inicio</label>
          <input type="text" class="form-control" name="apellidoActor" id="apellidoActor" placeholder="">
        </div>
        <div class="col-auto">
          <label for="" class="form-label">Hora fin</label>
          <input type="text" class="form-control" name="apellidoActor" id="apellidoActor" placeholder="">
        </div>
     </div>
  <!--
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Cronograma</label>
<select class="form-select" aria-label="Default select example">
  <option selected>si</option>
  <option value="1">no</option>
</select>
  </div>-->
  <button type="submit" class="btn " name='registrarSala' >cargar</button>
</form>

<?php
/*
include ('guardarSala.php');
*/
include_once 'includes/conexion.php';
$db=Conexion::conect();
if($_SERVER['REQUEST_METHOD']=='POST'){

  $teatro=trim($_POST['teatro']);
  if($teatro=='si'){
  $valor=true;
  }else{
  $valor=false;  
  }
  $json="";
  $capacidad=trim($_POST['capacidad']);
  $db->query("INSERT INTO salas(capacidad, teatro,cronograma) VALUES ('$capacidad','$valor','$json')");
}
?>
</div>