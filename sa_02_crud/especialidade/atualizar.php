
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
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
                    <a href="view.php" class="nav-link">
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
            try {
                require_once  '../conexao.php';
            
                if(isset($_GET['id_cadastro']) && !empty($_GET['id_cadastro'])){
                    $id_cadastro = htmlspecialchars($_GET['id_cadastro']);
                    
            
                    $cmd = $conn->query("SELECT * FROM tbl_especialidade WHERE id_cadastro = '$id_cadastro'");
                    $res = $cmd->fetch(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                echo "Erro no banco".$e->getmessage();
            }
        
        ?>
            <div class="container">
                <div class="form">
            
                    <h2>Atualizar dados</h2>
                    <form action="<?php echo 'update.php?id_cadastro='.$id_cadastro;?>" method="POST">
                        <label for="nome">Nome da Especialidade</label>
                        <input type="text" name="nome" value="<?php if(isset($res)){echo $res['nome_especialidade'];} ?>">
                        <input type="submit" value="Atualizar" class="btnCadastro">
                        <a href="view.php"> <button class="btnCadastro" >Voltar</button></a>
                    </form>
                </div>
            </div>
    </main>
</body>
</html>


