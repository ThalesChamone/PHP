<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
            <div style="margin-bottom: 15px;">
                <h1>Padrão de funcionamento</h1>
                <div class="cadastroResponsivo">
                    <a href="form.html" class="btnCadastro">Cadastrar</a>
                </div>
            </div>
            

            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Horario de abertura</th>
                        <th>Horario de fechamento</th>
                        <th>Tempo medio de consultas</th>
                        <th>Dias de funcionamento</th>
                        <th><a href="form.html">Cadastrar</a></th> 
                    </tr>
                </thead>
                 
                    <tbody>
                        <?php
                            require_once '../conexao.php';
                            $cmd = $conn->query("SELECT * FROM funcionamento ORDER BY id_funcionamento");
                            
                            
                            foreach ($cmd as $valor) {
                                echo "<tr>";
                                echo "<td data-label = 'Horario de abertura'>".$valor['abertura_clinica']."</td>";
                                echo "<td data-label = 'Horario de fechamento'>".$valor['fechamento_clinica']."</td>";
                                echo "<td data-label = 'Tempo medio de consultas'>".$valor['media_consultas']."</td>";
                                echo "<td data-label = 'Dias de funcionamento'>".$valor['dias_funcionamento']."</td>";
                                echo "<td><a href='atualizar.php?id_funcionamento=".$valor['id_funcionamento']."'>Atualizar</a></td>";
                                echo "<td><a href='delete.php?id_funcionamento=".$valor['id_funcionamento']."'>Deletar</a></td>";
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