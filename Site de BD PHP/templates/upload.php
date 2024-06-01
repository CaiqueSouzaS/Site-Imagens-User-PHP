<?php
	include_once('connection/conexao.php');

 	function randString($size){
        //String com valor poss�veis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $return= "";
        for($count= 0; $size > $count; $count++){
            //Gera um caracter aleatorio
            $return.= $basic[rand(0, strlen($basic) - 1)];
        }
         return $return;
    }
	$nome_final = randString(20).".png";
	$nome_arquivo = $_POST['nome-imagem'];	
				
				
				
	if(substr($_FILES['arquivo']['name'], -3)=="png" || substr($_FILES['arquivo']['name'], -3)=="jpg"){
		$dir = './arquivos/'; 
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $nome_final) ) { 	
				$mysql = new BancodeDados();
				$mysql->conecta();
				$sqlstring = "insert into imagens (id, nome, arquivo) values (null, '$nome_arquivo', '$nome_final')";
				mysqli_query($mysql->con, $sqlstring);
				header('Location: home.php'); 		
		} else {		
			echo "Erro ao gravar o arquivo";	
		}
	}else{
			echo "O tipo não é válido!";
	}
?>


