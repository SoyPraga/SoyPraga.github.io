<!--  <?php 
session_start();
?>  -->

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h3 class="text-white"><?php echo 'Bienvenido:' . $_SESSION['nombre'].''?> </h3>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="../../../back-end/controladores/usuario_login_controlador.php?opcion=5">Cerrar sesión</a>
      </div>
    </div>
  </header>