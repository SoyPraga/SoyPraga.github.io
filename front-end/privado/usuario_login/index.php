<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../login/login.php");
}
?>


<!doctype html>
<html lang="en">

<head>
  <?php
  include_once '../dashboard/head.php';
  ?>

  <title>Usuarios</title>

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
        <?php
        include_once 'create.php';
        include_once 'table.php';
        ?>
      </main>
    </div>
  </div>


</body>

</html>