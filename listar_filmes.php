<?php

require_once "conexao.php";

$PDO = conectar_bd();

$sql_cont = "SELECT COUNT(*) FROM filme ORDER BY nome ASC";

$sql = "SELECT * FROM filme ORDER BY nome ASC";

$sql_total = $PDO->prepare($sql_cont);
$sql_total->execute();
$sql_total = $sql_total->fetchColumn();

$sql_dados = $PDO->prepare($sql);
$sql_dados->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Filmes</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php

	?>
	<h1>Filmes em Catálogo</h1>
	<hr>

	<a href="filme_form.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>

	<h5>Quantidade de filmes no sistema: <?php echo $sql_total ?></h5>

	<?php if ($sql_total > 0) :?>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Genero</th>
					<th scope="col">Ano</th>
					<th scope="col">Classificação</th>
					<th scope="col">Descrição</th>
					<th scope="col">Ações<th>
					</tr>
				</thead>
				<tbody>
				<?php while ($row_filme = $sql_dados->fetch(PDO::FETCH_ASSOC)): ?>
					<tr>
						<th><?php echo $row_filme['nome']?></th>
						<td><?php echo $row_filme['genero']?></td>
						<td><?php echo $row_filme['ano']?></td>
						<td><?php echo $row_filme['classificacao']?></td>
						<td><?php echo $row_filme['descricao']?></td>
						<td>
							<a href="editar_filme.php?id=<?php echo $row_filme['id']?>"><button type="button" class="btn btn-warning">Editar</button></a>
							<a href="delete_filme.php?id=<?php echo $row_filme['id'] ?>" onclick="return confirm('Tem certeza de que deseja <?php echo $row_filme['nome']?>');"><button type="button" class="btn btn-danger">Deletar</button></a>
						</td>
					</tr>
               <?php endwhile; ?>

				</tbody>
			</table>

			<?php else: ?>

				<p>Nenhum filme Cadastrado</p>

			<?php endif; ?>


			<!-- JavaScript Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		</body>
		</html>