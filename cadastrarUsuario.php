<?php
include("valida.php");
?>

<html>
<title>Cadastrar Usuário</title>

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
            <a href="cadastraUsuario.php">Cadastrar Usuário</a>
        </div>

        <div style="background-color: #ddd; min-height: 500px; width:80%; float:left;">
            <h2>Cadastrar Usuário</h2>
            <form method="post" action="inserirUsuario.php">
                CPF: <input type="text" name="cpf"><br>
                Nome: <input type="text" name="nome"><br>
                Senha: <input type="text" name="senha"><br>
                <input type="submit" value="Inserir">
            </form>

            <hr>

            <h2>Listagem de Usuarios</h2>
            <?php include("conexao.php"); ?>

            <table>
                <tr>
                    <td>CPF</td>
                    <td>NOME</td>
                    <td>SENHA</td>
                    <td>ALTERAR</td>
                    <td>APAGAR</td>
                </tr>
                <?php
                $sql = "select * from usuarios";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td><?= $row['cpf']; ?></td>
                                <td><?= $row['nome']; ?></td>
                                <td><?= $row['senha']; ?></td>
                                <td>ALTERAR</td>
                                <td><form method="post" action="apagarUsuario.php">
                                        <input type="hidden" name="cpf" value="<?= $row['cpf']; ?>">
                                        <input type="submit" value="APAGAR">
                                    </form>
                                </td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "Nenhum usuário encontrado";
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