<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
    #tabela{
        margin: auto;
    }
    h2{
        text-align: center;
    }
</style>
<body>
    <h2>Procedimentos agendados</h2>
    <form action="" class="jumbotron">
    <table id="tabela" border="2px">
        <tr>
            <td>CODIGO</td>
            <td>NOME PROCEDIMENTO</td>            
            <td>VALOR</td>
            <td>DATA PROCEDIMENTO</td>
            <td>OBSERVAÇÃO</td>
        </tr>
        <a href="indexSA.php">Voltar para página de cadastro</a>
        <?php
            require_once 'conexao.php';
            $cmd = $bancoSA->query("SELECT * FROM dados ORDER BY nome");
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
    </table><br><br>
    </form>    
</body>
</html>