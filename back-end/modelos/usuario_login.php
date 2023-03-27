<?php

include_once ("crud.php");

class Usuarios implements CRUD {

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $alias;
    public $imagen;
    public $estado;


    public function create($conn) {

        try {
            $stmt = $conn->prepare("INSERT INTO login (nombre, apellido, email, password, alias, imagen, estado)
            VALUES (:nombre, :apellido, :email, :password, :alias, :imagen, :estado)");
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido', $this->apellido);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':alias', $this->alias);
            $stmt->bindParam(':imagen', $this->imagen);
            $stmt->bindParam(':estado', $this->estado);


            return $stmt->execute();

            echo "Usuario creado con éxito";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    public function read_all($conn) {
        try {
            $stmt = $conn->prepare("SELECT * FROM login");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            /* $stmt->bindParam(':id', $this->id); */
            return $res = $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }


    public function read($conn) {
        try {
            $stmt = $conn->prepare('SELECT * FROM login WHERE id=:id');
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $res= $stmt->fetchAll();
  
            return $res[0];
            /* print_r($res); */

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }




    public function update($conn) {
        try {
            $stmt = $conn->prepare("UPDATE login SET nombre = :nombre, apellido = :apellido, email = :email, password = :password, alias = :alias, imagen = :imagen, estado = :estado WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido', $this->apellido);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':alias', $this->alias);
            $stmt->bindParam(':imagen', $this->imagen);
            $stmt->bindParam(':estado', $this->estado);

            return $stmt->execute();

            echo "Usuario actualizado con éxito";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $con = null;
    }


    public function logic_delete($conn) {
        try {
            $stmt = $conn->prepare("UPDATE login SET estado =:estado WHERE id = :id");
            $stmt -> bindParam(':estado', $this->estado);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();

            echo "Usuario eliminado con éxito";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $con = null;
    }


    public function delete($conn) {
        try {
            $stmt = $conn->prepare("DELETE FROM login WHERE id = :id");
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();

            echo "Usuario eliminado con éxito";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $con = null;
    }


    public function login($conn) {
        try {
            $stmt = $conn->prepare("SELECT * FROM login WHERE email = :email AND password = :password");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->execute();
            $res = $stmt->fetchAll();

            return $res[0];

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

}


?>