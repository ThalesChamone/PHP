<?php
    require_once 'conexao.php';
    
    if(isset($_GET['id_consulta']) && !empty($_GET['id_consulta'])){
        $id_consulta = addslashes($_GET['id_consulta']);

        $cmd = $bancoSA->query("SELECT * FROM dados WHERE id_consulta = '$id_consulta'");
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
    }       
        
?>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
           * {
        margin: 0;
        padding: 0;
    }

    h2{
        text-align: center;
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
        <div class="jumbotron">
        <h2>Atualizar dados procedimento</h2>
    </div>
    <form id="formulario" action="<?php echo 'update.php?id_consulta='.$id_consulta;?>" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input type="number" value="<?php if(isset($res)){echo $res['codigo'];} ?>" name="codigo">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input step=".01" value="<?php if(isset($res)){echo $res['valor'];} ?>" name="valor" type="number">
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome Procedimento</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php if(isset($res)){echo $res['nome'];} ?>" name="nome">
                </div>
            </div>
            <div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data Procedimento</label>
                    <div class="col-sm-6">
                        <input type="date" value="<?php if(isset($res)){echo $res['data_procedimento'];} ?>" name="data_procedimento" id="data_procedimento">                        
                    </div>                   
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gênero</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php if(isset($res)){echo $res['genero'];} ?>" name="genero">
                </div>
            </div>
            <div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Adicionar Exceção</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php if(isset($res)){echo $res['excecao'];} ?>" name="excecao" id="excecao">                        
                    </div>                   
                </div>
            </div>
            <button>
                <a class="btn btn-sucess" role="button">Atualizar dados</a>
            </button>
            <button>
                <a href="indexSA.php">Voltar para página de cadastro</a>
            </button>
        </form>


