# Cadastro
Simples cadastro para armazenar nome, telefone e cpf
Desenvolvido para simplemente adicionar alguns dados no banco e mostrar o ultimo resultado.
Dessa forma no cadastro você pode aterar os campos ou até mesmo adicionar.
Ele vai chamar o "inserir.php" para poder inserir os dados no banco.
O inserir faz um include do "conexao.inc.php" para abrir o servidor e o banco.
Dessa forma o inserir realiza a query "INSERT" no banco e já chama o mostra.
Por sua vez o "mostra.php" faz um include do "conexao.inc.php" e realiza a query "SELECT" no banco e seleciona o último dado inserido para mstrar.
