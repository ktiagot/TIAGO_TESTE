<?php
	//Configurando conexão
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "taximanager";
	$con = new mysqli($host, $user, $password, $db);

	//Querys para o <select> da corrida contendo os passageiros e motoristas cadastrados
	$query_passageiro = mysqli_query($con, "SELECT * FROM PASSAGEIROS");
	$query_motorista = mysqli_query($con, "SELECT * FROM MOTORISTAS WHERE atividade='2'");
	
	//Querys para consulta
	$query_consulta_motorista = "SELECT * FROM MOTORISTAS";
	$query_consulta_passageiro = "SELECT * FROM PASSAGEIROS";
	$query_consulta_corrida = "SELECT *	FROM CORRIDAS
	INNER JOIN MOTORISTAS ON CORRIDAS.MOTORISTA=MOTORISTAS.CPF
	INNER JOIN PASSAGEIROS ON CORRIDAS.PASSAGEIRO=PASSAGEIROS.CPF;";
?>