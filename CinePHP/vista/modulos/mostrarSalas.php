<div class="row g-6">
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
//conecto a la base de datos db_cine
include_once 'includes/conexion1.php';
//creo la consulta para obtener las salas
  $salas="SELECT * FROM sala";
  $resultado=mysqli_query($conexion,$salas);
  //obtengo las salas
  while($row=mysqli_fetch_assoc($resultado)){?>
   <tr>
       <!--muestro los datos de las salas -->
      <td class="form-label"><?php echo $row["id"]?></td>
      <td class="form-label"><?php echo $row["capacidad"]?></td>
      <td class="form-label"><?php if($row["teatro"]==0){echo"no";}else{echo "si";}?></td>
      <td class="form-label"><?php echo $row["cronograma"]?></td>
    </tr>
 <!--libero a $resultado1 -->
 <?php }mysqli_free_result($resultado);

?>
</tbody>
</table>
</div>