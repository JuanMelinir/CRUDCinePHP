<div class="row g-6">
<!--
<div class="table__header">Numero</div>
<div class="table__header">Capacidad</div>
<div class="tablet__header">Habilitada para teatro</div>
<div class="tablet__header">Cronograma</div>-->
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="form-label">Numero</th>
      <th scope="col" class="form-label">Capacidad</th>
      <th scope="col" class="form-label">Habilitada para teatro</th>
      <th scope="col" class="form-label">Cronograma</th>
    </tr>
  </thead>
  <tbody>
<?php
include_once 'includes/conexion1.php';

  $salas="SELECT * FROM sala";
  $resultado=mysqli_query($conexion,$salas);
  while($row=mysqli_fetch_assoc($resultado)){?>
   <tr>
      <td class="form-label"><?php echo $row["id"]?></td>
      <td class="form-label"><?php echo $row["capacidad"]?></td>
      <td class="form-label"><?php if($row["teatro"]==0){echo"no";}else{echo "si";}?></td>
      <td class="form-label"><?php echo $row["cronograma"]?></td>
    </tr>

 <?php }mysqli_free_result($resultado);

?>
</tbody>
</table>
</div>