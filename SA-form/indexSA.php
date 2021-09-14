<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Procedimentos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3 style="margin-bottom: 20px;">Cadastrar procedimento</h3>
        <div class="formCadastro">
            <form action="insertSA.php" method="POST">
                <label for="nome">Codigo:</label>
                <input type="number" name="codigo" id="codigo" required>
                <label for="valor">Valor:</label>
                <input type="number" step=".01" name="valor" id="valor" required>
                <label for="nome">Nome Procedimento:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="data_procedimento">Data Procedimento</label>
                <input type="date" name="data_procedimento" id="data_procedimento">
                <label for="genero">Gênero:</label>
                <input type="text" name="genero" id="genero" required>
                <label for="exececao">Adicionar Exceção:</label>
                <input type="text" name="excecao" id="excecao" required>
                <button type="submit" class="btnCadastro">Cadastrar</button>
                <button class="btnCadastro">
                 <a href="ver_cadastro.php">Ver procedimentos agendados</a>
                </button>                
        </div>
        <?php
        require_once 'conexao.php';
        ?>
        </form>
    </div>
    </div>
</body>

</html>