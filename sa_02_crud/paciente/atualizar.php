<!DOCTYPE html>
<html lang="en">

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
                <a href="view.php" class="nav-link">
                    <i class="fas fa-address-card"></i>
                    <span class="link-text">Paciente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../medicos/consultar.php" class="nav-link">
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

        if (isset($_GET['id_paciente']) && !empty($_GET['id_paciente'])) {
            $id_paciente = htmlspecialchars($_GET['id_paciente']); //htmlspecialchars é um método de segurança pra evitar ataques de SQLInjections

            $cmd = $conn->query("SELECT * FROM tbl_paciente WHERE id_paciente = '$id_paciente'");
            $res = $cmd->fetch(PDO::FETCH_ASSOC); //fetch transformar o objeto em um array/ fetch_assoc trata o array apagando coisas desnecessárias

        }
        ?>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <div class="container">
            <h2>Atualizar</h2>
            <form class="formPaciente" action=" <?php echo 'update.php?id_paciente=' . $id_paciente; ?>" method="post">
                <label for="nome_paciente">Nome: </label>
                <input type="text" name="nome_paciente" id="nome_paciente" value="<?php if (isset($res)) {
                                                                                        echo $res['nome_paciente'];
                                                                                    } ?>"><br>

                <label for="rua">Rua: </label>
                <input type="text" name="rua" id="rua" value="<?php if (isset($res)) {
                                                                    echo $res['rua'];
                                                                } ?>"><br>

                <label for="numero">Número: </label>
                <input type="text" name="numero" id="numero" value="<?php if (isset($res)) {
                                                                        echo $res['numero'];
                                                                    } ?>"><br>

                <label for="complemento">Complemento: </label>
                <input type="text" name="complemento" id="complemento" value="<?php if (isset($res)) {
                                                                                    echo $res['complemento'];
                                                                                } ?>"><br>

                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" value="<?php if (isset($res)) {
                                                                        echo $res['bairro'];
                                                                    } ?>"><br>

                <label for="cep">CEP: </label>
                <input type="text" name="cep" id="cep" value="<?php if (isset($res)) {
                                                                    echo $res['cep'];
                                                                } ?>"><br>

                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?php if (isset($res)) {
                                                                        echo $res['email'];
                                                                    } ?>"><br>

                <label for="telefone">Telefone: </label>
                <input type="text" name="telefone" id="telefone" value="<?php if (isset($res)) {
                                                                            echo $res['telefone'];
                                                                        } ?>"><br>

                <input type="submit" value="Atualizar" class="btnCadastro">

            </form>
            <a href="view.php"> <button class="btnCadastro">Voltar</button></a>

        </div>
    </main>
</body>

</html>