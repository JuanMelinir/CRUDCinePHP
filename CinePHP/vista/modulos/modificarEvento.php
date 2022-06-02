<div class="container-fluid">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarPelicula') ? 'active' : '' ?>" aria-current="page" href="index.php?ruta=cargarPelicula">Peliculas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarObraTeatro') ? 'active' : '' ?>" href="index.php?ruta=cargarObraTeatro">Obras de teatro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarObraTeatro') ? 'active' : '' ?>" href="index.php?ruta=cargarSala">Salas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarObraTeatro') ? 'active' : '' ?>" href="index.php?ruta=cargarFuncion">Funciones</a>
    </li>
  </ul>

  <?php
  if (isset($_GET["ruta"])) {
    $ruta = $_GET["ruta"];
    if ($ruta == 'cargarObraTeatro') {
      require("cargarObraTeatro.php");
    } else if ($ruta=="cargarPelicula") {
      require("cargarPelicula.php");
    }
  }else{
    require("cargarPelicula.php");
  }
  ?>
</div>
