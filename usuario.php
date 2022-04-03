<?php
require_once "conexao.php";

$sql = "SELECT * FROM usuario ORDER BY nome";
$PDO = conectar_bd();
$sql_usuario = $PDO->prepare($sql);
$sql_usuario->execute();



?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuarios</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">Usuarios no sistema</h1>

<div style="text-align: center">
	<a href="usuarios/FormUsuario.php">
		<button type="button" class="btn btn-primary">Cadastrar usuario</button>
	</a>
</div>
	

	<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Nivel</th>
      <th scope="col">Ações</th>      
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php while($linha_usu = $sql_usuario->fetch(PDO::FETCH_ASSOC)):?>
      <td><?php echo $linha_usu['nome']?></td>
      <td><?php echo $linha_usu['email']?></td>
      <td><?php echo $linha_usu['nivel']?></td>
      <td>
      	<a href="usuarios\editar.php?id=<?php echo $linha_usu['id']?>">
      		<button type="button" class="btn btn-warning">Editar</button>
      	</a>
      	<a href="usuarios\excluir.php?id=<?php echo $linha_usu['id']?>" onclick="return confirm('Tem certeza de que deseja <?php echo $linha_usu['nome']?>');">
      		<button type="button" class="btn btn-danger">Excluir</button>
      	</a>
      </td>
    </tr>
   <?php endwhile?>
  </tbody>
</table>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>