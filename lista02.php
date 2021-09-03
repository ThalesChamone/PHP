<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            background-color: gray;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h3>1. Faça um programa para ler dois valores inteiros, e depois mostrar
        na tela a soma desses números com uma mensagem explicativa, conforme
        exemplos.</h3>
    <form action="<?= $_SERVER['PHP_SELF']; ?> #1" id="1" method="POST">
        <input type="number" name="num1" placeholder="Número inteiro" id="">
        <input type="number" name="num2" placeholder="Número inteiro" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $soma = $num1 + $num2;

        printf("SOMA = %u", $soma);
    }
    ?>

    <h3>2. Faça um programa para ler o valor do raio de um círculo, e depois
        mostrar o valor da área deste círculo com quatro casas decimais conforme
        exemplos.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #2" id="2" method="POST">
        <input type="number" name="num1" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['num1'])) {
        $raio = $_POST['num1'];
        $area = 3.14159 * pow($raio, 2);

        printf("Área da circunferência é %.4f", $area);
    }
    ?>

    <h3>3. Fazer um programa para ler quatro valores inteiros A, B, C e D. A
        seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D
        segundo a fórmula: DIFERENCA = (A * B - C * D).</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #3" id="3" method="POST">
        <input type="number" name="numero1" placeholder="Número inteiro" id="">
        <input type="number" name="numero2" placeholder="Número inteiro" id="">
        <input type="number" name="numero3" placeholder="Número inteiro" id="">
        <input type="number" name="numero4" placeholder="Número inteiro" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['numero1'], $_POST['numero2'], $_POST['numero3'], $_POST['numero4'])) {
        $valorA = $_POST['numero1'];
        $valorB = $_POST['numero2'];
        $valorC = $_POST['numero3'];
        $valorD = $_POST['numero4'];

        $diferenca = ($valorA * $valorB - $valorC * $valorD);

        printf("Resultado = %u", $diferenca);
    }
    ?>

    <h3>4. Fazer um programa que leia o número de um funcionário, seu
        número de horas trabalhadas, o valor que recebe por hora e calcula o salário
        desse funcionário. A seguir, mostre o número e o salário do funcionário, com
        duas casas decimais.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #4" id="4" method="POST">
        <input type="number" name="func" placeholder="Número funcionário" id="">
        <input type="number" name="horasJOB" placeholder="Horas trabalhadas" id="">
        <input type="number" name="valorHORA" placeholder="Valor hora" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['func'], $_POST['horasJOB'], $_POST['valorHORA'])) {
        $numFUNC = $_POST['func'];
        $horasTRAB = $_POST['horasJOB'];
        $valorHORA = $_POST['valorHORA'];

        $salario = ($horasTRAB * $valorHORA);

        printf("O funcionário de número %u recebe R$ %.2f reais por mês", $numFUNC, $salario);
    }
    ?>

    <h3>5. Fazer um programa para ler o código de uma peça 1, o número de
        peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de
        peças 2 e o valor unitário de cada peça 2. Calcule e mostre o valor a ser pago.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #4" id="4" method="POST">
        <input type="number" min="0" name="peca1" placeholder="Código peça" id="">
        <input type="number" min="0" name="numeroPECA1" placeholder="Quantidade de peças" id="">
        <input type="number" step=".01" min="0" name="valorPECA1" placeholder="Valor da peça 1" id="">
        <input type="number" min="0" name="peca2" placeholder="Código peça" id="">
        <input type="number" min="0" name="numeroPECA2" placeholder="Quantidade de peças 2" id="">
        <input type="number" step=".01" min="0" name="valorPECA2" placeholder="Valor da peça 2" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['peca1'], $_POST['numeroPECA1'], $_POST['valorPECA1'], $_POST['peca2'], $_POST['numeroPECA2'], $_POST['valorPECA2'])) {
        $peca1 = (float)$_POST['peca1'];
        $quantidadePECA1 = (float)$_POST['numeroPECA1'];
        $valorPECA1 = (float)$_POST['valorPECA1'];
        $peca2 = (float)$_POST['peca2'];
        $quantidadePECA2 = (float)$_POST['numeroPECA2'];
        $valorPECA2 = (float)$_POST['valorPECA2'];

        $valorcompra = ($valorPECA1 * $quantidadePECA1) + ($valorPECA2 * $quantidadePECA2);

        printf("<br>Você escolheu %u peças de código %u com valor unitário de %.2f", $quantidadePECA1, $peca1, $valorPECA1);
        printf("<br>Você escolheu %u peças de código %u com valor unitário de %.2f", $quantidadePECA2, $peca2, $valorPECA2);
        printf("<br>Sua compra será no valor de R$ %.2f reais", $valorcompra);
    }
    ?>

    <h3>Fazer um programa que leia três valores com ponto flutuante de
        dupla precisão: A, B e C. Em seguida, calcule e mostre:
        <p>a) a área do triângulo retângulo que tem A por base e C por altura.</p>
        <p>b) a área do círculo de raio C. (pi = 3.14159)</p>
        <p>c) a área do trapézio que tem A e B por bases e C por altura.</p>
        <p>d) a área do quadrado que tem lado B.</p>
        <p>e) a área do retângulo que tem lados A e B.</p>
    </h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #4" id="4" method="POST">
        <input type="number" step=".01" min="0" name="number1" placeholder="Valor de A" id="">
        <input type="number" step=".01" min="0" name="number2" placeholder="Valor de B" id="">
        <input type="number" step=".01" min="0" name="number3" placeholder="Valor de C" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['number1'], $_POST['number2'], $_POST['number3'])) {
        $valorDeA = (float)$_POST['number1'];
        $valorDeB = (float)$_POST['number2'];
        $valorDeC = (float)$_POST['number3'];
        $areaTRIANGULO = ($valorDeA * $valorDeB) / 2;
        $areaCIRCULO = 3.14159 * pow($valorDeC, 2);
        $areaTRAPEZIO = ($valorDeA + $valorDeB) * $valorDeC / 2;
        $areaQUADRADO = pow($valorDeB, 2);
        $areaRETANGULO = $valorDeA * $valorDeB;

        printf("<br> Área triangulo = %.4f<br>Área círculo = %.4f<br>Área trapézio = %.4f<br>Área quadrado = %.4f<br>Área retângulo = %.4f", $areaTRIANGULO, $areaCIRCULO, $areaTRAPEZIO, $areaQUADRADO, $areaRETANGULO);
    }
    ?>



</body>

</html>