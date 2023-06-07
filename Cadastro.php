<?php



if(isset($_POST['usuario'])){

    include $_SERVER['DOCUMENT_ROOT'] . ('/ProjetoIntegrador/Config/Conexao.php');


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha =password_hash($_POST['senha'], PASSWORD_DEFAULT);
    

    $mysqli->query("INSERT INTO `usuarios` (`id`, `nome`,`sobrenome`, `email`,`usuario`, `senha`) VALUES (NULL, '$nome', '$sobrenome', '$email', '$usuario', '$senha');");

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoIntegrador/Styles/styleCadastro.css">
    <title>Einstein Cadastro</title>
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
                        <input type="text" name="nome" placeholder="Digite seu nome" class="inputs required "  autofocus>
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                    </div>

                    <div class="textfield">
                        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" class="inputs required "   >
                        <span class="span-required">Sobrenome deve ter no mínimo 3 caracteres</span>
                    </div>

                    <div class="textfield">
                        <input type="email" name="email" placeholder="Digite seu email" class="inputs required "   >
                        <span class="span-required">Digite um email válido</span>
                    </div>

                    <div class="textfield">
                        <input type="text" name="usuario" placeholder="Digite seu nome de usuário" class="inputs required"   >
                        <span class="span-required">Usuário deve ter no mínimo 3 caracteres</span>
                    </div>

                    <div class="textfield">
                        <input type="password" name="senha" id="password" placeholder="Senha" class="inputs required" >
                        <div class="icon" id="icon" onclick="showHide()"></div>
                        <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
                    </div>

                    <div class="textfield">
                        <input type="password" id="passwordSecond" placeholder="Repita a sua senha" class="inputs  required"  >
                        <div class="icon" id="icon2" onclick="showHideSecond()"></div>
                        <span class="span-required">Senhas devem ser compatíveis</span>
                    </div>
                    <button class="btn-login" type="submit">Cadastrar</button>  
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/ProjetoIntegrador/Scripts/script.js"></script>
    <script src="/ProjetoIntegrador/Scripts/scriptCadastro.js"></script>
</body>
</html>