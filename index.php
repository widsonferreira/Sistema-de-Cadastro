<?php require_once 'php.action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css"></style>
</head>
<body>
	<div class="tabelaAluno">
			<tr>
					<td><a href="create.php"><button type="button">Adicionar Novos Alunos</button></a></td></tr>
		<table border="1" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Contato</th>
					<th>Idade</th>
				</tr>

			</thead>


			<tbody>
				<?php
				$sql="SELECT * FROM alunos WHERE ativo=1";
				$result = $connect->query($sql);

				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						echo "<tr>
						<td>".$row["nome"]."</td>
						<td>".$row["sobrenome"]."</td>
						<td>".$row["contato"]."</td>
						<td>".$row["idade"]."</td>
						<td>
						<a href='edit.php?id=".$row['id']."'>
						<button type ='button'>Editar</button>
						</a>
						</td>
						<td>
						<a href='remove.php?id=".$row['id']."'>
						<button type = 'button'>Excluir</button>
						</td>
						</tr>";
					}
				}else{
					echo "<tr><td colspan='5'><center>Sem dados a apresentar</center></td></tr>";
				}


				?>
			</tbody>

		

		</table>

</body>
</html>