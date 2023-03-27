<?php
include_once '../../../back-end/base_datos/config.php';
include_once '../../../back-end/modelos/usuario_login.php';

$user=new Usuarios();
$conexion = new Conexion();
$us=$user->read_all($conexion->getConection());
?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alias</th>
            <th>Imagen</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($us as $u){ ?>
            <tr>
                <th scape="row"><?php echo $u->id?></th>
                <td><?php echo $u->nombre?></td>
                <td><?php echo $u->apellido?></td>
                <td><?php echo $u->email?></td>
                <td><?php echo $u->password?></td>
                <td><?php echo $u->alias?></td>
                <td><img src="../../../back-end/imagenes/usuarios/<?php echo $u->imagen?>" alt="" width="100px"></td>
                <td><?php echo $u->estado?></td>
                <td><a href="edit.php?id=<?php echo $u->id?>">Editar</a></td>
                <td><a href="show.php?id=<?php echo $u->id?>">Borrar</a></td>
   
            </tr>
            <?php } ?>
    </tbody>
</table>