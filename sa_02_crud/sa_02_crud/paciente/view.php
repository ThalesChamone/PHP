<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
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
        <div class="container">
            <div style="margin-bottom: 15px;">
                <h3>Pacientes cadastrados</h3>
                <div class="cadastroResponsivo">
                    <a href="cadastro.html" class="btnCadastro">Cadastrar</a>
                </div>
            </div>
            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>RUA</th>
                            <th>NÚMERO</th>
                            <th>COMPLEMENTO</th>
                            <th>BAIRRO</th>
                            <th>CEP</th>
                            <th>EMAIL</th>
                            <th>TELEFONE</th>
                            <th>
                                <a href="cadastro.html">Cadastrar</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../conexao.php';
                        $cmd = $conn->query("SELECT * FROM tbl_paciente ORDER BY nome_paciente;");
                        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($res as $value) {
                            echo "<tr>";
                            echo "<td>" . $value['nome_paciente'] . "</td>";
                            echo "<td>" . $value['rua'] . "</td>";
                            echo "<td>" . $value['numero'] . "</td>";
                            echo "<td>" . $value['complemento'] . "</td>";
                            echo "<td>" . $value['bairro'] . "</td>";
                            echo "<td>" . $value['cep'] . "</td>";
                            echo "<td>" . $value['email'] . "</td>";
                            echo "<td>" . $value['telefone'] . "</td>";
                            echo "<td><a href='atualizar.php?id_paciente=" . $value['id_paciente'] . "'>Atualizar</a></td>";
                            echo "<td><a href='delete.php?id_paciente=" . $value['id_paciente'] . "'>Deletar</a></td>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>