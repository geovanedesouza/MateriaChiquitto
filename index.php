<?php
require 'Pais.php';
	

	$brasil = new Pais("3166-1", "Brasil", 8521.225);
	$argentina = new Pais("5426-2", "Argentina", "5.325,558");
	$paraguai = new Pais("2511-5", "Paraguai", "3.524,165");
	$brasil2 = new Pais("3166-1", "Brasil2", "8.521,225");
	$brasil->setPopulacao(123.456);
	$arrayBrasil = array($argentina, $paraguai, $brasil2);
	$brasil->setFronteira($arrayBrasil);
	$arrayArgentina = Array( $brasil, $paraguai, $brasil2);
	$argentina->setFronteira($arrayArgentina);
	$igual = $brasil->comparaPais($brasil, $brasil2);
	if($igual){
		echo "paises iguais<br>";
	}else {
		echo "paises diferentes<br>";
	}
	
	$limite = $brasil->paisLimite($brasil2);
	if($limite){
		echo "paises vizinho<br>";
	}else {
		echo "paises distintos<br>";
	}
	
	$densidade = $brasil->densidadePop($brasil);
	echo $densidade."<br>";
	

	$viz = $brasil->vizinhos($argentina);
	print_r($viz);

?>
