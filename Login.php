<?php
include("Conexao.php");

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    if(strlen($_POST['usuario']) == 0){
        echo "Preencha seu nome de Usuário";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        if($sql_query->num_rows == 1){
            $usuario = $sql_query->fetch_assoc();
            if(password_verify($senha, $usuario['senha'])){

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: Inicio.php");
            }else{
                echo '<div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                <strong>Atenção:</strong> Insira seu nome de usuário e senha.
              </div>';
                
            }
        }else{
            echo '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
            <strong>Atenção:</strong> Insira seu nome de usuário e senha.
          </div>';
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Einstein Login</title>
    <style>

        .span-required{
            top: 95%;
            left:6px;
            font-size: 15px;
            margin: 3px 0 0 1px;
            color: red;
            display: none;
            border: bold;
            position: absolute;
        }

    </style>


</head>
<body>

    <form action="" method="POST" id="form">            
        <div class="main-login">
            <div class="login">
                <div class="card-login">
                    <div class="logo">
                        <img src="img/logo2.png" >
                    </div>
                    
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Nome de Usuário" autofocus  oninput="nomeUsuarioValidate()">
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                        
                    </div>

                    

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="password" placeholder="Digite sua Senha"  oninput="mainPasswordValidate()">
                        <div id="icon" onclick="showHide()"></div>
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                    <p><a href="#">Esqueceu a Senha?</a></p>
                </div>
                
            </div>
        </div>
    </form>

    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Atenção:</strong> Insira seu nome de usuário e senha.
                    </div>
    
    
    <script src="script.js"></script>
    
    
</body>
</html>