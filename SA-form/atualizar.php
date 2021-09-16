<?php
require_once 'conexao.php';

if (isset($_GET['id_consulta']) && !empty($_GET['id_consulta'])) {
    $id_consulta = addslashes($_GET['id_consulta']);

    $cmd = $bancoSA->query("SELECT * FROM dados WHERE id_consulta = '$id_consulta'");
    $res = $cmd->fetch(PDO::FETCH_ASSOC);
}

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="style.css">
<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="indexSA.php" class="nav-link">
                <i class="fas fa-home"></i>
                <span class="link-text">Home</span>
            </a>
        </li>
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
        <h3 style="margin-bottom: 20px;">Atualizar dados</h3>
        <div class="formCadastro">
            <form action="<?php echo 'update.php?id_consulta=' . $id_consulta; ?>" method="POST">
                <label for="nome">Codigo:</label>
                <input type="number" name="codigo" value="<?php if (isset($res)) {
                                                                echo $res['codigo'];
                                                            } ?>" name="codigo">


                <label for="valor">Valor:</label>
                <input step=".01" name="valor" value="<?php if (isset($res)) {
                                                            echo $res['valor'];
                                                        } ?>" name="valor" type="number">


                <label for="nome">Nome Procedimento:</label>
                <input type="text" name="nome" value="<?php if (isset($res)) {
                                                            echo $res['nome'];
                                                        } ?>" name="nome">


                <label for="data_procedimento">Data Procedimento</label>
                <input type="date" name="data_procedimento" value="<?php if (isset($res)) {
                                                                        echo $res['data_procedimento'];
                                                                    } ?>" name="data_procedimento" id="data_procedimento">

                <label for="genero">Gênero:</label>
                <input type="text" name="genero" value="<?php if (isset($res)) {
                                                            echo $res['genero'];
                                                        } ?>" name="genero">

                <label for="excecao">Adicionar Exceção:</label>
                <input type="text" name="excecao" value="<?php if (isset($res)) {
                                                                echo $res['excecao'];
                                                            } ?>" name="excecao" id="excecao">


                <button type="submit" class="btnCadastro">Atualizar dados</button>
            </form>
            <a href="ver_cadastro.php"><button class="btnCadastro">
                    Voltar
                </button></a>
        </div>
    </div>
    </div>
</main>