<?php
	include("conexao.php");


	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];


	if($cpf == ''){
		die('Informe o cpf');
	}
	if($senha == ''){
		die('Informe a senha');
	}


	$sql = "select nome from usuarios where cpf = ? and senha = ?";
	$stmt = $conn->prepare($sql);

	if($stmt){
		$stmt->bind_param("ss", $cpf,$senha);
		$stmt->execute();
		$result = $stmt->get_result();

		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			
			if($row['nome'] != ''){
				session_start();
				$_SESSION['cpf'] = $cpf;
				$_SESSION['senha'] = $senha;
				$_SESSION['nome'] = $row['nome'];
				header("location: principal.php");
			}else{
				echo('Usuario ou senha incorretos!');
			}
		}else{
			echo('Nenhum dado encontrado');
		}
	}else{
		echo('Erro na sql');
	}
?>

