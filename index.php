<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Autenticación PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .welcome-container {
            text-align: center;
            max-width: 500px;
        }
        
        .welcome-container h1 {
            color: #4a5568;
            margin-bottom: 20px;
            font-size: 32px;
        }
        
        .welcome-container p {
            color: #718096;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .btn.secondary {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        }
        
        .features {
            margin-top: 40px;
            text-align: left;
        }
        
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 8px;
        }
        
        .feature-icon {
            font-size: 20px;
            margin-right: 15px;
            width: 30px;
        }
        
        .feature-text {
            color: #4a5568;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container welcome-container">
        <h1>🔐 Sistema de Autenticación</h1>
        <p>
            Bienvenido al sistema de autenticación desarrollado en PHP puro con SQLite. 
            Este sistema implementa registro y login seguro usando hash de contraseñas.
        </p>
        
        <div class="buttons">
            <a href="login.php" class="btn">🚀 Iniciar Sesión</a>
            <a href="registro.php" class="btn secondary">📝 Registrarse</a>
        </div>
        
        <div class="features">
            <div class="feature">
                <span class="feature-icon">🔒</span>
                <span class="feature-text">Contraseñas hasheadas con bcrypt</span>
            </div>
            <div class="feature">
                <span class="feature-icon">🛡️</span>
                <span class="feature-text">Protección contra SQL injection</span>
            </div>
            <div class="feature">
                <span class="feature-icon">💾</span>
                <span class="feature-text">Base de datos SQLite integrada</span>
            </div>
            <div class="feature">
                <span class="feature-icon">⚡</span>
                <span class="feature-text">PHP puro sin frameworks</span>
            </div>
        </div>
    </div>
</body>
</html>