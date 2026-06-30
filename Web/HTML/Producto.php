<?php
session_start();

if (!isset($_SESSION["id_usuario"])) {
    $destinoPerfil = "Login.php";
} else {
    $destinoPerfil = "Perfil.php";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas Que Importan - Productos</title>

    <link href="https://googleapis.com" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Style.css">

</head>
<body>

<header class="menu-header">

<nav class="navbar">

<div class="logo">
HORAS QUE IMPORTAN
</div>

<ul class="menu-links">

<li><a href="../Index.php">Inicio</a></li>

<li><a href="Producto.php" class="active">Productos</a></li>

<li><a href="Mistemas.php">Mis Temas</a></li>

<li><a href="Asistente.php">Chat IA</a></li>

</ul>

<div class="user-menu-container">

<a href="<?php echo $destinoPerfil; ?>" class="user-avatar">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
width="22"
height="22"
fill="currentColor">

<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>

</svg>

</a>

</div>

</nav>

</header>

<main class="main-container">

<div class="glass-card">

<h1 class="titulo-principal" style="text-align:left;">
Memot
</h1>

<p class="subtitulo" style="text-align:left; margin-bottom:25px;">
Tu compañero tecnológico para un sueño perfecto
</p>

<div class="contenedor-foto">

<img
src="../IMAGENES/Producto-prototipo.png"
style="width:250px;height:auto;display:block;margin:20px auto;"
alt="Memot Prototipo">

</div>

<div class="texto-historia">

<p><strong>Características:</strong></p>

<p>
• Conectividad WiFi para control a distancia.<br>
• Sistema de audio integrado para reproducción de temas MP3.<br>
• Matriz de luces NeoPixel con regulación de intensidad y color.<br>
• Motor con movimientos predeterminados para proyecciones en el techo.
</p>

<p><strong>Descripción:</strong></p>

<p>
Memot es un proyector inteligente diseñado especialmente para la mesita de luz.
Su objetivo principal es ayudarte a conciliar el sueño de manera óptima
combinando estímulos visuales, colores relajantes y sonidos ambientales
personalizados que podés controlar directamente desde esta web.
</p>

<span class="precio-tag">
Precio: $59.999
</span>

</div>

</div>

</main>

</body>
</html>