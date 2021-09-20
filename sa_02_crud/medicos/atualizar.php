<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../index.php" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span class="link-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../paciente/view.php" class="nav-link">
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
                <a href="../convenio/index.php" class="nav-link">
                    <i class="fas fa-file-medical"></i>
                    <span class="link-text">Convênio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../especialidade/view.php" class="nav-link">
                    <i class="fas fa-stethoscope"></i>
                    <span class="link-text">Especialidade</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../procedimento/ver_cadastro.php" class="nav-link">
                    <i class="fas fa-syringe"></i>
                    <span class="link-text">Procedimento</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../padroes/home.php" class="nav-link">
                    <i class="fas fa-briefcase-medical"></i>
                    <span class="link-text">Padrões</span>
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <?php
        require_once '../conexao.php';
        $id_medico = $_GET['id_medico'];
        $select = $conn->query("SELECT * FROM medicos WHERE id_medico = '$id_medico';");
        $row = $select->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="container">
            <h3 style="margin-bottom: 20px;">Atualizar médico</h3>
            <div class="formPaciente">
                <form action="<?php echo 'update.php?id_medico=' . $id_medico; ?>" enctype="multipart/form-data" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome_medico']; ?>">
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua" id="rua" value="<?php echo $row['rua_medico']; ?>">
                    <label for="numero">Número:</label>
                    <input type="text" name="numero" id="numero" value="<?php echo $row['numero_medico']; ?>">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="<?php echo $row['complemento_medico']; ?>">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro_medico']; ?>">
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep" value="<?php echo $row['cep_medico']; ?>">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email_medico']; ?>">
                    <label for="telefoneFixo">Telefone:</label>
                    <input type="text" name="telefoneFixo" id="telefoneFixo" value="<?php echo $row['telefone_fixo_medico']; ?>">
                    <div style="text-align: center;">
                        <button type="submit" class="btnCadastro">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>