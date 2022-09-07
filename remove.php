<?php 
require_once 'php.action/db_connect.php';

if($_GET['id']){
	$id = $_GET['id'];
$sql = "SELECT * FROM alunos WHERE id = {$id}";
$result = $connect -> query($sql);
$data = $result ->fetch_assoc();
$connect-> close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remover Alunos</title>
</head>
<body>
	<h3>Você realmente deseja remover esse aluno?</h3>
	<form action="php.action/remove.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id']?>">
		<button type="submit">Confirmar</button>
		<a href="index.php"><button type="button">Não desejo apagar</button></a>
	</form>

</body>
</html>