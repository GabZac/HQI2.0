<?php
session_start();
require_once "conexion.php";

if (!isset($_SESSION["id_usuario"])) {
    header("Location: ../HTML/Login.php");
    exit();
}

$id_usuario = $_SESSION["id_usuario"];

$fecha = $_POST["fecha"];
$hora_dormir = $_POST["hora_dormir"];
$hora_despertar = $_POST["hora_despertar"];
$calidad = $_POST["calidad_sueno"];


$inicio = new DateTime($fecha . " " . $hora_dormir);
$fin = new DateTime($fecha . " " . $hora_despertar);


if ($fin <= $inicio) {
    $fin->modify("+1 day");
}

$segundos = $fin->getTimestamp() - $inicio->getTimestamp();
$horasDormidas = round($segundos / 3600, 2);


$sql = "INSERT INTO registros_sueno
(id_usuario, fecha, hora_dormir, hora_despertar, horas_dormidas, calidad_sueno)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "isssdi",
    $id_usuario,
    $fecha,
    $hora_dormir,
    $hora_despertar,
    $horasDormidas,
    $calidad
);

if ($stmt->execute()) {
    header("Location: ../HTML/Perfil.php");
    exit();
} else {
    echo "Error al guardar el registro.";
}

$stmt->close();
$conn->close();
?>