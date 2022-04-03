<?php

require "conexao.php";

$id = isset($_GET['id'])  ?  $_GET['id'] : null;

if (empty($id)) {
	echo "ID não encontrado";
}

$PDO = conectar_bd();
$sql_filme = "SELECT * FROM filme WHERE :id = id";

$ver_filme = $PDO->prepare($sql_filme);
$ver_filme->bindParam(":id", $id, PDO::PARAM_INT);
$ver_filme->execute();

$filme = $ver_filme->fetch(PDO::FETCH_ASSOC);

if(!is_array($filme)){
	echo "dados não encontrado para edição";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Insira os dados do filme</h1>

	<form method="post" action="edit_filme.php">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome: " autocomplete="off" value="<?php echo $filme['nome']?>">    
		</div>

		<div class="form-group">
			<label>Genero</label>
			<input type="text" class="form-control" id="classe" name="genero" placeholder="Digite genero pertencente: " autocomplete="off" value="<?php echo $filme['genero']?>">    
		</div>

		<div class="form-group">
			<label>Ano</label>
			<input type="text" class="form-control" id="ano" name="ano" placeholder="Digite o ano pertencente: " autocomplete="off" value="<?php echo $filme['ano']?>">    
		</div>

		<div class="form-group">
			<label>Classificação</label>
			<input type="text" class="form-control" id="classificacao" name="classificacao" placeholder="Digite a classificacao pertencente: " autocomplete="off" value="<?php echo $filme['classificacao']?>">    
		</div>

		<div class="form-group">
			<label>Descrição</label>
			<input type="text" class="form-control" id="descrição" name="descricao" placeholder="Digite a descrição: " autocomplete="off" value="<?php echo $filme['descricao']?>">    
		</div>

		<input type="hidden" name="id" value="<?php echo $filme['id']?>">

		<button type="submit" class="btn btn-success">Alterar</button>
		
	</form>

	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>