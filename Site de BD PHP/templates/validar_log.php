<?php
	require_once('connection/conexao.php');
	require "pass/password.php";

	$login = $_POST['usuario-pessoal'];
	$senha = $_POST['senha-pessoal'];
	$hash = password_hash($senha, PASSWORD_DEFAULT);
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	$sqlstring = " select * from usuarios where nome = '$login' ";
	$sqlstring3 = "select senha from usuarios where nome='$login' ";

	$senhaDB = mysqli_query($mysql->con, $sqlstring3);
	
	$info = mysqli_query($mysql->con, $sqlstring);
	if (!$info) { die('<b>Query Inválida: </b>' . mysqli_error($mysql->con)); }

	$registro = mysqli_num_rows($info);	
	
	if($registro!=1){
		header("location:cadastro.php");
	}else{
		if(password_verify($senha, $hash) ){
			$dados = mysqli_fetch_array($info);	
			session_start();
			$_SESSION['id'] = $dados['id'];
			$_SESSION['nome'] = $dados['nome'];
			$_SESSION['senha'] = $dados['senha'];
			$_SESSION['log'] = 'ativo';		
			header("location:home.php");
		}else{
			header("location:index.php");
		}
	}
?>
