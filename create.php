<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adicionar Alunos</title>
</head>
<body>
	<fieldset>
		<legend>Adicionar Aluno</legend>
		<form action="php.action/create.php" method="post">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>Nome: </th>
					<td><input type="text" name="nome" placeholder="Nome"></td>
				</tr>
				<tr>
					<th>Sobrenome: </th>
					<td><input type="text" name="sobrenome" placeholder="Sobrenome"></td>
				</tr>
				<tr>
					<th>Contato: </th>
					<td><input type="text" name="contato" placeholder="Contato"></td>
				</tr>
				<tr>
					<th>Idade:</th>
					<td><input type="text" name="idade" placeholder="Idade"></td>
				</tr>
				<tr>
					<td><button type="submit">Salvar Dados</button></td>
					<td><a href="index.php"><button type="button">Voltar</button></a></td>
				</tr>
			</table>
		</form>
	</fieldset>

</body>
</html>