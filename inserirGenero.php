<?php
include("valida.php");
include("conexao.php");

$descricao = $_POST['Descrição'];

if ($descricao == '') {
    die('Informe a descrição');
}

$sql = "insert into generos (descricao) values (?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $descricao);
    if(!$stmt->execute()){
        die('Erro ao inserir gênero');
    }
    header("Location: cadastrarGenero.php");
 
} else {
    echo "Erro na consulta SQL";
}
?>