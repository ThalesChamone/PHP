<?php
require_once '../conexao.php';

if (isset($_GET['id_funcionamento']) && !empty($_GET['id_funcionamento'])) {
    $id_funcionamento = addslashes($_GET['id_funcionamento']);

    $cmd = $conn->query("SELECT * FROM funcionamento WHERE id_funcionamento = '$id_funcionamento'");
    $res = $cmd->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar</title>
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
                <a href="home.php" class="nav-link">
                    <i class="fas fa-briefcase-medical"></i>
                    <span class="link-text">Padrões</span>
                </a>
            </li>
        </ul>
    </nav>


    <main>
        <div class="container">
            <div class="formfuncionamento">
                <form action="<?php echo 'update.php?id_funcionamento=' . $id_funcionamento; ?>" method="post">

                    <h1> Padrão de Funcionamento</h1>

                    <label for="abertura_clinica">Abertura da clinica:</label>
                    <input type="text" name="abertura_clinica" id="abertura_clinica" value="<?php if (isset($res)) {
                                                                                                echo $res['abertura_clinica'];
                                                                                            } ?>">

                    <label for="fechamento_clinica">Fechamento da clinica:</label>
                    <input type="text" name="fechamento_clinica" id="fechamento_clinica" value="<?php if (isset($res)) {
                                                                                                    echo $res['fechamento_clinica'];
                                                                                                } ?>">

                    <label for="media_consultas">Media de tempo para consultas:</label>
                    <input type="text" name="media_consultas" id="media_consultas" value="<?php if (isset($res)) {
                                                                                                echo $res['media_consultas'];
                                                                                            } ?>">

                    <label for="dias_funcionamento">Dias de funcionamento:</label>
                    <input type="dias_funcionamento" name="dias_funcionamento" id="dias_funcionamento" value="<?php if (isset($res)) {
                                                                                                                    echo $res['dias_funcionamento'];
                                                                                                                } ?>">

                    <button type="submit" class="btnCadastro"> Atualizar </button>

                </form>
                <a href="home.php"><button type="submit" class="btnCadastro">Voltar</button></a>
            </div>
        </div>
    </main>
</body>

</html>