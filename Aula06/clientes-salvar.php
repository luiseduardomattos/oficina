<?php
// receber as informações

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
// dados da conexão

$bd_usuario = "root";
$bd_senha = "";
$_bd_nome_do_banco = "bd_oficina";
$bd_servidor = "localhost";

// abrir a conexão

$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $_bd_nome_do_banco);

// criar o sql inserir

$sql = "insert into t_clientes(nome, telefone) values('$nome', '$telefone')";

// executar o sql no banco

mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página de listagem
header('location: clientes.php');

?>  
