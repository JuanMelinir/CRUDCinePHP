


<div class="row g-6">
<form >
<div class="row g-6">
  <div class="col-6">
  <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="nombre obra" aria-label="First name">
  </div>
  <div class="col-6">
  <label class="form-label">Año</label>
  <?php
    $cont = date('Y');
    ?>
    <select class="form-select"  id="anio" name="año">
    <?php while ($cont >= 1990) { ?>
    <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
    <?php $cont = ($cont-1); } ?>
    </select>
  </div>

</div>

<div class="row g-6">
  <div class="col-6">
  <label class="form-label">Estrellas</label>
  <input type="number" class="form-control" min="1" max="5" name="estrellas" placeholder="cantidad" aria-label="First name">
  </div>
  <div class="col-6">
  <label class="form-label">Duracion</label>
  <input type="text" class="form-control" name="duracion" placeholder="cantidad en minutos" aria-label="Last name">
  </div>
  </div>

  <div class="row g-6">
  <div class="col-6">
  <label class="form-label">Compañia</label>
  <input type="text" class="form-control" name="compania" placeholder="nombre compañia" aria-label="First name">
  </div>
  <div class="col-6">
  <label class="form-label">Reparto</label>
  <div class="form-outline">
   <textarea class="form-control" id="reparto" name="reparto" placeholder="nombre y apellido de los actores" rows="4"></textarea>
   </div>
  </div>
</div>
<div class="row g-6">
  <div class="col-6">
  <label class="form-label">Escenografia</label>
       <select class="form-select" aria-label="Default select example" name="escenografia" id="escenografia">
       <option selected>si</option>
       <option value="1">no</option>
       </select>
  </div>

<div class="col-12">
<button type="submit" class="btn btn-primary">Cargar</button>
</div>
</div>
</form>
<?php
include_once 'includes/conexion1.php';

  if($_SERVER['REQUEST_METHOD']=='POST'){

    $nombre=trim($_POST['nombre']);
    $año=trim($_POST['anio']);
    $estrellas=trim($_POST['estrellas']);
    $duracion=trim($_POST['duracion']);
    $eventos="INSERT INTO evento(nombre,anio,estrellas,duracion) VALUES ('$nombre','$año','$estrellas','$duracion')";
    $resultado=mysqli_query($conexion,$eventos);
    if($resultado){
    /*echo "se cargo correctamente";
    echo $last_id=mysqli_insert_id($conexion);*/
    }else{
      echo $eventos;
    }
    $compania=trim($_POST['compania']);
    $reparto=trim($_POST['reparto']);
    $escenografia=trim($_POST['escenografia']);
    if($escenografia=='si'){
    $valor=true;
    }else{
    $valor=false;  
    }
    $last_id=mysqli_insert_id($conexion);
    $obras="INSERT INTO obra_teatro(id_evento, actores, compania, escenografia) VALUES ('$last_id','$reparto','$compania','$valor')";
    $resultado=mysqli_query($conexion,$obras); 
    if($resultado){
      echo "se cargo correctamente";
      }else{
        echo $obras;
      }
  }
  print_r($_SESSION['cronogramas']);
  ?>
   
</div>









