<div class="row g-6">
  <form method='POST'>
    <div class="row g-6">

      <div class="col-6">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" placeholder="nombre" name="nombre" aria-label="First name">
      </div>

      <div class="col-6">
        <label class="form-label">Año</label>
        <?php
        $cont = date('Y');
        ?>
        <select class="form-select" id="anio" name="año">
          <?php while ($cont >= 1990) { ?>
            <option value="<?php echo ($cont); ?>"><?php echo ($cont); ?></option>
          <?php $cont = ($cont - 1);
          } ?>
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
        <label class="form-label">Productora</label>
        <input type="text" class="form-control" name="productora" placeholder="nombre productora" aria-label="First name">
      </div>

      <div class="col-6">
        <label class="form-label">Reparto</label>
        <div class="form-outline">
          <textarea class="form-control" id="reparto" name="reparto" placeholder="nombre y apellido de los actores" rows="4"></textarea>
        </div>
      </div>

    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cargar</button>
    </div>
  </form>
  <?php
  //conecto a la base de datos db_cine
  include_once 'includes/conexion1.php';
//si hay un post ejecuto el siguiente código.
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//obtengo los datos de evento del formulario
    $nombre = trim($_POST['nombre']);
    $año = trim($_POST['año']);
    $estrellas = trim($_POST['estrellas']);
    $duracion = trim($_POST['duracion']);
    $eventos = "INSERT INTO evento(nombre,anio,estrellas,duracion) VALUES ('$nombre','$año','$estrellas','$duracion')";
    $resultado = mysqli_query($conexion, $eventos);
    //controlo mediante $resultado si hubo algún error.
    if ($resultado) {
      echo "se cargo correctamente";
    } else {
      echo $eventos;
    }
     //obtengo los datos de película del formulario
    $productora = trim($_POST['productora']);
    $reparto = trim($_POST['reparto']);
    $last_id = mysqli_insert_id($conexion);
    $peliculas = "INSERT INTO pelicula(id_evento, actores, productora) VALUES ($last_id,'$reparto','$productora')";
    $resultado = mysqli_query($conexion, $peliculas);
     //controlo mediante $resultado si hubo algún error.
    if ($resultado) {
      echo "se cargo correctamente";
    } else {
      echo $peliculas;
    }
  }
  ?>
</div>