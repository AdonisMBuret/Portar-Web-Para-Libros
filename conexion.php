<?php
$host = 'sql201.infinityfree.com';
$dbname = 'if0_40540072_dblibreria';
$user = 'if0_40540072';
$pass = 'JinGa213'; 
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=latin1", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>