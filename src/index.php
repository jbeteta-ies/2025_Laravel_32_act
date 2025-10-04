<?php
$host = getenv('MYSQL_HOST');  // IP o dominio del host
$db   = getenv('MYSQL_DB');    // Base de datos que utilizamos por defecto
$user = getenv('MYSQL_USER');  // Usuario
$pass = getenv('MYSQL_PASSWORD'); // Password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Conexión exitosa a la base de datos!</p>";
} catch (PDOException $e) {
    echo "<p>Error al conectar a la base de datos: " . $e->getMessage() . "</p>";
    echo "<p>Host: $host, DB: $db, User: $user, Pass: $pass</p>";
    phpinfo(); // Muestra información de PHP para depuración
}
?>