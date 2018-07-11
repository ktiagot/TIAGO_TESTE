<?php
	//Configurando conexão
	$host = "localhost";
	$user = "id6452630_admin_tiagoassis6593";
	$password = "@taximanagerweb982036593";
	$db = "id6452630_taximanagerweb";
	$con = new mysqli($host, $user, $password, $db);

	if ($con->connect_error) {
    ?> <script>alert("Ocorreu um erro com o servidor: ")</script> 
		<?php 
	}
	else{
		
	
	//Querys para o <select> da corrida contendo os passageiros e motoristas cadastrados
	$query_passageiro = mysqli_query($con, "SELECT * FROM passageiros");
	$query_motorista = mysqli_query($con, "SELECT * FROM motoristas WHERE atividade='2'");
	
	//Querys para consulta
	$query_consulta_motorista = "SELECT * FROM motoristas";
	$query_consulta_passageiro = "SELECT * FROM passageiros";
	$query_consulta_corrida = "SELECT *	FROM corridas
	INNER JOIN motoristas ON corridas.motorista=motoristas.cpf
	INNER JOIN passageiros ON corridas.passageiro=passageiros.cpf;";
}
?>