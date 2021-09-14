<link rel="stylesheet" href="style.css">
<body>
<div class="container">
        <div style="margin-bottom: 15px;">
            <a href="indexSA.php" class="btnCadastro">Cadastrar</a>
        </div>
        <h3 style="margin-bottom: 30px;">Procedimentos Agendados</h3>
        <div class="tabela">
            <table>
                <tr>
                    <th>CODIGO</th>
                    <th>NOME PROCEDIMENTO</th>
                    <th>VALOR</th>
                    <th>DATA PROCEDIMENTO</th>
                    <th>OBSERVAÇÃO</th>                  
                </tr>                
        <?php
            require_once 'conexao.php';
            $cmd = $bancoSA->query("SELECT * FROM dados ORDER BY data_procedimento");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($res as $valor) {
                echo "<tr>";
                echo "<td>".$valor['codigo']."</td>";
                echo "<td>".$valor['nome']."</td>";
                echo "<td>".$valor['valor']."</td>";
                echo "<td>".$valor['data_procedimento']."</td>";
                echo "<td>".$valor['excecao']."</td>";
                echo "<td><a href='atualizar.php?id_consulta=".$valor['id_consulta']."'>Atualizar</a></td>";
                echo "<td><a href='deleteSA.php?id_consulta=".$valor['id_consulta']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
            </table>
        </div>
    </div>
</body>
</html>