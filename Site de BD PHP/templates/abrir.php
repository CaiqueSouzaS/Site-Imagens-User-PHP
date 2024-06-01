<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Visualização</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="./css/abrir.css">
</head>

<body>

<?php
	include_once('connection/conexao.php');
	$id = $_GET['id'];
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	// recuperando o nome do arquivo 
	$sqlstring = "select * from imagens where id=$id";
	$query = @mysqli_query($mysql->con, $sqlstring);
	$dados = @mysqli_fetch_array($query);
	echo "<img src='arquivos/".$dados['arquivo']."' width='300px' heigth='300px'>";
?>
</ br>
</ br>
<button><a href="home.php" text-decoration-line="none">voltar</a></button>
</body>
</html>
