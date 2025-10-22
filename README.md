# Sistema de Autenticación PHP con SQLite# Sistema de Autenticación PHP con SQLiteEste **proyecto PHP puro con SQLite** implementa registro y login usando `password_hash()` y `password_verify()`.



## Descripción***

Sistema de autenticación completo desarrollado en PHP puro utilizando SQLite como base de datos. Implementa registro y login de usuarios con hash seguro de contraseñas usando las funciones nativas de PHP `password_hash()` y `password_verify()`.

## Descripción

## 🚀 Pasos de Configuración e Instalación

Sistema de autenticación completo desarrollado en PHP puro utilizando SQLite como base de datos. Implementa registro y login de usuarios con hash seguro de contraseñas usando las funciones nativas de PHP `password_hash()` y `password_verify()`.# Proyecto: Sistema de Autenticación con SQLite y Hash Seguro

### Prerrequisitos

- PHP 8.0 o superior

- Extensión `pdo_sqlite` habilitada

- Permisos de escritura en el directorio del proyecto## 🚀 Pasos de Configuración e Instalación## Resumen



### 1. Preparación del EntornoEste proyecto demuestra cómo crear usuarios y validar contraseñas usando `password_hash()` y `password_verify()` con **SQLite** y **PDO**.

```bash

# Clonar o descargar el proyecto### PrerrequisitosEl objetivo es almacenar contraseñas de manera segura y autenticarlas sin errores de comparación directa.

git clone https://github.com/maximofernandezriera/php-vanilla-login.git

cd php-vanilla-login- PHP 8.0 o superior

```

- Extensión `pdo_sqlite` habilitada***

### 2. Estructura de Archivos Creada

Durante la configuración se crearon los siguientes archivos:- Permisos de escritura en el directorio del proyecto



```## Estructura del proyecto

/php-vanilla-login/

├─ database/              # Directorio para la base de datos### 1. Preparación del Entorno```

│  └─ usuarios.db         # Base de datos SQLite (se crea automáticamente)

├─ conexion.php           # Gestión de conexión PDO```bash/proyecto-login/

├─ crear_tabla.php        # Script de inicialización de BD

├─ registro.php           # Formulario de registro# Clonar o descargar el proyecto│

├─ login.php              # Formulario de login

├─ index.php             # Página de iniciogit clone https://github.com/maximofernandezriera/php-vanilla-login.git├─ database/

├─ style.css             # Estilos CSS

└─ README.md             # Este archivocd php-vanilla-login│  └─ usuarios.db

```

```│

### 3. Inicialización de la Base de Datos

```bash├─ conexion.php

# Ejecutar script para crear la base de datos y tabla

php crear_tabla.php### 2. Estructura de Archivos Creada├─ registro.php

```

**Salida esperada:** `Base de datos y tabla creadas correctamente.`Durante la configuración se crearon los siguientes archivos:├─ login.php



### 4. Iniciar el Servidor de Desarrollo├─ crear_tabla.php

```bash

# Iniciar servidor PHP integrado en puerto 8000```└─ README.md

php -S localhost:8000

```/php-vanilla-login/```



### 5. Acceso a la Aplicación├─ database/              # Directorio para la base de datos

- **Inicio:** http://localhost:8000/

- **Registro:** http://localhost:8000/registro.php│  └─ usuarios.db         # Base de datos SQLite (se crea automáticamente)***

- **Login:** http://localhost:8000/login.php

├─ conexion.php           # Gestión de conexión PDO

## 📸 Capturas de Pantalla

├─ crear_tabla.php        # Script de inicialización de BD## 1. Base de datos: `crear_tabla.php`

### Página de Registro

La página de registro cuenta con un diseño moderno y responsivo:├─ registro.php           # Formulario de registroEste script crea la base SQLite y la tabla `usuarios`.



![Página de Registro](Captura%20de%20pantalla%202025-10-22%20170256.png)├─ login.php              # Formulario de login



**Características:**└─ README.md             # Este archivo```php

- Formulario con validación en tiempo real

- Iconos SVG integrados en los campos```<?php

- Mensajes de error/éxito visuales

- Prevención de doble envíotry {

- Diseño glassmorphism con efectos de blur

### 3. Inicialización de la Base de Datos    $db = new PDO("sqlite:database/usuarios.db");

### Página de Login

La página de login mantiene consistencia visual con el registro:```bash    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



![Página de Login](Captura%20de%20pantalla%202025-10-22%20170412.png)# Ejecutar script para crear la base de datos y tabla    



**Características:**php crear_tabla.php    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (

- Interfaz intuitiva y moderna

- Focus automático en el primer campo```        id INTEGER PRIMARY KEY AUTOINCREMENT,

- Conserva el nombre de usuario en caso de error

- Transiciones suaves y efectos hover**Salida esperada:** `Base de datos y tabla creadas correctamente.`        usuario TEXT UNIQUE,

- Gradiente de fondo atractivo

        password TEXT NOT NULL

## 📁 Descripción de Archivos

### 4. Iniciar el Servidor de Desarrollo    )");

### `index.php`

Página de inicio del sistema que:```bash

- Presenta información del proyecto

- Proporciona acceso directo a login y registro# Iniciar servidor PHP integrado en puerto 8000    echo "Base de datos y tabla creadas correctamente.";

- Lista las características de seguridad

- Incluye diseño de bienvenida modernophp -S localhost:8000} catch (PDOException $e) {



### `conexion.php````    echo "Error: " . $e->getMessage();

Archivo central que maneja la conexión a SQLite usando PDO:

- Configuración de SQLite con manejo de errores}

- Función `conectar()` reutilizable

- Gestión de excepciones PDO### 5. Acceso a la Aplicación?>



### `crear_tabla.php`- **Registro:** http://localhost:8000/registro.php```

Script de inicialización que:

- Crea la base de datos SQLite si no existe- **Login:** http://localhost:8000/login.php

- Define la tabla `usuarios` con campos: id, usuario, password

- Ejecutar una sola vez al configurar el proyecto***



### `registro.php`## 📁 Descripción de Archivos

Formulario de registro que:

- Recibe datos del usuario mediante POST## 2. Conexión: `conexion.php`

- Hashea la contraseña con `password_hash(PASSWORD_DEFAULT)`

- Inserta el usuario en la base de datos con consulta preparada### `conexion.php`Conecta con la base SQLite mediante **PDO**.

- Incluye validación básica y enlaces de navegación

- Manejo avanzado de errores y duplicadosArchivo central que maneja la conexión a SQLite usando PDO:



### `login.php`- Configuración de SQLite con manejo de errores```php

Formulario de autenticación que:

- Recibe credenciales del usuario- Función `conectar()` reutilizable<?php

- Busca el usuario en la base de datos

- Verifica la contraseña con `password_verify()`- Gestión de excepciones PDOfunction conectar() {

- Muestra resultado de autenticación

- Incluye validación y feedback visual    try {



### `style.css`### `crear_tabla.php`        $db = new PDO("sqlite:database/usuarios.db");

Archivo de estilos que proporciona:

- Diseño responsive para móviles y desktopScript de inicialización que:        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

- Gradientes y efectos visuales modernos

- Animaciones y transiciones suaves- Crea la base de datos SQLite si no existe        return $db;

- Componentes reutilizables

- Iconos SVG integrados- Define la tabla `usuarios` con campos: id, usuario, password    } catch (PDOException $e) {



## 🔒 Características de Seguridad- Ejecutar una sola vez al configurar el proyecto        die("Error de conexión: " . $e->getMessage());



### Hash de Contraseñas    }

- **Algoritmo:** `PASSWORD_DEFAULT` (actualmente bcrypt)

- **Salt:** Generado automáticamente y único por contraseña### `registro.php`}

- **Resistencia:** Protección contra ataques de diccionario y rainbow tables

Formulario de registro que:?>

### Consultas Preparadas

- Uso de `PDO::prepare()` en todas las consultas- Recibe datos del usuario mediante POST```

- Prevención de inyección SQL

- Separación de código y datos- Hashea la contraseña con `password_hash(PASSWORD_DEFAULT)`



### Validación de Entrada- Inserta el usuario en la base de datos con consulta preparada***

- Verificación de método POST

- Campos requeridos en formularios HTML- Incluye validación básica y enlaces de navegación

- Manejo de errores de base de datos

- Sanitización de datos de entrada## 3. Registro de usuario: `registro.php`



## 🧪 Pruebas del Sistema### `login.php`



### Registro de UsuarioFormulario de autenticación que:```php

1. Ir a `http://localhost:8000/registro.php`

2. Completar formulario con usuario único y contraseña- Recibe credenciales del usuario<?php

3. Verificar mensaje: "✅ Usuario registrado correctamente"

- Busca el usuario en la base de datosinclude('conexion.php');

### Inicio de Sesión

1. Ir a `http://localhost:8000/login.php`- Verifica la contraseña con `password_verify()`

2. Usar credenciales del registro anterior

3. Verificar mensaje: "🎉 ¡Inicio de sesión correcto!"- Muestra resultado de autenticaciónif ($_SERVER["REQUEST_METHOD"] === "POST") {



### Verificación de Seguridad    $usuario = $_POST["usuario"];

- Intentar login con contraseña incorrecta

- Verificar que cada registro genera hash único## 🔒 Características de Seguridad    $clave = $_POST["clave"];

- Comprobar que la base de datos no almacena contraseñas en texto plano

- Probar caracteres especiales en campos de entrada    $hash = password_hash($clave, PASSWORD_DEFAULT);



## 📊 Estructura de la Base de Datos### Hash de Contraseñas



### Tabla `usuarios`- **Algoritmo:** `PASSWORD_DEFAULT` (actualmente bcrypt)    $db = conectar();

```sql

CREATE TABLE usuarios (- **Salt:** Generado automáticamente y único por contraseña    $stmt = $db->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");

    id INTEGER PRIMARY KEY AUTOINCREMENT,

    usuario TEXT UNIQUE,- **Resistencia:** Protección contra ataques de diccionario y rainbow tables    if ($stmt->execute([$usuario, $hash])) {

    password TEXT NOT NULL

);        echo "Usuario registrado correctamente.";

```

### Consultas Preparadas    } else {

- **id:** Clave primaria autoincremental

- **usuario:** Nombre de usuario único- Uso de `PDO::prepare()` en todas las consultas        echo "Error al registrar.";

- **password:** Hash de la contraseña (NO texto plano)

- Prevención de inyección SQL    }

## 🎨 Características de Diseño

- Separación de código y datos}

### Diseño Visual

- **Gradiente de fondo:** Azul-púrpura moderno?>

- **Glassmorphism:** Efectos de cristal con blur

- **Responsive:** Adaptable a móviles y tablets### Validación de Entrada

- **Animaciones:** Transiciones suaves en todas las interacciones

- Verificación de método POST<form method="POST">

### Experiencia de Usuario

- **Iconos integrados:** SVG sin dependencias externas- Campos requeridos en formularios HTML  Usuario: <input type="text" name="usuario" required><br>

- **Feedback visual:** Mensajes de estado claros

- **Prevención de errores:** Validación en tiempo real- Manejo de errores de base de datos  Contraseña: <input type="password" name="clave" required><br>

- **Navegación intuitiva:** Enlaces entre páginas

  <button type="submit">Registrar</button>

## 🛠️ Solución de Problemas

## 🧪 Pruebas del Sistema</form>

### Error: "could not find driver"

```bash```

# Verificar extensión SQLite

php -m | grep -i sqlite### Registro de Usuario

```

1. Ir a `http://localhost:8000/registro.php`***

### Error: "Permission denied"

```bash2. Completar formulario con usuario único y contraseña

# En Linux/Mac: ajustar permisos

chmod 775 database/3. Verificar mensaje: "Usuario registrado correctamente"## 4. Inicio de sesión: `login.php`

```



### Error de conexión a la base

- Verificar que existe el directorio `database/`### Inicio de Sesión```php

- Ejecutar `crear_tabla.php` si es la primera vez

- Comprobar permisos de escritura1. Ir a `http://localhost:8000/login.php`<?php



### Problemas de CSS2. Usar credenciales del registro anteriorinclude('conexion.php');

- Verificar que `style.css` está en el directorio raíz

- Comprobar que el servidor PHP está sirviendo archivos estáticos3. Verificar mensaje: "Inicio de sesión correcto"

- Limpiar caché del navegador

if ($_SERVER["REQUEST_METHOD"] === "POST") {

## 🔧 Comandos Útiles

### Verificación de Seguridad    $usuario = $_POST["usuario"];

```bash

# Verificar versión de PHP- Intentar login con contraseña incorrecta    $clave = $_POST["clave"];

php --version

- Verificar que cada registro genera hash único

# Listar extensiones PHP

php -m- Comprobar que la base de datos no almacena contraseñas en texto plano    $db = conectar();



# Verificar configuración SQLite    $stmt = $db->prepare("SELECT password FROM usuarios WHERE usuario = ?");

php -i | grep -i sqlite

## 📊 Estructura de la Base de Datos    $stmt->execute([$usuario]);

# Reiniciar servidor de desarrollo

# Ctrl+C para detener, luego:    $row = $stmt->fetch(PDO::FETCH_ASSOC);

php -S localhost:8000

### Tabla `usuarios`

# Ver logs del servidor

# Agregar al comando del servidor:```sql    if ($row && password_verify($clave, $row["password"])) {

php -S localhost:8000 -t . 2>&1 | tee server.log

```CREATE TABLE usuarios (        echo "Inicio de sesión correcto.";



## 📈 Posibles Mejoras Futuras    id INTEGER PRIMARY KEY AUTOINCREMENT,    } else {



- [ ] Sesiones de usuario persistentes    usuario TEXT UNIQUE,        echo "Usuario o contraseña incorrectos.";

- [ ] Recuperación de contraseñas

- [ ] Validación de fortaleza de contraseñas    password TEXT NOT NULL    }

- [ ] Rate limiting para login

- [ ] Panel de administración);}

- [ ] API REST para autenticación

- [ ] Autenticación de dos factores (2FA)```?>

- [ ] Sistema de roles y permisos

- [ ] Logs de actividad de usuarios

- [ ] Configuración de temas (modo oscuro)

- **id:** Clave primaria autoincremental<form method="POST">

## 📝 Notas Técnicas

- **usuario:** Nombre de usuario único  Usuario: <input type="text" name="usuario" required><br>

- **PHP mínimo:** 8.0 (para compatibilidad completa con `password_*` functions)

- **Base de datos:** SQLite 3.x (incluida con PHP)- **password:** Hash de la contraseña (NO texto plano)  Contraseña: <input type="password" name="clave" required><br>

- **Dependencias:** Solo PHP nativo, sin frameworks externos

- **Producción:** Considerar migrar a PostgreSQL/MySQL para proyectos grandes  <button type="submit">Ingresar</button>

- **Seguridad:** Implementado siguiendo mejores prácticas OWASP

## 🛠️ Solución de Problemas</form>

## 🤝 Contribuciones

```

Este proyecto está abierto a contribuciones. Para contribuir:

### Error: "could not find driver"

1. Fork el repositorio

2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)```bash***

3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)

4. Push a la rama (`git push origin feature/AmazingFeature`)# Verificar extensión SQLite

5. Abre un Pull Request

php -m | grep -i sqlite## 5. Documentación técnica (README.md)

## 📄 Licencia

```

Este proyecto es de código abierto y está disponible bajo la [MIT License](LICENSE).

### Esquema de trabajo

---

### Error: "Permission denied"- **Registro:**  

**Desarrollado como proyecto educativo de autenticación segura en PHP puro** 🐘

```bash  - La contraseña se procesa con `password_hash()`.  

*Última actualización: Octubre 2025*
# En Linux/Mac: ajustar permisos  - El hash resultante se guarda directamente en la base de datos SQLite.

chmod 775 database/

```- **Login:**  

  - Se obtiene el hash del usuario desde la base.  

### Error de conexión a la base  - `password_verify()` compara internamente la contraseña ingresada con el hash almacenado.

- Verificar que existe el directorio `database/`

- Ejecutar `crear_tabla.php` si es la primera vez### Aspectos clave de seguridad

- Comprobar permisos de escritura- `password_hash()` crea un *salt* aleatorio y lo incluye en el hash.

- `password_verify()` extrae ese *salt* y verifica sin necesidad de almacenar datos adicionales.[4][5]

## 🔧 Comandos Útiles- Los hashes cambian cada vez, incluso con contraseñas iguales, garantizando unicidad y resistencia ante ataques.



```bash### Dependencias y configuración

# Verificar versión de PHP- PHP 8.0 o superior con extensión `pdo_sqlite` habilitada.

php --version- Carpeta `database/` debe existir y ser escribible (CHMOD 775).



# Listar extensiones PHP### Ejecución

php -m1. Crea la base con `crear_tabla.php` (ejecutar una sola vez).  

2. Registra usuarios en `registro.php`.  

# Verificar configuración SQLite3. Inicia sesión desde `login.php`.

php -i | grep -i sqlite

### Resultados esperados

# Reiniciar servidor de desarrollo- Cada usuario se almacena con una contraseña encriptada.  

# Ctrl+C para detener, luego:- El login valida correctamente sin errores de comparación.  

php -S localhost:8000- La base `usuarios.db` contendrá entradas en texto no legible.

```



## 📈 Posibles Mejoras Futuras

Este proyecto puede ejecutarse o bien en cualquier entorno local (XAMPP, Laragon, VSCode + PHP Server) o bien completamente autocontenido, sin necesidad de servidor MySQL.

- [ ] Sesiones de usuario persistentes

- [ ] Recuperación de contraseñas

- [ ] Validación de fortaleza de contraseñas
- [ ] Rate limiting para login
- [ ] Panel de administración
- [ ] API REST para autenticación
- [ ] Autenticación de dos factores (2FA)

## 📝 Notas Técnicas

- **PHP mínimo:** 8.0 (para compatibilidad completa con `password_*` functions)
- **Base de datos:** SQLite 3.x (incluida con PHP)
- **Dependencias:** Solo PHP nativo, sin frameworks externos
- **Producción:** Considerar migrar a PostgreSQL/MySQL para proyectos grandes

---

**Desarrollado como proyecto educativo de autenticación segura en PHP puro** 🐘