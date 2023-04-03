<?php

include('Protect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    Bem Vindo a página inicial, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href = "Logout.php">Sair</a>
        <a href = "Cadastro.php">Cadastrar</a>
    </p>
</body>
</html>