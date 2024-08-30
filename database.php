<?php

class Database {
    private $host = "localhost";
    private $db_name = "bd1";
    private $username = "root";
    private $password = "";
    public $conexion;

    public function getConexion() {
        $this->conexion = null;

        try {
            $this->conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conexion;
    }
}

?>