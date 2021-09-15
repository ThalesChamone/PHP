<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Procedimentos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-address-card"></i>
                    <span class="link-text">Paciente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="consultar.php" class="nav-link">
                    <i class="fas fa-user-md"></i>
                    <span class="link-text">Médico</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-file-medical"></i>
                    <span class="link-text">Convênio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-stethoscope"></i>
                    <span class="link-text">Especialidade</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-syringe"></i>
                    <span class="link-text">Procedimento</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fas fa-briefcase-medical"></i>
                    <span class="link-text">Padrões</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>
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


                    <?php
                    require_once 'conexao.php';
                    ?>
                </form>
                <a href="ver_cadastro.php"><button class="btnCadastro">
                        Ver procedimentos agendados
                    </button></a>
            </div>
        </div>
        </div>
    </main>
</body>
</html>