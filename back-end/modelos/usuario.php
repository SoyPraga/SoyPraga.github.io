<?php

include_once("crud.php");

    class Usuario implements CRUD{

      public $id;
      public $nombre;
      public $apellido;
      public $email;
      public $direccion;
      public $tarjeta;
      public $contacto;
      public $estado;



      public function create ($conn){

        try{
          $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, email, direccion, tarjeta, contacto, estado)
           VALUES (:nombre, :apellido, :email, :direccion, :tarjeta, :contacto, :estado)");
          $stmt->bindParam(':nombre', $this->nombre);
          $stmt->bindParam(':apellido', $this->apellido);
          $stmt->bindParam(':email', $this->email);
          $stmt->bindParam(':direccion', $this->direccion);
          $stmt->bindParam(':tarjeta', $this->tarjeta);
          $stmt->bindParam(':contacto', $this->contacto);
          $stmt->bindParam(':estado', $this->estado);

          $stmt->execute();

          echo "Usuario creado con éxito";
        }catch(PDOException $e){
          echo "Error: " . $e->getMessage();
        }
        $conn=null;
      }



      public function read_all($conn)
      {
        try{
          $stmt = $conn->prepare("SELECT * FROM usuario");
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_OBJ);
          $stmt->bindParam(':id', $this->id);
         return $res=$stmt->fetchAll();
         

        }catch(PDOException $e){
          echo "Error: " . $e->getMessage();
        }
        $conn=null;
      }


      public function read($conn)
      {
        try{
          $stmt = $conn->prepare("SELECT * FROM usuario WHERE id=:id");
          $stmt->setFetchMode(PDO::FETCH_OBJ);
          $stmt->bindParam(':id', $this->id);
          $stmt->execute();
          $res= $stmt->fetchAll();

          return $res[0];

        }catch(PDOException $e){
          echo "Error: " . $e->getMessage();
        }
        $conn=null;
      }

      public function update($conn){
        try{
          $stmt = $conn->prepare("UPDATE usuario SET nombre=:nombre, apellido=:apellido, email=:email, direccion=:direccion, tarjeta=:tarjeta, contacto=:contacto, estado=:estado WHERE id=:id");
          $stmt->bindParam(':id', $this->id);
          $stmt->bindParam(':nombre', $this->nombre);
          $stmt->bindParam(':apellido', $this->apellido);
          $stmt->bindParam(':email', $this->email);
          $stmt->bindParam(':direccion', $this->direccion);
          $stmt->bindParam(':tarjeta', $this->tarjeta);
          $stmt->bindParam(':contacto', $this->contacto);
          $stmt->bindParam(':estado', $this->estado);
          $stmt->execute();

          echo "Usuario actualizado con éxito";
        }catch(PDOException $e){
        echo "Error: " . $e->getMessage();

      }
      $conn=null;
    }

      public function logic_delete($conn){

        try{
          $stmt = $conn->prepare("UPDATE usuario SET estado=:estado WHERE id=:id");
          $stmt->bindParam(':id', $this->id);
          $stmt->bindParam(':estado', $this->estado);
          $stmt->execute();

          echo "Usuario eliminado con éxito";
        }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
      }
      $conn=null;
    }


      public function delete($conn){
        try{
          $stmt = $conn->prepare("DELETE FROM usuario WHERE id=:id");
          $stmt->bindParam(':id', $this->id);
          $stmt->execute();

          echo "Usuario eliminado con éxito";
        }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
      }
      $conn=null;

    }



  }

  ?>