<div class="row g-6">

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="form-label">Nombre</th>
      <th scope="col" class="form-label">Año</th>
      <th scope="col" class="form-label">Estrellas</th>
      <th scope="col" class="form-label">Duracion</th>
      <th scope="col" class="form-label">Reparto</th>
      <th scope="col" class="form-label">Productora</th>
    </tr>
  </thead>
  <tbody>
<?php
include_once 'includes/conexion1.php';
/*$db=Conexion::conect();*/

  $peliculas="SELECT * FROM pelicula";
  $resultado=mysqli_query($conexion,$peliculas);
  while($row=mysqli_fetch_assoc($resultado)){
  $id=$row['id_evento'];  
  ?>
   <tr>
   <?php
  $evento="SELECT * FROM evento"." WHERE id_evento=${id}";
  $resultado1=mysqli_query($conexion,$evento);
 $row1=mysqli_fetch_assoc($resultado1)?>
  <td class="form-label"><?php echo $row1["nombre"]?></td>
  <td class="form-label"><?php echo $row1["anio"]?></td>
  <td class="form-label"><?php echo $row1["estrellas"]?></td>
  <td class="form-label"><?php echo $row1["duracion"]?></td>
   <?php mysqli_free_result($resultado1);
?>
      <td class="form-label"><?php echo $row["actores"]?></td>
      <td class="form-label"><?php echo $row["productora"]?></td>
    </tr>

 <?php }mysqli_free_result($resultado);

?>
</tbody>
</table>
</div>