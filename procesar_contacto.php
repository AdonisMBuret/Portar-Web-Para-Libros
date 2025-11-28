<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
    $fecha = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$fecha, $correo, $nombre, $asunto, $comentario]);

    header('Location: contacto.php?success=1');
    exit;
}
?>