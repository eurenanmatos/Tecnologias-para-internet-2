<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Meu Sistema</title>
</head>
<body>
    <div style="width: 100%; margin: 0 auto;">
        
        <div style="min-height: 100px; width: 100%; background-color:#4CAF50; float:left;">
            
            <div style="width:50%; float:left;">
                <span style="padding-left: 10px;"> 
                    Sistema de Login
                </span>
            </div>

            <div style="width:50%; float:left; text-align:right;">
                <span style="padding-right: 10px;">
                    <!-- Logout não aplicável aqui -->
                </span>
            </div>

        </div>

        <div style="background-color: #f4f4f4; min-height: 500px; width:20%; float:left;">
            <h2>Menu</h2>
            <a href="index.php">Login</a><br>
            <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
        </div>

        <div style="background-color: #ddd; min-height: 500px; width:80%; float:left;">
            <h2>Login</h2>
            <form method="post" action="login.php">
                CPF: <input type="text" name="cpf" required><br>
                Senha: <input type="password" name="senha" required><br>
                <input type="submit" value="Acessar">
            </form>
        </div>

    </div>
</body>
</html>