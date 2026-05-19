<?php
include("conexao.php");

$genero = $_POST['genero'];

if ($genero == '') {
    die('Informe o Gênero');
}

$sql = "delete from generos where genero=?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("i",$genero);
    if(!$stmt->execute()){
        die('Erro ao apagar gênero');
    }
    header("Location: cadastrarGenero.php");
 
} else {
    echo "Erro na consulta SQL";
}
?>