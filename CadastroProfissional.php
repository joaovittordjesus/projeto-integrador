<?php

//include $_SERVER['DOCUMENT_ROOT'] . ('/ProjetoIntegrador/Config/Protect.php');

if(isset($_POST['usuario'])){

    include $_SERVER['DOCUMENT_ROOT'] . ('/ProjetoIntegrador/Config/Conexao.php');


    $nome_funcionario= $_POST['nome_funcionario'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
	$cargo = $_POST['cargo'];
	$telefone = $_POST['telefone'];
	$disponibilidade = $_POST['disponibilidade'];
    $senha =password_hash($_POST['senha'], PASSWORD_DEFAULT);
    

    $mysqli->query("INSERT INTO funcionarios (id_funcionarios, nome_funcionario, email, usuario, cargo, telefone, disponibilidade, senha) 
	VALUES (NULL,'$nome_funcionario', '$email', '$usuario', '$cargo', '$telefone', '$disponibilidade', '$senha');");

	header('Location: /ProjetoIntegrador/CadastroProfissional.php');
	exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoIntegrador/Styles/styleCadastroProfissional.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <title>Cadastro Profissional</title>
    <style>
        .span-required{
            top: 95%;
            left:6px;
            font-size: 19px;
            margin: 3px 0 0 1px;
            color: red;
            display: none;
            border: bold;
            position: absolute;
        }

    </style>

</head>
<body>


<nav class="menu-nav">

			<div class="menuToggle">
					<a href="Home.php" >
						<img src="img/logo2.png">
					</a>
			</div>

				
				<!--<ul class="cabeçalho-link">
					<li><a href="#infantil">Home</a></li>
				</ul>cabeçalho-link-->
					
			<div class="perfil">
				<h3>Daniel Cristiano Fonseca <br><span>Coordenador</span></h3>
				<div class="imgCx">
					<img src="img/unnamed.png" alt="...">
				</div>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="">
							<ion-icon name="person-outline"></ion-icon>
							Perfil
						</a>
					</li>
					<li>
						<a href="">
							<ion-icon name="chatbubble-outline"></ion-icon>
							Cx. de Entrada
						</a>
					</li>
					<li>
						<a href="">
							<ion-icon name="settings-outline"></ion-icon>
							Configurações
						</a>
					</li>
					<li>
						<a href="">
							<ion-icon name="settings-outline"></ion-icon>
							Ajuda
						</a>
					</li>
					<li>
						<a href="/ProjetoIntegrador/Config/Logout.php">
							<ion-icon name="log-out-outline"></ion-icon>
							Deslogar
						</a>
					</li>
				</ul>
			</div>
				
		</nav><!--NAV-->

    <div class="background">   

    <form action="" method="post" >            
        <div class="main-login">
            <div class="login">
                <div class="card-login">

                <div class="titulo">
                    <h1>Cadastrar Profissional</h1>
                </div>


                <div class="textfield">
						<input type="text" name="nome_funcionario"  placeholder="Digite o nome completo" class="inputs required "
							 autofocus>
						<span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
					</div>

					<div class="textfield">
						<input type="text" name="usuario" id="usuario" placeholder="Digite o nome de usuario" class="inputs required "
							 autofocus>
						<span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
					</div>


					<div class="textfield">
						<input type="email" name="email" id="email" placeholder="Digite um email" class="inputs required "
							>
						<span class="span-required">Digite um email válido</span>
					</div>

					<div class="textfield">
						<input type="celular" name="telefone" placeholder="Digite um número de celular"
							class="inputs required " required >
						<span class="span-required">Digite um celular válido</span>
					</div>



					<div class="select-area">
						<div class="container">
							<!-- Select do cargo -->
							<div class="select-btn" data-name="Cargo">
								<span class="btn-text">Selecione o cargo</span>
								<span class="arrow-dwn">
									<i class="fa-solid fa-chevron-down"></i>
								</span>
							</div>
							<ul class="list-items">
								<li class="item"  >
									<span class="checkbox" name="cargo">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Professor</span>
								</li>
								<li class="item">
									<span class="checkbox" name="cargo">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Coordenador</span>
								</li>
							</ul>
						</div>

						<div class="container">
							<!-- Select do curso -->
							<div class="select-btn" data-name="Curso">
								<span class="btn-text">Selecione o curso</span>
								<span class="arrow-dwn">
									<i class="fa-solid fa-chevron-down"></i>
								</span>
							</div>
							<ul class="list-items">
								<li class="item">
									<span class="checkbox" name="curso">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">TADS</span>
								</li>
								<li class="item">
									<span class="checkbox" name="curso">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Fisioterapia</span>
								</li>
							</ul>
						</div>

						<div class="container">
							<!-- Select do curso -->
							<div class="select-btn" data-name="Disciplina">
								<span class="btn-text">Selecione a disciplina</span>
								<span class="arrow-dwn">
									<i class="fa-solid fa-chevron-down"></i>
								</span>
							</div>
							<ul class="list-items">
								<li class="item">
									<span class="checkbox" name="disciplina">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Cybersegurança</span>
								</li>
								<li class="item">
									<span class="checkbox">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Fisioterapia</span>
								</li>
								<li class="item">
									<span class="checkbox">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Engenharia de software</span>
								</li>
								<li class="item">
									<span class="checkbox">
										<i class="fa-solid fa-check check-icon"></i>
									</span>
									<span class="item-text">Engenharia mecanica</span>
								</li>
							</ul>
						</div>

						<!-- Fim do select-area -->
					</div>


					<div class="checkbox-semana">
						<label for="disponibilidade">Disponibilidade:</label>

                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="segunda" value="S">
						<label for="segunda">Segunda-feira</label>
                        </div>

                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="terca" value="T">
						<label for="terca">Terça-feira</label>
                        </div>
                        
                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="quarta" value="Q">
						<label for="quarta">Quarta-feira</label>
                        </div>

                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="quinta" value="Q">
						<label for="quinta">Quinta-feira</label>
                        </div>

                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="sexta" value="S">
						<label for="sexta">Sexta-feira</label>
                        </div>

                        <div class="semana">
						<input type="checkbox" name="disponibilidade[]" id="sabado" value="S">
						<label for="sabado">Sábado</label>
                        </div>
					</div>

					<div class="textfield">
						<input type="password" name="senha" id="password" placeholder="Senha" class="inputs required">
						<div class="icon" id="icon" onclick="showHide()"></div>
						<span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
					</div>

					<div class="textfield">
						<input type="password" id="passwordSecond" placeholder="Repita a senha"
							class="inputs  required" >
						<div class="icon" id="icon2" onclick="showHideSecond()"></div>
						<span class="span-required">Senhas devem ser compatíveis</span>
					</div>
					<button class="btn-login" type="submit" >Cadastrar</button>
				</div>
			</div>
		</div>
	</form>

    </div> 

	<script>
		const selectBtns = document.querySelectorAll(".select-btn");

		selectBtns.forEach((selectBtn) => {
			const listItems = selectBtn.nextElementSibling;
			const items = selectBtn.nextElementSibling.querySelectorAll(".item");
			const btnText = selectBtn.querySelector(".btn-text");
			const selectName = selectBtn.getAttribute("data-name");
			const itemName = selectBtn.getAttribute("data-name");

			selectBtn.addEventListener("click", () => {
				selectBtn.classList.toggle("open");
			});

			items.forEach((item) => {
				item.addEventListener("click", () => {
					item.classList.toggle("checked");

					const checkedItems = selectBtn.nextElementSibling.querySelectorAll(".checked");
					const selectedItemsText = Array.from(checkedItems).map((checkedItem) => {
						return checkedItem.querySelector(".item-text").textContent;
					});

					if (checkedItems.length === 1) {
						if (itemName === "Disciplina") {
							btnText.innerText = `1 ${itemName} selecionada: ${selectedItemsText.join(", ")}`;
						} else {
							btnText.innerText = `1 ${itemName} selecionado: ${selectedItemsText.join(", ")}`;
						}
					} else if (checkedItems.length > 0) {
						if (selectedItemsText.join(", ").length > 20) { 
							const pluralForm = selectName === "Disciplina" ? "selecionadas" : "selecionados";
							btnText.innerText = `${checkedItems.length} ${itemName}${checkedItems.length === 1 ? "" : "s"} ${pluralForm}`;
						} else {
							if (selectName === "Disciplina") {
								btnText.innerText = `${checkedItems.length} ${itemName}s selecionadas: ${selectedItemsText.join(", ")}`;
							} else {
								btnText.innerText = `${checkedItems.length} ${itemName}s selecionados: ${selectedItemsText.join(", ")}`;
							}
						}
					} else {
						if (selectName === "Disciplina") {
							btnText.innerText = `Selecione a ${itemName}`;
						} else {
							btnText.innerText = `Selecione o ${itemName}`;
						}
					}
				});
			});
		});




	</script>

	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="/ProjetoIntegrador/Scripts/script.js"></script>
	<!-- <script src="/ProjetoIntegrador/Scripts/scriptCadastro.js"></script> -->
    <script src="/ProjetoIntegrador/Scripts/scriptPerfil.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>