<?php
include('conexion.php');

$mensaje = "";
$tipo_mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    if (!empty($usuario) && !empty($clave)) {
        try {
            $db = conectar();
            $stmt = $db->prepare("SELECT password FROM usuarios WHERE usuario = ?");
            $stmt->execute([$usuario]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($clave, $row["password"])) {
                $mensaje = "🎉 ¡Inicio de sesión correcto! Bienvenido, " . htmlspecialchars($usuario) . ".";
                $tipo_mensaje = "success";
            } else {
                $mensaje = "❌ Usuario o contraseña incorrectos.";
                $tipo_mensaje = "error";
            }
        } catch (PDOException $e) {
            $mensaje = "❌ Error de base de datos: " . $e->getMessage();
            $tipo_mensaje = "error";
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
    <title>Iniciar Sesión - PHP Auth</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>🚀 Iniciar Sesión</h2>
        
        <?php if ($mensaje): ?>
            <div class="message <?php echo $tipo_mensaje; ?>">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" id="loginForm">
            <div class="input-group user">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required placeholder="Ingresa tu nombre de usuario" value="<?php echo isset($_POST['usuario']) ? htmlspecialchars($_POST['usuario']) : ''; ?>">
            </div>
            
            <div class="input-group password">
                <label for="clave">Contraseña</label>
                <input type="password" id="clave" name="clave" required placeholder="Ingresa tu contraseña">
            </div>
            
            <button type="submit" id="btnLogin">Ingresar</button>
        </form>
        
        <div class="link">
            <a href="registro.php">¿No tienes cuenta? Regístrate</a>
        </div>
    </div>

    <script>
        // Prevenir doble envío
        document.getElementById('loginForm').addEventListener('submit', function() {
            const btn = document.getElementById('btnLogin');
            btn.classList.add('loading');
            btn.disabled = true;
        });
        
        // Validación en tiempo real
        document.getElementById('usuario').addEventListener('input', function() {
            this.value = this.value.replace(/[^a-zA-Z0-9_]/g, '');
        });
        
        // Focus automático en el primer campo
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('usuario').focus();
        });
    </script>
</body>
</html>