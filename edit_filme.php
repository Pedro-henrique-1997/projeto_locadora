<?php

include "conexao.php";

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$classificacao = $_POST['classificacao'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];


if(empty($nome) || empty($genero) || empty($ano) || empty($classificacao) || empty($descricao)){
	echo "<script>
	alert('Preencha todos os campos');
	</script>";
	exit;
}

$PDO = conectar_bd();

$sql = "UPDATE filme SET nome = :nome, genero = :genero, ano = :ano, classificacao = :classificacao, descricao = :descricao WHERE id = :id";

$update_filme = $PDO->prepare($sql);
$update_filme->bindParam(":nome", $nome);
$update_filme->bindParam(":genero", $genero);
$update_filme->bindParam(":ano", $ano);
$update_filme->bindParam(":classificacao", $classificacao);
$update_filme->bindParam(":descricao", $descricao);
$update_filme->bindParam(":id", $id, PDO::PARAM_INT);



if($update_filme->execute()){
	header("Location: listar_filmes.php");
}else{
	echo "Erro ao inserir";
	print_r($update_filme->errorInfo());
}

?>