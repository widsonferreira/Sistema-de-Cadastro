<?php
require_once'db_connect.php';

if($_POST){
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$contato=$_POST["contato"];
	$idade=$_POST["idade"];

	$sql="INSERT INTO alunos(nome,sobrenome,contato,idade,ativo) VALUES('$nome','$sobrenome','$contato','$idade',1)";
	if($connect->query($sql)===TRUE){
		echo "<p>Novo Aluno Cadastrado com Sucesso</p>";
		echo"<a href='../create.php'><button type='button'>Cadastrar Novo Aluno</button></a>";
		echo"<a href='../index.php'><button type='button'>Pagina Inicial</button></a>";

	}else{

	}
	$connect->close();
}