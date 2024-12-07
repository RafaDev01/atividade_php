<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php?error=true');
    exit(); // Garante que o script pare após o redirecionamento
}
