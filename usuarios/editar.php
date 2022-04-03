<?php

require_once("..\conexao.php");

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if(empty($id)){
	echo "ID não encontrado";
}

$PDO = conectar_bd();

$dados = "SELECT * FROM usuario WHERE id = '$id' ";
$dados_up = $PDO->query($dados);

$dados_usuario = $dados_up->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edição</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Edite seus dados</h1>
	<form method="post" action="edit_usu.php"> 
		<div class="form-group">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome: " autocomplete="off" value="<?php echo $dados_usuario['nome']?>">    
			</div>
		</div>
		<div class="form-group">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Digite o email: " autocomplete="off" value="<?php echo $dados_usuario['email']?>">    
			</div>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha_original" value="<?php echo $dados_usuario['senha_original']?>">
		</div>
        
        <input type="hidden" name="id" value="<?php echo $dados_usuario['id']?>">
		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>