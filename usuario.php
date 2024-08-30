<?php

class Usuario {
    private $conexion;
    private $tabla = "usuarios";

    public $id;
    public $nombre;
    public $email;
    public $password;

    public function __construct($db) {
        $this->conexion = $db;
    }

    public function crearUsuario() {
        $query = "INSERT INTO " . $this->tabla . " (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $this->conexion->prepare($query);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>