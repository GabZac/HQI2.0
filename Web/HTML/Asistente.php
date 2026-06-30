<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas Que Importan - Chat IA</title>
    <link href="https://googleapis.com" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Asistente.css">
</head>

<body>

<header class="menu-header">
    <nav class="navbar">

        <div class="logo">HORAS QUE IMPORTAN</div>

        <ul class="menu-links">
            <li><a href="../Index.php">Inicio</a></li>
            <li><a href="Producto.php">Productos</a></li>
            <li><a href="Mistemas.php">Mis Temas</a></li>
            <li><a href="Asistente.php" class="active">Chat IA</a></li>
        </ul>

        <div class="user-menu-container">

            <?php if(isset($_SESSION["id_usuario"])): ?>

                <a href="Perfil.php" class="user-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </a>

                <div class="dropdown-menu">
                    <p>Hola, <strong><?php echo $_SESSION["nombre"]; ?></strong> 👋</p>

                    <a href="Perfil.php" class="btn-login-menu">
                        Mi Perfil
                    </a>

                    <br><br>

                    <a href="../PHP/logout.php" class="btn-login-menu">
                        Cerrar Sesión
                    </a>
                </div>

            <?php else: ?>

                <a href="Login.php" class="user-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </a>

                <div class="dropdown-menu">
                    <p>¡Hola! Iniciá sesión.</p>

                    <a href="Login.php" class="btn-login-menu">
                        Iniciar Sesión
                    </a>
                </div>

            <?php endif; ?>

        </div>

    </nav>
</header>

<main class="main-container">

    <div class="glass-card">

        <h1 class="titulo-principal">
            Chat con Memo
        </h1>

        <p class="subtitulo">
            Tu guía personal para mejorar tus horas de sueño
        </p>

        <div class="cuadro-info">

            <p>
                Si necesitás ayuda para armar una rutina de descanso,
                tenés dudas sobre cómo usar tu proyector Memot
                o simplemente querés charlar sobre tus hábitos de sueño,
                la versión inteligente de Memo está acá para acompañarte.
            </p>

        </div>

        <div class="floating-note">
            El asistente inteligente te espera abajo a la derecha
        </div>

    </div>

</main>

<script>
(function(){
if(!window.chatbase||window.chatbase("getState")!=="initialized"){
window.chatbase=(...arguments)=>{
if(!window.chatbase.q){window.chatbase.q=[]}
window.chatbase.q.push(arguments)
};
window.chatbase=new Proxy(window.chatbase,{
get(target,prop){
if(prop==="q"){return target.q}
return(...args)=>target(prop,...args)
}
})
}
const onLoad=function(){
const script=document.createElement("script");
script.src="https://www.chatbase.co/embed.min.js";
script.id="licjY2IQQ0Av16q_YfIwn";
script.domain="www.chatbase.co";
document.body.appendChild(script)
}
if(document.readyState==="complete"){
onLoad()
}else{
window.addEventListener("load",onLoad)
}
})();
</script>

</body>
</html>