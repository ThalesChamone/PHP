<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="style.css">

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
            <a href="ver_cadastro.php" class="nav-link">
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
                <h3>Procedimentos Agendados</h3>
            </div>
            <div class="cadastroResponsivo">
                <a href="indexSA.php" class="btnCadastro">Cadastrar procedimento</a>
            </div>

            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>NOME PROCEDIMENTO</th>
                            <th>VALOR</th>
                            <th>DATA PROCEDIMENTO</th>
                            <th>OBSERVAÇÃO</th>
                            <th><a href="indexSA.php">Cadastrar procedimento</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../conexao.php';
                        $cmd = $conn->query("SELECT * FROM dados ORDER BY data_procedimento");
                        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($res as $valor) {
                            echo "<tr>";
                            echo "<td data-label='CODIGO'>" . $valor['codigo'] . "</td>";
                            echo "<td data-label='NOME PROCEDIMENTO'>" . $valor['nome'] . "</td>";
                            echo "<td data-label='VALOR'>" . $valor['valor'] . "</td>";
                            echo "<td data-label='DATA PROCEDIMENTO'>" . $valor['data_procedimento'] . "</td>";
                            echo "<td data-label='OBSERVAÇÃO'>" . $valor['excecao'] . "</td>";
                            echo "<td><a href='atualizar.php?id_consulta=" . $valor['id_consulta'] . "'>Atualizar</a></td>";
                            echo "<td><a href='deleteSA.php?id_consulta=" . $valor['id_consulta'] . "'>Deletar</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>