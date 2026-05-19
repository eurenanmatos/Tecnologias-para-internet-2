<?php
include("valida.php");
?>

<html>
<title>Cadastrar Gênero</title>

<head>

</head>

<body>
    <div style="width: 100%; margin: 0 auto;">

        <div style="min-height: 100px; width: 100%; background-color:#4CAF50; float:left;">

            <div style="width:50%; float:left;">
                <span style="padding-left: 10px;">
                    Olá <?= $_SESSION['nome']; ?>
                </span>
            </div>

            <div style="width:50%; float:left; text-align:right;">
                <span style="padding-right: 10px;">
                    <a href="sair.php">Logout</a>
                </span>
            </div>

        </div>

        <div style="background-color: #f4f4f4; min-height: 500px; width:20%; float:left;">
            <h2>Menu</h2>
            <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
        </div>

        <div style="background-color: #ddd; min-height: 500px; width:80%; float:left;">
            <h2>Cadastrar Gênero</h2>
            <form method="post" action="inserirGenero.php">
                Descrição: <input type="text" name="Descrição"><br>
                <input type="submit" value="Inserir">
            </form>

            <hr>

            <h2>Listagem de Gêneros</h2>
            <?php include("conexao.php"); ?>

            <table>
                <tr>
                    <td>DESCRICAO</td>
                    <td>ALTERAR</td>
                    <td>APAGAR</td>
                </tr>
                <?php
                $sql = "select * from generos";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td><?= $row['descricao']; ?></td>
                                <td>ALTERAR</td>
                                <td><form method="post" action="apagarGenero.php">
                                        <input type="hidden" value="<?= $row['genero']; ?>" name="genero">
                                        <input type="submit" value="APAGAR">
                                    </form>
                                </td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "Nenhum dado encontrado";
                    }
                } else {
                    echo "Erro na consulta SQL";
                }
                ?>
            </table>
        </div>

    </div>
</body>

</html>