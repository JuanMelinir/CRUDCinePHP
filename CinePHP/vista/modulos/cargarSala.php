<?php
include 'includes/conexion1.php';
include_once 'models/Cronograma.php';
include_once 'models/Cronogramas.php';
?>
<div class="container-fluid">

  <h3 class="text-center mb-4">Cargar sala</h3>

  <form method="POST">
  <div class="row align-items-start">
  <div class="col">
      <label class="form-label">Obras de teatro</label>
      <select class="form-select" aria-label="Default select example" name="teatro">
        <option selected>si</option>
        <option value="1">no</option>
      </select>
    </div>

    <div class="col">
      <label class="form-label">Capacidad</label>
      <input type="number" min="1" max="400" class="form-control .form-control-sm." name="capacidad" placeholder="">
    </div>
</div>
    

    <h5 class="text-center mb-4 form-label">Cargar cronograma</h5>
    <form  method="POST"action="Cronogramas.php">
    <div class="form-group">
    <div class="row align-items-start">
    <div class="col">
    <label class="col-sm3 form-label">Evento</label>
      <select class="form-select" aria-label="Default select example" name="evento">
        <option selected>si</option>
      <?php

/*$db=Conexion::conect();*/

  $eventos="SELECT * FROM evento";
  $resultado=mysqli_query($conexion,$eventos);
  
  while($row=mysqli_fetch_assoc($resultado)){
    if($row["teatro"]==0){$rta="pelicula";}else{$rta="obra";}
    ?>
   <option selected><?php echo $row["nombre"]."-".$rta?></option>

 <?php }mysqli_free_result($resultado);

?>
    </select>
    </div>

    <div class="col">
    <label class="col-sm3 form-label">Fecha</label>
      <input type="date" min="2021-01-01" max=" ${<?php date("Y-m-d"); ?>}" class="form-control" id="inputPassword2" name="fecha" placeholder="día/mes/año" required>
      <?php 
      if(isset($_POST["fecha"])){
        $format = "d/m/Y H:i:s-H:i:s";
        $dateobj = DateTime::createFromFormat($format, $_POST["fecha"]); 
      }
     ?>
    </div>

    <div class="col">
    <label class="col-sm1 form-label">Hora inicio</label>
      <input type="time" class="form-control" id="horaInicio" name="hora_inicio"  value='00:00:00' placeholder="horas:minutos:segundos" required>
    </div>

    <div class="col">
    <label class="col-sm1 form-label">Hora fin</label>
      <input type="time" min="" class="form-control" id="horaFin" name="hora_fin" value='00:00:00' placeholder="horas:minutos:segundos" required>
    </div>
    
  </div>

  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Agregar al cronograma</button>
  </div>
  </form>
    </div>



<div class="form-group">
      <label class="form-label">Cronograma</label>
      <div class="row g-6">
<table class="table">
  <thead>
    <tr>
    <th scope="col" class="form-label">ID</th>
    <th scope="col" class="form-label">Evento</th>
    <th scope="col" class="form-label">Fecha</th>
    <th scope="col" class="form-label">Hora inicio</th>
    <th scope="col" class="form-label">Hora fin</th>
    <th scope="col" class="form-label">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $cronograma = $crono_anterior=file_get_contents('cronogramas.json');
    $crono_anterior=json_decode($crono_anterior, true);
    $index_num = 0;
    foreach($crono_anterior as $un_elemento) {
    $index_num++;

    ?>
  <td class="form-label"><?php echo ($un_elemento["id"])?></td>  
  <td class="form-label"><?php echo ($un_elemento["evento"])?></td>
  <td class="form-label"><?php echo ($un_elemento["fecha"])?></td>
  <td class="form-label"><?php echo ($un_elemento["hora_inicio"])?></td>
  <td class="form-label"><?php echo ($un_elemento["hora_fin"])?></td>
 <form method="POST" >
  <td class="form-label"><input type="hidden" name="borrar" value="<?php echo $index_num?>" ><button type="submit" class="btn btn-primary" >Borrar</button></td>
  </form> 
</tr>
      <?php
    }  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                          
      function eliminar(){

          if(file_exists('cronogramas.json')) { 
              $crono_anterior=file_get_contents('cronogramas.json');
              $crono_anterior=json_decode($crono_anterior, true);
              $index_num = 0;
   foreach($cronograma as $un_elemento) {
   $index_num++;
   if($index_num++ == $_POST['borrar']) {
   unset($crono_anterior[$_POST['borrar']]);
   }
   return json_encode($crono_anterior);
   }                     
   
          }
          
      }
 
   }
        ?>
</tbody>
</table>
</div>

      <button type="submit" class="btn btn-primary" name='registrarSala'>Borrar</button>
    </div>
<button type="submit" class="btn btn-primary" name='registrarSala'>cargar</button>

  </div>
    
