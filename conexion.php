<?php
$host = 'sql3.freesqldatabase.com';
$dbname = 'sql3809710';
$user = 'sql3809710';
$pass = 'WLgQPYVFYJ'; 
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=latin1", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>