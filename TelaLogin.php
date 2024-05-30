<?php
    include_once('config.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0){
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        } else {

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_code = mysqli_query ($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

            $quantidade = $sql_code->num_rows;

            if($quantidade == 1){

                $usuraio = $sql_code->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuraio['id'];
                $_SESSION['nome'] = $usuraio['nome'];

                header("location: TelaSaibaMais.html");

            }else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tackle Talk</title>
    <link rel="stylesheet" href="cssMudaCor.css">
    <link rel="stylesheet" href="TelaLoginCss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div id="login-title">
            <div id="div-login-texto">
                <img id="retangulo-login" src="imagens/Rectangle 17.png" alt="">
                <p id="texto-login">Login</p>
            </div>
            <div>
                <button onclick="Mudarestado('menu')" id="botao"><img id="menu-icon" src="imagens/white-hamburger-menu-icon-24.png" alt="menu"></button>
            </div>
        </div>
    </header>

<section>
    <div id="menu">
        <div id = "container-menu">
            <div id="botao-config">
                <a href="TelaConfig.html"  class="botoes-menu"><img src="imagens/settings.png" alt=""></a>
                <p class="texto-icon-menus">Configurações</p>
            </div>
        </div>
    </div>  

    <div id="caixa">
    <form action="TelaLogin.php" method="POST">
        <div id="dentro">
            <h2 id="Login">Login</h2>
            <hr id="linha">
                    <div id="login-senha">
                        <div class="caixas-entrada">
                            <label class="nome-caixa">E-MAIL:</label>
                            <input name = "email" class="caixa-login" type="email" />
                        </div>

                        <div class="caixas-entrada">
                            <label class="nome-caixa">SENHA:</label>
                            <input name = "senha" class="caixa-login" type="password"/> 
                        </div>

                        <div>
                            <button type="submit" name="submit" id="botao-envia">Entrar</button>
                        </div>

                    </div>

                    <div id="links">
                            <a class="link-baixo" id="texto-senha" href="TelaEsqueciSenha.html">ESQUECEU A SENHA?</a>
                        <div id="link-cadastra">
                            <p id="texto-final">NÃO POSSUI CONTA?</p>
                            <a class="link-baixo" href="TelaCadastro.php">CADASTRE-SE!</a>
                        </div>
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
<script  type="text/javascript" src="scriptMenuLogin.js"></script>

</body>
</html>