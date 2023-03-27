<?php

include_once '../base_datos/config.php';
include_once '../modelos/usuario_login.php';


$opcion = $_REQUEST['opcion'];


switch($opcion){
       case 1://crear
        $usuario = new Usuarios();
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['email'];
        $usuario->password = $_REQUEST['password'];
        $usuario->alias = $_REQUEST['alias'];
        $usuario->imagen = $_FILES['imagen']['name'];
        $usuario->estado = 'Activo';
        $conexion = new Conexion();

        $res=$usuario->create($conexion->getConection());

        /* print_r($res); */

        if($res>=1){
            include ('upload.php');
            echo "Usuario creado con éxito";
        } else {
            echo "Error al crear usuario";
        }

        break;

        case 2://Actualizar
        $usuario = new Usuarios();
        $usuario->id = $_REQUEST['id'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['email'];
        $usuario->password = $_REQUEST['password'];
        $usuario->alias = $_REQUEST['alias'];
        $imagen_ant=$_REQUEST['imagen_ant'];
        $usuario->imagen = $_FILES['imagen']['name'];
        $usuario->estado = $_REQUEST['estado'];
        $conexion = new Conexion();

        $res=$usuario->update($conexion->getConection());
        if($res>=1){
            include('upload.php');
            unlink("../imagenes/usuarios/".$imagen_ant);
            echo "Usuario actualizado con éxito";
        } else {
            echo "Error al actualizar usuario";
        }
        break;

        case 3://Eliminar
        $usuario = new Usuarios();
        $usuario->id = $_REQUEST['id'];
        $usuario->estado = 'Inactivo';
        $conexion = new Conexion();
        $usuario->logic_delete($conexion->getConection());
        break;


        case 4://login
        $usuario = new Usuarios();
        $usuario->email = $_REQUEST['email'];
        $usuario->password = $_REQUEST['password'];
        $conexion = new Conexion();
        $usuario=$usuario->login($conexion->getConection());
        /* print_r($usuario); */
        session_start();

        $_SESSION['id']=$usuario->id;
        $_SESSION['nombre']=$usuario->nombre;
        $_SESSION['apellido']=$usuario->apellido;
        $_SESSION['email']=$usuario->email;
        $_SESSION['alias']=$usuario->alias;
        $_SESSION['imagen']=$usuario->imagen;
        $_SESSION['estado']=$usuario->estado;  

        if($usuario!=null){
            header("Location: ../../front-end/privado/usuario/index.php");
        } else {
            header("Location: ../../front-end/privado/sign-in/index.php");


        }

        break;

        case 5://logout
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../front-end/privado/sign-in/index.php");
        break;

}

?>