<div class="container-fluid">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'mostrarPeliculas') ? 'active' : '' ?>" aria-current="page" href="index.php?ruta=mostrarPeliculas">Peliculas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'mostrarObrasTeatro') ? 'active' : '' ?>" href="index.php?ruta=mostrarObrasTeatro">Obras de teatro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'mostrarSalas') ? 'active' : '' ?>" href="index.php?ruta=mostrarSalas">Salas</a>
    </li>
    <!--  
    <li class="nav-item">
      <a class="nav-link form-label <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'mostrarFunciones') ? 'active' : '' ?>" href="index.php?ruta=mostrarFunciones">Funciones</a>
    </li>-->
  </ul>

  <?php

if (isset($_GET["ruta"])) {
  $ruta = $_GET["ruta"];
  if ($ruta == 'mostrarObrasTeatro' ) {
    require("mostrarObrasTeatro.php");
  } else if ($ruta=="mostrarPeliculas" || $ruta=="mostrar") {
    require("mostrarPeliculas.php");
  }else if($ruta=="mostrarSalas"){
    require("mostrarSalas.php");
  }
}else{
  require "mostrarPeliculas.php";
}
  ?>
</div>