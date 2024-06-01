<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
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
                <h1>CADASTRO</h1>
                <form method="post" action="processamento.php">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario-novo" placeholder="Usuário">
                    </div>

                    <div class="textfield">
                        <label for="usuario">Senha</label>
                        <input type="password" name="senha-novo" placeholder="Senha">
                    </div>
                    <button class="btn-login" type="submit" value="logar">Cadastrar</button>
                </form>
		        <ul>
                    <li>Já tem uma <a href="index.php">conta</a>?</li>
                </ul>
            </div>
        </div>
    </div>


</body>

</html>