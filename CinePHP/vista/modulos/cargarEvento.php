<div class="container-fluid">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarPelicula') ? 'active' : '' ?>" aria-current="page" href="index.php?ruta=cargarPelicula">Pelicula</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarObraTeatro') ? 'active' : '' ?>" href="index.php?ruta=cargarObraTeatro">Obra de teatro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarSala') ? 'active' : '' ?>" href="index.php?ruta=cargarSala">Sala</a>
    </li>
  </ul>

  <?php

  if (isset($_GET["ruta"])) {
    $ruta = $_GET["ruta"];
    if ($ruta == 'cargarObraTeatro' ) {
      require("cargarObraTeatro.php");
    } else if ($ruta=="cargarPelicula" || $ruta=="cargarEvento") {
      require("cargarPelicula.php");
    }else if($ruta=="cargarSala"){
      require("cargarSala.php");
    }
  }else{
    require("cargarPelicula.php");
  }
  ?>
</div>

