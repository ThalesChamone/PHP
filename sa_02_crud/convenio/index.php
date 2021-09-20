<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="styleBH.css">
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
                <a href="insert.php" class="nav-link">
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
                <h3>Convênios Cadastrados</h3>
                <div class="cadastroResponsivo">
                    <a href="cadastro.html" class="btnCadastro">Cadastrar</a>
                </div>
            </div>
            

            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Nome Fantasia</th>
                        <th>Nome da Empresa</th>
                        <th>CNPJ</th>
                        <th>E-Mail</th>
                        <th>Nome do Contato</th>
                        <th>Homepage</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>CEP</th>
                        <th>Complemento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th><a href="cadastro.html">Cadastrar</a></th> 
                    </tr>
                </thead>
                 
                    <tbody>
                        <?php
                            require_once '../conexao.php';
                            $cmd = $conn->query("SELECT * FROM convenios ORDER BY id_convenio");
                            
                            
                            foreach ($cmd as $valor) {
                                echo "<tr>";
                                echo "<td data-label = 'Nome Fantasia'>".$valor['nome_fantasia']."</td>";
                                echo "<td data-label = 'Nome Empresa'>".$valor['nome_empresa']."</td>";
                                echo "<td data-label = 'CNPJ'>".$valor['cnpj']."</td>";
                                echo "<td data-label = 'E-Mail'>".$valor['email']."</td>";
                                echo "<td data-label = 'Nome Contato'>".$valor['nome_cont']."</td>";
                                echo "<td data-label = 'Homepage'>".$valor['homepage']."</td>";
                                echo "<td data-label = 'Telefone'>".$valor['telefone']."</td>";
                                echo "<td data-label = 'Celular'>".$valor['celular']."</td>";
                                echo "<td data-label = 'Endereço'>".$valor['endereco']."</td>";
                                echo "<td data-label = 'Número'>".$valor['numero']."</td>";
                                echo "<td data-label = 'CEP'>".$valor['cep']."</td>";
                                echo "<td data-label = 'Complemento'>".$valor['complemento']."</td>";
                                echo "<td data-label = 'Cidade'>".$valor['cidade']."</td>";
                                echo "<td data-label = 'Estado'>".$valor['estado']."</td>";
                                echo "<td><a href='atualizar.php?id_convenio=".$valor['id_convenio']."'>Atualizar</a></td>";
                                echo "<td><a href='delete.php?id_convenio=".$valor['id_convenio']."'>Deletar</a></td>";
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