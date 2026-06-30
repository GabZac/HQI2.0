<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Memot - Registro</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>
<body>

<div class="login-container">

    <h2>Crear cuenta</h2>

    <form action="../PHP/procesarRegistro.php" method="POST">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" required>
        </div>

        <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label>Correo electrónico</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <button class="btn-submit" type="submit">
            Registrarme
        </button>

    </form>

    <br>

    <p>
        ¿Ya tenés cuenta?
        <a href="Login.php">Iniciar sesión</a>
    </p>

</div>

</body>
</html>