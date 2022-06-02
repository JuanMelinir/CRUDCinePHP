<div class="row g-6">

<!--
<div class="table__header">Numero</div>
<div class="table__header">Capacidad</div>
<div class="tablet__header">Habilitada para teatro</div>
<div class="tablet__header">Cronograma</div>-->
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="form-label">Nombre</th>
      <th scope="col" class="form-label">Año</th>
      <th scope="col" class="form-label">Estrellas</th>
      <th scope="col" class="form-label">Duracion</th>
      <th scope="col" class="form-label">Reparto</th>
      <th scope="col" class="form-label">Compañia</th>
      <th scope="col" class="form-label">Escenografia</th>
    </tr>
  </thead>
  <tbody>
<?php
//conecto a la base de datos db_cine
include_once 'includes/conexion1.php';
//creo la consulta para obtener las obras de teatro
  $obras="SELECT * FROM obra_teatro";
  $resultado=mysqli_query($conexion,$obras);
  //una vez obtenidos los datos recorro por fila, es decir cada obra de teatro de la base de datos
  while($row=mysqli_fetch_assoc($resultado)){
  //cada obra de teatro tiene un id_evento
  $id=$row['id_evento'];  
  ?>
   <tr>
   <?php
   //creo la consulta para buscar un evento con ese id en particular
  $evento="SELECT * FROM evento"." WHERE id_evento=${id}";
  $resultado1=mysqli_query($conexion,$evento);
  //obtengo el evento
 $row1=mysqli_fetch_assoc($resultado1)?>
 <!--muestro los datos del evento -->
  <td class="form-label"><?php echo $row1["nombre"]?></td>
  <td class="form-label"><?php echo $row1["anio"]?></td>
  <td class="form-label"><?php echo $row1["estrellas"]?></td>
  <td class="form-label"><?php echo $row1["duracion"]?></td>
   <!--libero a $resultado1 -->
   <?php mysqli_free_result($resultado1);
?> 
<!--muestro los datos de laobra de teatro -->
      <td class="form-label"><?php echo $row["actores"]?></td>
      <td class="form-label"><?php echo $row["compania"]?></td>
      <td class="form-label"><?php if($row["escenografia"]==0){echo"no";}else{echo "si";}?></td>
    </tr>
 <!--libero a $resultado -->
 <?php }mysqli_free_result($resultado);

?>
</tbody>
</table>
</div>