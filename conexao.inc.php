<?php
	function AbrirConexao(){
		$servidor='localhost';
		$usuario='root';
		$senha='';
		$banco='mestra';
		
		$con=mysql_connect($servidor, $usuario, $senha);
		mysql_select_db($banco);
	}
	
	function FecharConexao(){
		mysql_close();
	}
?>