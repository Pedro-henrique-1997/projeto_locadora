<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Insira os dados do filme</h1>

	<form method="post" action="add_filme.php">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome: " autocomplete="off">    
		</div>

		<div class="form-group">
			<label>Genero</label>
			<input type="text" class="form-control" id="classe" name="genero" placeholder="Digite genero pertencente: " autocomplete="off">    
		</div>

		<div class="form-group">
			<label>Ano</label>
			<input type="text" class="form-control" id="ano" name="ano" placeholder="Digite o ano pertencente: " autocomplete="off">    
		</div>

		<div class="form-group">
			<label>Classificação</label>
			<input type="text" class="form-control" id="classificacao" name="classificacao" placeholder="Digite a classificacao pertencente: " autocomplete="off">    
		</div>

		<div class="form-group">
			<label>Descrição</label>
			<input type="text" class="form-control" id="descrição" name="descricao" placeholder="Digite a descrição: " autocomplete="off">    
		</div>

		<button type="submit" class="btn btn-success">Inserir</button>
		
	</form>

	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>