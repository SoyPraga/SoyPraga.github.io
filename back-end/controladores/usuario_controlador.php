<?php

include_once '../base_datos/config.php';
include_once '../modelos/usuario.php';

$opcion = $_REQUEST['opcion'];

switch($opcion){
       case 1://crear
        $usuario = new Usuario();
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['email'];
        $usuario->direccion = $_REQUEST['direccion'];
        $usuario->tarjeta = $_REQUEST['tarjeta'];
        $usuario->contacto = $_REQUEST['contacto'];
        $usuario->estado = 'Activo';
        $conexion = new Conexion();

        $usuario->create($conexion->getConection());
        header('Location: ../../front-end/privado/usuario/index.php');
        break;

        case 2://Actualizar
        $usuario = new Usuario();
        $usuario->id = $_REQUEST['id'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['email'];
        $usuario->direccion = $_REQUEST['direccion'];
        $usuario->tarjeta = $_REQUEST['tarjeta'];
        $usuario->contacto = $_REQUEST['contacto'];
        $usuario->estado = $_REQUEST['estado'];
        $conexion = new Conexion();

        $usuario->update($conexion->getConection());

        header('Location: ../../front-end/privado/usuario/index.php');
        
        break;


        case 3://Eliminar
        $usuario = new Usuario();
        $usuario->id = $_REQUEST['id'];
        $usuario->estado = 'Inactivo';
        $conexion = new Conexion();

        $usuario->logic_delete($conexion->getConection());
        header('Location: ../../front-end/privado/usuario/index.php');
        break;






}



?>