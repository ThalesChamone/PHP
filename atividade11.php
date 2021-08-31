<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

         <h3>Mensagem de acordo com número entre 1 e 3</h3>

            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" min="1" max="3" name="numeroALEATORIO" id="">
            <br>
            <br>
            <button type="submit">Mensagem</button>
            </form>

            <?php
            if(isset($_POST['numeroALEATORIO'])){
                $numALEATORIO = $_POST['numeroALEATORIO'];
                switch($numALEATORIO){
                    case '1': printf("Ta sem sorte!");
                    break;
                    case '2': printf("Adianta não, você não tem sorte!");
                    break;
                    case '3': printf("Boa, sua sorte está te procurando");
                    break;
                }
            }
            ?>


            <h3>Ler um número inteiro n. Escrever a soma de todos os números de 1 até n.</h3>

            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" name="numero" id="" placeholder="Escolha um número">
            <br>
            <br>
            <button type="submit">Soma dos valores</button>
            </form>
            
            <?php
            if(isset($_POST['numero'])){
                $numX = $_POST['numero'];
                $contador = 0;
                $soma = 0;
                while($contador < $numX){
                    $contador++;
                    $soma = $soma + $contador;
                }
                printf("Soma dos valores = %u",$soma);
            }
            ?>

            <h3>Cálculo fatorial</h3>

            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" name="fatorial" id="" placeholder="Escolha um número">
            <br>
            <br>
            <button type="submit">Calcular fatorial</button>
            </form>

            <?php
            if(isset($_POST['fatorial'])){
                $num = $_POST['fatorial'];
                $fatorial;
                for($fatorial = 1; $num > 1; $num--){
                    $fatorial = $fatorial * $num;
                }
                printf("Fatorial calculado = %.2lf",$fatorial);
            }
            ?>

            <h3>Escolha o número correto para interromper o loop</h3>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" name="break" id="" placeholder="Escolha um número">
            <br>
            <br>
            <button type="submit">Clique aqui</button>
            </form>

            <?php
            if(isset($_POST['break'])){
                $numBREAK = $_POST['break'];
                while($numBREAK){
                    if($numBREAK == 35){
                        printf("Loop interrompido");
                        break;
                    }else{
                        printf("Loop vai rodar até navegador parar de responder <br>");
                        continue;
                    }
                }   
            }
            ?>


    </center>
</body>
</html>