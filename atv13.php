<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            text-align: center;
            background-color: gray;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h3>Função 1</h3>
    <h3>Cálculo volume esfera</h3>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" name="numeroALEATORIO1" placeholder="Raio circuferência" id="">
            <br>
            <br>
            <button type="submit">Calcular</button>
            </form>

            <?php
            if(isset($_POST['numeroALEATORIO1'])){
                $raio = (float)$_POST['numeroALEATORIO1'];
                function volume_esfera($raio){
                    $valor_volume = 4*3.14*pow($raio,3)/3;
                    return $valor_volume;
                }
                $volume_total = volume_esfera($raio);
                printf("Volume da circunferêcia é %.2f m³",$volume_total);
            }
                ?>            

    <h3>Função 2</h3>
    <h3>Cálculo do cubo de um número inteiro</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="number" name="X" placeholder="Número inteiro" id="">
                <br>
                <br>
                <button type="submit">Calcular</button>
                </form>

                <?php
                if(isset($_POST['X'])){
                    $numInteiro = $_POST['X'];
                    function cubo($numInteiro){
                        $cubo = pow($numInteiro,3);
                        return $cubo;
                    }
                    $cubo_numero = cubo($numInteiro);
                    printf("%u ao cubo é igual a %u",$numInteiro,$cubo_numero);
                }
                ?>
    <h3>Função 3</h3>
    <h3>Média 3 valores reais</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="number" name="num1" placeholder="Número inteiro" id="">
                <input type="number" name="num2" placeholder="Número inteiro" id="">
                <input type="number" name="num3" placeholder="Número inteiro" id="">
                <br>
                <br>
                <button type="submit">Calcular</button>
                </form>

                <?php
                if(isset($_POST['num1'],$_POST['num2'],$_POST['num3'])){
                    $num1 = (float)$_POST['num1'];
                    $num2 = (float)$_POST['num2'];
                    $num3 = (float)$_POST['num3'];
                    function media($num1,$num2,$num3){
                        $media = ($num1 + $num2 + $num3)/3;
                        return $media;
                    }
                    $valor_media = media($num1,$num2,$num3);
                    printf("Média dos valores é igual a %.2f",$valor_media);
                }
                ?>
    <h3>Função 4</h3>
    <h3>Saber se número é par ou impar</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="number" name="numero1" id="">
                <br>
                <br>
                <button type="submit">Mostrar</button>
                </form>

                <?php
                if(isset($_POST['numero1'])){
                    $numX = $_POST['numero1'];
                    if($numX % 2 == 0){
                        printf("Número %u é par",$numX);
                    }else {
                        printf("Número %u é impar",$numX);
                    }                                     
                }
                ?>
</body>
</html>
