<?php
	include 'conexao.inc.php';
	
	function MostraUltimo(){
				
		$query='SELECT * FROM tb_cliente
				order by id desc limit 1';
		AbrirConexao();
		
			$result=mysql_query($query);
		
		FecharConexao();
				
		$registro=mysql_fetch_array($result);
		
		$nome=$registro['nome'];
		$telefone=$registro['telefone'];
		$cpf=$registro['cpf'];
		
		$retorno=(' O nome do cliente eh ' .$nome. ', o telefone: ' .$telefone. ' e o cpf: ' .$cpf.'');
		return $retorno;
	}
?>	

<html>
	<body>
		<form action="volta.php" method="post">
		<h1>Os dados do ultimo cliente</h1>
		<tr>
			<?php echo MostraUltimo(); ?>
		</tr>
		<p>
		<td align="center"><input type="submit" value="Voltar a pagina inicial"></td>
		
	</body>
</html>	