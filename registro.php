<?php
include('conexion.php');

$mensaje = "";
$tipo_mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    
    if (!empty($usuario) && !empty($clave)) {
        $hash = password_hash($clave, PASSWORD_DEFAULT);

        try {
            $db = conectar();
            $stmt = $db->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
            if ($stmt->execute([$usuario, $hash])) {
                $mensaje = "✅ Usuario registrado correctamente. ¡Ya puedes iniciar sesión!";
                $tipo_mensaje = "success";
            } else {
                $mensaje = "❌ Error al registrar el usuario.";
                $tipo_mensaje = "error";
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $mensaje = "⚠️ El usuario ya existe. Elige otro nombre de usuario.";
                $tipo_mensaje = "error";
            } else {
                $mensaje = "❌ Error de base de datos: " . $e->getMessage();
                $tipo_mensaje = "error";
            }
        }
    } else {
        $mensaje = "⚠️ Por favor, completa todos los campos.";
        $tipo_mensaje = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - PHP Auth</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>🔐 Registro de Usuario</h2>
        
        <?php if ($mensaje): ?>
            <div class="message <?php echo $tipo_mensaje; ?>">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" id="registroForm">
            <div class="input-group user">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required placeholder="Ingresa tu nombre de usuario">
            </div>
            
            <div class="input-group password">
                <label for="clave">Contraseña</label>
                <input type="password" id="clave" name="clave" required placeholder="Ingresa tu contraseña">
            </div>
            
            <button type="submit" id="btnRegistro">Registrar</button>
        </form>
        
        <div class="link">
            <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
        </div>
    </div>

    <script>
        // Prevenir doble envío
        document.getElementById('registroForm').addEventListener('submit', function() {
            const btn = document.getElementById('btnRegistro');
            btn.classList.add('loading');
            btn.disabled = true;
        });
        
        // Validación en tiempo real
        document.getElementById('usuario').addEventListener('input', function() {
            this.value = this.value.replace(/[^a-zA-Z0-9_]/g, '');
        });
    </script>
</body>
</html>