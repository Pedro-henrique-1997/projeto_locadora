<?php

include "conexao.php";

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$classificacao = $_POST['classificacao'];
$descricao = $_POST['descricao'];

if(empty($nome) || empty($genero) || empty($ano) || empty($classificacao) || empty($descricao)){
	echo "<script>
		alert('Preencha todos os campos');
	</script>";
	exit;
}

$PDO = conectar_bd();


$verif = "SELECT * FROM filme WHERE nome = '$nome' ";
$valid = $PDO->query($verif);
$dados = $valid->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if($linhas > 0){
	echo "<script>
		alert('Já existe um filme com esse nome');
	</script>";
	exit;
}else{
	$sql = "INSERT INTO filme(nome, genero, ano, classificacao, descricao) VALUES(:nome, :genero, :ano, :classificacao, :descricao)";

$insert_filme = $PDO->prepare($sql);
$insert_filme->bindParam(":nome", $nome);
$insert_filme->bindParam(":genero", $genero);
$insert_filme->bindParam(":ano", $ano);
$insert_filme->bindParam(":classificacao", $classificacao);
$insert_filme->bindParam(":descricao", $descricao);
}

$insert_filme = $PDO->prepare($sql);
$insert_filme->bindParam(":nome", $nome);
$insert_filme->bindParam(":genero", $genero);
$insert_filme->bindParam(":ano", $ano);
$insert_filme->bindParam(":classificacao", $classificacao);
$insert_filme->bindParam(":descricao", $descricao);

if($insert_filme->execute()){
	header("Location: listar_filmes.php");
}else{
	echo "Erro ao inserir";
	print_r($insert_filme->errorInfo());
}

?>