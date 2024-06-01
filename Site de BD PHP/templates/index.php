<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
</head>

<body>
    <div class="tela-login">
        <div class="esq-login">
            <h1>Seja bem vindo!</h1>
            <img src="./img/rino.gif" class="imagem">
        </div>
        <div class="dir-login">
            <div class="card-login">
                <h1>LOGAR</h1>
                <form name="login-logar" method="POST" action="validar_log.php">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario-pessoal" placeholder="Usuário">
                    </div>

                    <div class="textfield">
                        <label for="usuario">Senha</label>
                        <input type="password" name="senha-pessoal" placeholder="Senha">
                    </div>
                    <button class="btn-login" type="submit" value="logar">Login</button>
                </form>
                <ul>
                    <li>Esqueceu sua <a href="">senha</a>?</li>
                    <li>Crie uma conta <a href="cadastro.php">agora</a>!</li>
                </ul>
            </div>
        </div>
    </div>
   
</body>

</html>