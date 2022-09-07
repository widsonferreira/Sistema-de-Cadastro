<?php
require_once 'db_connect.php';

if($_POST){
	$id = $_POST['id'];


	$sql="UPDATE alunos SET ativo=0 where id={$id}";
	if($connect->query($sql)===TRUE){
		echo "<p> Aluno Removido com Sucesso </p>";
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
	
}else{
	echo "ERRO AO EXCLUIR O REGISTRO: ";$connect->error;

}
$connect->close();
}
?>