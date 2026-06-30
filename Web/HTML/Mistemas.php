<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    header("Location: Login.php");
    exit();
}

$destinoPerfil = "Perfil.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas Que Importan - Mis Temas</title>

    <link href="https://googleapis.com" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Mistemas.css">
</head>

<body>

<header class="menu-header">

<nav class="navbar">

<div class="logo">HORAS QUE IMPORTAN</div>

<ul class="menu-links">
    <li><a href="../Index.php">Inicio</a></li>
    <li><a href="Producto.php">Productos</a></li>
    <li><a href="Mistemas.php" class="active">Mis Temas</a></li>
    <li><a href="Asistente.php">Chat IA</a></li>
</ul>

<div class="user-menu-container">

<a href="<?php echo $destinoPerfil; ?>" class="user-avatar">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
fill="currentColor">

<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>

</svg>

</a>

</div>

</nav>

</header>

<main class="main-container">

<div class="glass-card">

<div class="status-bar">
<span>Dispositivo: Memot</span>
<span><span class="status-dot"></span>Conectado</span>
</div>

<div class="temas-grid">
<button class="btn-tema active">Bosque</button>
<button class="btn-tema">Espacio</button>
<button class="btn-tema">Océano</button>
<button class="btn-tema">Personalizado</button>
</div>

<div class="control-group">
<label>Volumen del Audio</label>
<input type="range" class="slider" min="0" max="100" value="50">
</div>

<div class="control-group">
<label>Intensidad de la Luz</label>
<input type="range" class="slider" min="0" max="100" value="70">
</div>

<div class="control-group">
<label>Color de las Luces</label>
<input type="color" class="picker-color" value="#9b59b6">
</div>

<div class="toggle-row">

<label>Efecto de Iluminación</label>

<input
type="checkbox"
style="transform:scale(1.3); accent-color:#e67e22;">

</div>

<div class="toggle-row">

<label>Apagado Automático (30 min)</label>

<input
type="checkbox"
style="transform:scale(1.3); accent-color:#e67e22;">

</div>

<button class="btn-listo">
Guardar configuración
</button>

</div>

</main>

<script src="../JS/Mistemas.js"></script>

</body>
</html>