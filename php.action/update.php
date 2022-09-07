<?php
require_once 'db_connect.php';

if($_POST){
	$nome=$_POST['nome'];
	$sobrenome=$_POST["sobrenome"];
	$contato=$_POST["contato"];
	$idade=$_POST["idade"];

$id= $_POST['id'];

$sql="UPDATE alunos SET nome = '$nome',sobrenome = '$sobrenome',contato='$contato',idade='$idade',ativo=1 where id='$id'";

if($connect -> query($sql) === TRUE){
		echo '<p> Atualização Realizada com Sucesso </p>';
		echo "<a href='../edit.php?id=".$id."'><button type ='button'>Editar</button></a>";
		echo "<a href='../index.php'><button type='button'>Página Inicial</button></a>";

	}else{
		echo "Erro ao atualizar os dados do produto:".$connect -> error;
	}
	$connect -> close();

}

?>