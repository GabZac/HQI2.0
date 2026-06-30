<?php
require_once "conexion.php";

$nombre = trim($_POST["nombre"]);
$apellido = trim($_POST["apellido"]);
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$email = trim($_POST["email"]);
$password = $_POST["password"];


$sql = "SELECT id_usuario FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    die("Este correo ya está registrado.");
}


$passwordHash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, email, password)
VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssss",
    $nombre,
    $apellido,
    $fecha_nacimiento,
    $email,
    $passwordHash
);

if ($stmt->execute()) {
    header("Location: ../HTML/Login.php");
    exit();
} else {
    echo "Error al registrar el usuario.";
}

$conn->close();
?>