<?php
include_once 'database.php';
include_once 'Usuario.php';

$database = new Database();
$db = $database->getConexion();

$usuario = new Usuario($db);

$usuario->nombre = $_POST['nombre'];
$usuario->email = $_POST['email'];
$usuario->password = password_hash($_POST['password'], PASSWORD_BCRYPT);

if($usuario->crearUsuario()) {
    echo "Usuario creado exitosamente.";
} else {
    echo "Error al crear el usuario.";
}
?>