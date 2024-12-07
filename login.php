<?php
session_start();

if (isset($_POST['usuario'], $_POST['senha'])) {
    if ($_POST['usuario'] == "rafael" && $_POST['senha'] == "123456") {
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: clientes.php');
        exit();
    }
}

if (isset($_GET['error'])) {
    $error = "Você deve realizar o login";
}
?>

<div style="background-color:red; margin:10px">
    <?php echo $error ?? ""; ?>
</div>

<form action="" method="post">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="entrar">
</form>