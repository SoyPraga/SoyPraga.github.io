<?php
session_start();
if(!isset($_REQUEST['id'])){
  header("Location: ../../front-end/privado/login/index.php");
}

include_once '../../../back-end/base_datos/config.php';
include_once '../../../back-end/modelos/usuario_login.php';

$id=$_REQUEST['id'];
$usuario = new Usuarios();
$usuario->id = $id;
$conexion = new Conexion();
$usuario=$usuario->read($conexion->getConection());
?>




<!doctype html>
<html lang="en">

<head>
  <?php
  include_once '../dashboard/head.php';
  ?>

  <title>Dashboard Template · Bootstrap v5.3</title>

</head>

<body>

  <?php
  include_once '../dashboard/header.php';
  ?>

  <div class="container-fluid">
    <div class="row">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              This week
            </button>
          </div>
        </div>
      <?php
      include_once '../dashboard/navbar.php';
      ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">





<form

  class="row g-3 needs-validation"
  novalidate method="POST" enctype="multipart/form-data" 
  action="../../../back-end/controladores/usuario_login_controlador.php">

  <input type="hidden" name="opcion" value="2">
  <input type="hidden" name="id" value="<?php echo $usuario->id?>">


 
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Nombre</label>
    
    <input type="text" class="form-control" id="validationCustom02" name="nombre" 
    value="<?php echo $usuario->nombre?>" required>

  </div>
  

  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Apellido</label>
    
    <input type="text" class="form-control" id="validationCustom02" name="apellido" 
    value="<?php echo $usuario->apellido?>" required>
    <!--     <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Email</label> 
    <span  id="inputGroupPrepend">@ <input type="text" class="form-control" id="validationCustom03" name="email" 
    value="<?php echo $usuario->email?>" required></span>
    
    
    <!--     <div class="invalid-feedback">
      Please provide a valid city.
    </div> -->
  </div>

  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom02" name="password" 
    value="<?php echo $usuario->password?>" required> 
    
  </div>

  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Alias</label>
    <input type="text" class="form-control" id="validationCustom02" name="alias" 
    value="<?php echo $usuario->alias?>" required> 
    
  </div>

 

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Imagen</label>
    <img src="../../../back-end/imagenes/usuarios/<?php echo $usuario->imagen ?>" alt="" width="100">
            <input accept="image/*" input type="file" class="form-control" id="validationCustom03" name="imagen" value="<?php echo $usuario->imagen ?>">
            <input accept="image/*" input type="hidden" class="form-control" id="validationCustom03" name="imagen_ant" value="<?php echo $usuario->imagen ?>">
    <!--     <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>

  <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Estado</label>
          <select class="form-select" id="validationCustom04" name="estado" 
          value="<?php echo $usuario->estado?>" required>
            <option selected disabled value="">Elige</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>

        </div>

        <div class="col-md-5"></div>

        

       





<br>
  <div class="col-3">
    <button class="btn btn-primary" type="submit">Guardar registro</button>
  </div>

</form>


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>