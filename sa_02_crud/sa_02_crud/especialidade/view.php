<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

        <div class="container">
         <h2>Especialidades cadastradas</h2>
         <div class="tableContainer">

             <table class="table">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>ESPECIALIDADE</th>
                         <th><a  href="cadastro.html">Novo cadastro</a></th>
                     </tr>
                 </thead>
                 <tbody>

                 
                 <?php
             
                     try {
                         require_once '../conexao.php';
                         $cmd = $conn->query("SELECT * FROM tbl_especialidade ORDER BY nome_especialidade");
                         $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
                         foreach ($res as $value) {
                             echo "<tr>";
                             echo "<td data-label='ID:'>".$value['id_cadastro']."</td>";
                             echo "<td data-label='Especialidade:'>".$value['nome_especialidade']."</td>";
                             echo "<td><a href='atualizar.php?id_cadastro=".$value['id_cadastro']."'>Atualizar </a></td>";
                             echo "<td><a href='delete.php?id_cadastro=".$value['id_cadastro']."'>Deletar </a></td>";
                             echo "</tr>";
                         }
                     } catch (\Throwable $th) {
                         echo "Erro no banco".$e->getmessage();
                     }
             
                     
                 ?> 
                 </tbody>
             </table><br><br>
                 
              </div>
         </div>
        
    </main>
</body>
</html>