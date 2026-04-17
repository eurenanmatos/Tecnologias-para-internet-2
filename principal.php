<?php
include("valida.php");
?>

<html>
    <title>Página Principal</title>
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
                <h2>Menu</h2>
                Conteúdo principal
            </div>

        </div>
    </body>
</html>