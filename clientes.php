<?php
include('verificarLogin.php')

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        body {
            background-color: LightBlue;
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Clientes</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8'); ?>!</p>
    <a href="logout.php">Sair</a>
</body>

</html>