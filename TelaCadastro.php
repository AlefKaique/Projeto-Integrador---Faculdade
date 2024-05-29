<?php
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $data = $_POST['data-nasc'];
        $email = $_POST['email'];
        $telefone = $_POST['tell'];
        $senha = $_POST['senha'];

        $result = mysqli_query ($conexao, "INSERT INTO usuarios (nome, data_de_nascimento, email, telefone, senha)
        VALUES ('$nome','$data','$email','$telefone','$senha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="TelaCadastroCss.css">
    <link rel="stylesheet" href="cssMudaCor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div id="login-title">
            <div id="div-login-texto">
                <img id="retangulo-login" src="imagens/Rectangle 17.png" alt="">
                <p id="texto-login">Cadastro</p>
            </div>
            <div>
                <button onclick="Mudarestado('menu')" id="botao"><img id="menu-icon" src="imagens/white-hamburger-menu-icon-24.png" alt="menu"></button>
            </div>
        </div>
    </header>

<section>
    <div id="menu">
        <div id="container-menu">
            <div id="div-ajuste">
                <div id="container-menus">
                    <div id="menuzinhos">
                        <div class="menus-dos-menus">
                            <a href="ClubeDeEsportes.php" class="botoes-menu"><img class="imagem-botoes-menu" src="imagens/casinha.png" alt=""></a>
                            <p class="texto-icon-menus">Início</p>
                        </div>
                        <div class="menus-dos-menus">
                            <a href="TelaLogin.php" class="botoes-menu"><img class="imagem-botoes-menu" src="imagens/user.png" alt=""></a>
                            <p class="texto-icon-menus">Login</p>
                        </div>
                        <div class="menus-dos-menus">
                            <a href="TelaFaleConosco.html" class="botoes-menu"><img class="imagem-botoes-menu" src="imagens/question.png" alt=""></a>
                            <p class="texto-icon-menus">Contato</p>
                        </div>
                    </div>
                    <div id="configuracao">
                        <div id="botao-config">
                            <a href="TelaConfig.html" class="botoes-menu"><img class="imagem-botoes-menu" src="imagens/settings.png" alt=""></a>
                            <p class="texto-icon-menus">Configurações</p>
                        </div>
                    </div>
                </div>
                <div>
                    <hr class="linhas-menus">
                    <p id="text-menu">MENU</p>
                    <hr class="linhas-menus">
                </div>
                <div id="links">
                    <a href="TelaSaibaMais.html" class="botoes">Quer saber mais? clique aqui</a>
                    <p class="textos-para-menus">Esportes</p>
                    <a href="TelaMenuEsportes.html" class="botoes">Veja aqui a nossa lista</a>
                    <p class="textos-para-menus">Eventos</p>
                    <a href="" class="botoes">Agenda de Eventos</a>
                    <p class="textos-para-menus">Onde estamos?</p>
                    <a href="TelaLocalizacao.html" class="botoes">Localização do clube</a>
                </div>
        </div>
        </div>
    </div> 
    <div id="caixa">
    <form id="formulario" action="TelaCadastro.php" method="POST">
        <div>
            <h2 id="Login">Cadastro</h2>
            <hr id="linha">
                    <div id="login-senha">
                        <div class="caixas-entrada">
                            <label class="nome-caixa">NOME:</label>
                            <input name="nome" class="caixa-login" type="text" />
                        </div>
                        <div class="caixas-entrada">
                            <label class="nome-caixa">DATA DE NASCIMENTO:</label>
                            <input name="data-nasc" id="caixa-data-nasc"  class="caixa-login" type="date"/> 
                        </div>
                        <div class="caixas-entrada">
                            <label class="nome-caixa">E-MAIL:</label>
                            <input name="email" class="caixa-login" type="email" />
                        </div>
                        <div class="caixas-entrada">
                            <label class="nome-caixa">TELEFONE:</label>
                            <input name="tell" class="caixa-login" type="text" />
                        </div>
                        <div class="caixas-entrada">
                            <label class="nome-caixa">CRIE A SENHA:</label>
                            <input name="senha" class="caixa-login" type="text"/> 
                        </div>
                        
                    </div>

                    <div id="link-cadastra">
                        <div>
                            <input type="submit" name="submit" id="botao-envia"></input>
                        </div>
                        <p id="texto-com-margin" class="texto-final">JÁ POSSUI CONTA?</p>
                        <a class="texto-final" class="link-baixo" href="TelaLogin.php">LOGIN</a>
                    </div>
        </div>
    </div>
    </form>
</section>

<footer>
    <div id="rodape">
        <div>
            <img id="logo-bola" src="imagens/Group.png" alt="">
        </div>
    </div>
</footer>

<script  type="text/javascript" src="scriptVerificaestilo.js"></script>
<script  type="text/javascript" src="scriptMudaCor.js"></script>
<script  type="text/javascript" src="scriptTelaCadastro.js"></script>

</body>
</html>