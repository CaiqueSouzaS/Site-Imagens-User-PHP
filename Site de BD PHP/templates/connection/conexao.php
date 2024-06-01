<?php
class BancodeDados {
  
    private $host = "localhost"; 	
    private $user = "root"; 		
    private $senha = "usbw"; 		
    private $banco = "cadastros"; 		
    public $con;
	
	function conecta(){
        $this->con = @mysqli_connect($this->host,$this->user,$this->senha, $this->banco);
        if(!$this->con){
			die ("Problemas com a conexao");
        }
    }
	
	function fechar(){
		mysqli_close($this->con);
		return;
	}
	
}

?>