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
	<title>Alterando os dados</title>
</head>
<body>
	<fieldset>
		<legend>Edição de Alunos</legend>

		<form action="php.action/update.php" method="post">
			<table cellspacing="0">
				<tr>
					<th>Nome</th>
					<td><input type = "text" name="nome" placeholder="nome" value="<?php echo $data['nome']?>">
					</td>
				</tr>
				<tr>
					<th>Sobrenome</th>
					<td><input type="text" name = "sobrenome" placeholder="sobrenome" value="<?php echo $data['sobrenome']?>">
					</td>
				</tr>
				<tr>
					<th>Contato</th>
					<td><input type="text" name = "contato" placeholder="contato" value="<?php echo $data['contato']?>">
					</td>
					</tr>
				<tr>
					<th>Idade</th>
					<td><input type="text" name = "idade" placeholder="idade" value="<?php echo $data['idade']?>">
					</td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $data['id']?>"/>
				<td><button type="submit">Salvar Alterações</button></td>
					<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
		</table>
	</form>

		
	</fieldset>

</body>
</html>