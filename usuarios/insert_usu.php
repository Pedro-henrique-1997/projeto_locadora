<?php
include "..\conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$senha_original = $_POST['senha'];
$nivel = "admin";

if(empty($nome) || empty($email) || empty($email)){
	echo "<script>
	alert('Preencha todos os campos');
	</script>
	";
}

$PDO = conectar_bd();

$sql = "INSERT INTO usuario(nome, email, senha, senha_original, nivel) VALUES(:nome, :email, :senha, :senha_original, :nivel)";

$insert_usu = $PDO->prepare($sql);
$insert_usu->bindParam(":nome", $nome);
$insert_usu->bindParam(":email", $email);
$insert_usu->bindParam(":senha", $senha);
$insert_usu->bindParam(":senha_original", $senha_original);
$insert_usu->bindParam(":nivel", $nivel);

if($insert_usu->execute()){
	header("Location: ..\usuario.php");
}else{
	echo "erro ao cadastrar";
}


?>