<html>
<head>
	<title>Minhas Fotografias</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="UTF-8">
</head>
<link rel="stylesheet" href="./css/home.css">
<body>
	
	<h1> Exemplo de Upload - PHP </h1>
	<?php
session_start();

if ($_SESSION['log'] != "ativo")
   {
	session_destroy();
	header("location:index.php");
	}
	echo "Olá <b>".$_SESSION['nome']."</b>, bem vindo ao sistema</b>";
			
?>
<br><br>
<b>Página autorizada</b>
<br />
<br />	

	<div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="titulo">Título da imagem:</label> </br> <input type="text" name="nome-imagem" id="nome-imagem" required />
			<br />
			<br />	
			<label for="arquivo">Arquivo:</label> </br> <input type="file" name="arquivo" id="arquivo" />
			<br />
			<br />
			<input class="botao" type="submit" value="Upload" />
		</form>
		<form method="post" >

		</form>
	</div>
<hr>

<?php
	include_once('connection/conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	$sqlstring = 'select * from imagens order by arquivo';
	$query = @mysqli_query($mysql->con, $sqlstring);
	echo "<table>";
	while ($dados = @mysqli_fetch_array($query)){
		echo "<tr>";
		echo "<td>".$dados['nome']."</td>";
		echo "<td><a href='apagar.php?id=".$dados['id']."'><img src='./img/delete.png'></a> </td>";
		echo "<td><a href='abrir.php?id=".$dados['id']."'><img src='./img/lupa.png' width='20px' heigth='20px'></a> </td>";
		//echo "<td><img src='arquivos/".$dados['arquivo']."' width='50px' heigth='50px'></td>";
		echo "</tr>";
	}
	$mysql->fechar();	
?>

</body>
</html>