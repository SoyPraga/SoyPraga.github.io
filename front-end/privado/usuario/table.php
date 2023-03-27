<?php 
include_once '../../../back-end/base_datos/config.php';
include_once '../../../back-end/modelos/usuario.php';

$usuario =new Usuario();
$conexion=new Conexion();
$usuarios=$usuario->read_all($conexion->getConection());
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">email</th>
      <th scope="col">direccion</th>
      <th scope="col">tarjeta</th>
      <th scope="col">contacto</th>
      <th scope="col">estado</th>
      <th scope="col">editar</th>
      <th scope="col">borrar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
foreach($usuarios as $usuario){
     ?>

    <tr>
      <th scope="row"><?php echo $usuario->id ?></th>
      <td><?php echo $usuario->nombre ?></td>
      <td><?php echo $usuario->apellido ?></td>
      <td><?php echo $usuario->email ?></td>
      <td><?php echo $usuario->direccion ?></td>
      <td><?php echo $usuario->tarjeta ?></td>
      <td><?php echo $usuario->contacto ?></td>
      <td><?php echo $usuario->estado ?></td>
      <td><a href="edit.php?id=<?php echo $usuario->id?>">editar</a></td>
      <td><a href="show.php?id=<?php echo $usuario->id?>"">borrar</a></td>
    </tr>
    <?php 
    
     }
    ?>
  </tbody>
</table>