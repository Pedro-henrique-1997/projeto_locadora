<?php

function conectar_bd(){
	$PDO = new PDO("mysql:host=localhost;port=3306;dbname=locadora", "root", "");

	return $PDO;
}

?>