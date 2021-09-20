
<?php
    require_once '../conexao.php';
    
    if(isset($_GET['id_convenio']) && !empty($_GET['id_convenio'])){
        $id_convenio = addslashes($_GET['id_convenio']);

        $cmd = $conn->query("SELECT * FROM convenios WHERE id_convenio = '$id_convenio'");
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
    <link rel="stylesheet" href="styleBH.css">
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
            <div class="formPaciente">
                <form action="<?php echo 'update.php?id_convenio='.$id_convenio;?>" method="post">

                        <label for="nome_fantasia">Nome Fantasia:</label>
                        <input type="text" name="nome_fantasia" id="nome_fantasia" value="<?php if(isset($res)){echo $res['nome_fantasia'];} ?>">

                        <label for="nome_empresa">Nome da Empresa:</label>
                        <input type="text" name="nome_empresa" id="nome_empresa" value="<?php if(isset($res)){echo $res['nome_empresa'];} ?>">

                        <label for="cnpj">CNPJ:</label>
                        <input type="text" name="cnpj" id="cnpj" value="<?php if(isset($res)){echo $res['cnpj'];} ?>">

                        <label for="email">E-Mail:</label>
                        <input type="email" name="email" id="email" value="<?php if(isset($res)){echo $res['email'];} ?>">

                        <label for="contato">Nome do Contato:</label>
                        <input type="text" name="nome_cont" id="nome_cont" value="<?php if(isset($res)){echo $res['nome_cont'];} ?>">

                        <label for="homepage">Homepage:</label>
                        <input type="text" name="homepage" id="homepage" value="<?php if(isset($res)){echo $res['homepage'];} ?>">

                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="telefone" value="<?php if(isset($res)){echo $res['telefone'];} ?>">

                        <label for="celular">Celular:</label>
                        <input type="tel" name="celular" id="celular" value="<?php if(isset($res)){echo $res['celular'];} ?>">

                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" value="<?php if(isset($res)){echo $res['endereco'];} ?>">

                        <label for="numero">Número:</label>
                        <input type="number" name="numero" id="numero" value="<?php if(isset($res)){echo $res['numero'];} ?>">

                        <label for="cep">CEP:</label>
                        <input type="number" name="cep" id="cep" value="<?php if(isset($res)){echo $res['cep'];} ?>">

                        <label for="complemento">Complemento:</label>
                        <input type="text" name="complemento" id="complemento" value="<?php if(isset($res)){echo $res['complemento'];} ?>">

                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" value="<?php if(isset($res)){echo $res['cidade'];} ?>">

                        <label for="estado">Estado:</label>
                        <input type="text" name="estado" id="estado" value="<?php if(isset($res)){echo $res['estado'];} ?>">

                        <button type="submit" class="btnCadastro">Atualizar</button>

                    </form>
                <a href="index.php"><button type="submit" class="btnCadastro">Voltar</button></a>     
            </div>
        </div>
    </main>
</body>
</html>
