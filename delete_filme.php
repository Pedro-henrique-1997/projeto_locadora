<?php

include "conexao.php";

$id = isset($_GET['id'])  ?  $_GET['id'] : null;

if(empty($id)){
	echo "ID não econtrado";
}

$sql = "DELETE FROM filme WHERE id = :id";
$PDO = conectar_bd();

$delete = $PDO->prepare($sql);
$delete->bindParam(":id", $id, PDO::PARAM_INT);
$delete->execute();

if($delete->execute()){
	header("Location:Listar_filmes.php");
}else{
	echo "Erro ao remover";
	print_r($stmt->errorInfo());
}
?>