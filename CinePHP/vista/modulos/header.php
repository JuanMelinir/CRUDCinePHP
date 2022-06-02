<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><div class="imgLogo">
					<img class="img-fluid" src="vista/assets/img/logoCinepolis.png">
				</div></a>
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarEvento') ? 'active' : '' ?>"   aria-current="page" href="index.php?ruta=cargarEvento">Cargar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'mostrar') ? 'active' : '' ?>" href="index.php?ruta=mostrar">Mostrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'cargarPelicula') ? 'active' : '' ?>"  href="index.php?ruta=modificar">Modificar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (isset($_GET["ruta"]) && $_GET["ruta"] == 'login') ? 'active' : '' ?>"  href="index.php?ruta=login">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>