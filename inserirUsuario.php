<?php
include("valida.php");
include("conexao.php");

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

if ($cpf == '') {
    die('Informe o CPF');
}

if ($senha == '') {
    die('Informe a senha');
}

if ($nome == '') {
    die('Informe o nome');
}


$sql = "insert into usuarios (nome, cpf, senha) values (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $nome, $cpf, $senha);
    if(!$stmt->execute()){
        die('Erro ao inserir usuário');
    }
    header("Location: cadastrarUsuario.php");
 
} else {
    echo "Erro na consulta SQL";
}
?>