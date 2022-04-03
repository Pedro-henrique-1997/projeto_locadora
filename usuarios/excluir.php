<?php
require_once("..\conexao.php");

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if(empty($id)){
	echo "ID não encontrado";
}

$PDO = conectar_bd();

$delete = "DELETE FROM usuario WHERE id = :id ";
$deletar = $PDO->prepare($delete);
$deletar->bindParam(":id", $id, PDO::PARAM_INT);
$deletar->execute();

if($deletar->execute()){
	header("Location:..\usuario.php");
}else{
	echo "Erro ao remover";
	print_r($stmt->errorInfo());
}

?>