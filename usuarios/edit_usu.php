<?php
include "..\conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha_original = $_POST['senha_original'];

if(empty($nome) || empty($email) || empty($senha_original)){
	echo "<script>
	alert('Preencha todos os campos');
	</script>
	";
}

$PDO = conectar_bd();

$sql = "UPDATE usuario SET nome = :nome, email = :email, senha_original = :senha_original WHERE id = :id";

$insert_usu = $PDO->prepare($sql);
$insert_usu->bindParam(":nome", $nome);
$insert_usu->bindParam(":email", $email);
$insert_usu->bindParam(":senha_original", $senha_original);
$insert_usu->bindParam(":id", $id, PDO::PARAM_INT);


if($insert_usu->execute()){
	header("Location: ..\usuario.php");
}else{
	echo "erro ao cadastrar";
}


?>