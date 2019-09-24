<?php
	include 'conexao.inc.php';
	
	$nome=$_POST['nome'];
	$telefone=$_POST['telefone'];
	$cpf=$_POST['cpf'];
	
	AbrirConexao();
	
	$query=" INSERT INTO tb_cliente
					(nome, telefone, cpf)
					VALUE
					('$nome ',' $telefone ',' $cpf');";
	
	$result=mysql_query($query);
	
	FecharConexao();
	
	header('Location: mostra.php');
	exit;
?>	