<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$nome = $_POST ['nome'];
$login = $_POST ['login'];
$senha = $_POST ['senha'];
$email = $_POST ['email'];




/*Comando para insert into*/
$sql = "INSERT INTO usuarios (nm_user,login, senha, email) values ('$nome','$login','$senha','$email')";

/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);
header('Location: Cadastro.html?msg=1')


?>