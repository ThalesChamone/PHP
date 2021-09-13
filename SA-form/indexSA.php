<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Procedimentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    #formulario {
        margin: 20px;
    }

    #button {
        margin: 20px;
    }

    #excecao{
        padding: 50px;
    }

    #ver_procedimento{
        margin: 20px;
    }  
</style>

<body>
    <div class="jumbotron">
        <h2>Cadastro de Procedimentos</h2>
    </div>
    <form id="formulario" action="insertSA.php" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input type="number" name="codigo">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input step=".01" type="number" name="valor">
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome Procedimento</label>
                <div class="col-sm-6">
                    <input type="text" name="nome">
                </div>
            </div>
            <div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data Procedimento</label>
                    <div class="col-sm-6">
                        <input type="date" name="data_procedimento" id="data_procedimento">                        
                    </div>                   
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gênero</label>
                <div class="col-sm-10">
                    <input type="text" name="genero">
                </div>
            </div>
            <div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Adicionar Exceção</label>
                    <div class="col-sm-10">
                        <input type="text" name="excecao" id="excecao">                        
                    </div>                   
                </div>
            </div>
            <div id="button">
            <button type="reset">Limpar</button>
            <button type="submit">Cadastrar Consulta</button>   
            <a class="btn btn-primary" href="ver_cadastro.php" role="button">Ver procedimentos agendados</a>         
        </div>               
        </form>
        
        <?php
            require_once 'conexao.php';            
        ?>
</body>

</html>