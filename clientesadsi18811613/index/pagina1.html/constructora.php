<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define los valores esperados del nombre de usuario y la contraseña
    $nombreUsuarioEsperado = "usuario";
    $contrasenaEsperada = "contraseña";

    // Obtiene los valores ingresados por el usuario
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasena = $_POST["contrasena"];

    // Verifica si los valores coinciden con los esperados
    if ($nombreUsuario === $nombreUsuarioEsperado && $contrasena === $contrasenaEsperada) {
        // Inicio de sesión exitoso
        echo "Inicio de sesión exitoso. ¡Bienvenido, $nombreUsuario!";
    } else {
        // Inicio de sesión fallido
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de inicio de sesión</title>
</head>
<body>
    <h2>Inicio de sesión</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombreUsuario">Nombre de usuario:</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</html>
<head>
    <title>Mi Página Web</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img class="logo" src="imagen/LOGO LOIS.jpeg" alt="Logo">
        </div>
    <header>
        <h1>BIENBENIDOS </h1> 
        <h2>FUENTES&CONSTRUCCIONES</h2>
        <nav>
            <ul>
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="acerca de .html">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
                <li>
                    <details>
                      <summary class="btn-menu" style="color: rgba(191, 214, 19, 0.865);">Registro</summary>
                      <ul class="submenu">
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Usuarios</a></li>
                        <li><a href="#">Cotización</a></li>
                        <li><a href="#">Material</a></li>
                        <li><a href="#">Orden de Compra</a></li>
                        <li><a href="#">Proveedor</a></li>
                        <li><a href="#">Proyecto</a></li>
                      </ul>
                    </details>
                  </li>
            </ul>
        </nav>
        
    </header>

    <section>
        <h3>Empresa</h3>
        <p>somos una empresa emprendedora y con bases solidas  .</p>
    </section>

    <footer>
        <p>Derechos de autor &copy; 2023 - fuentes.construcciones@outlook.com</p>
    </footer>
</body>
</html>
