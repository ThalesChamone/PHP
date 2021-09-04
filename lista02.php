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

        table {
            margin: auto;
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

    <form action="<?= $_SERVER['PHP_SELF']; ?> #5" id="5" method="POST">
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

    <h3>6. Fazer um programa que leia três valores com ponto flutuante de
        dupla precisão: A, B e C. Em seguida, calcule e mostre:
        <p>a) a área do triângulo retângulo que tem A por base e C por altura.</p>
        <p>b) a área do círculo de raio C. (pi = 3.14159)</p>
        <p>c) a área do trapézio que tem A e B por bases e C por altura.</p>
        <p>d) a área do quadrado que tem lado B.</p>
        <p>e) a área do retângulo que tem lados A e B.</p>
    </h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #6" id="6" method="POST">
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

    <h3>7. Fazer um programa para ler um número inteiro, e depois dizer se
        este número é negativo ou não.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #7" id="7" method="POST">
        <input type="number" name="number1" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['number1'])) {
        $numeroA = (float)$_POST['number1'];
        if ($numeroA < 0) {
            printf("NEGATIVO");
        } else {
            printf("NÃO NEGATIVO");
        }
    }
    ?>

    <h3>8. Fazer um programa para ler um número inteiro e dizer se este
        número é par ou ímpar.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #8" id="8" method="POST">
        <input type="number" name="par/impar" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['par/impar'])) {
        $numberA = (float)$_POST['par/impar'];
        if ($numberA % 2 == 0) {
            printf("PAR");
        } else {
            printf("ÍMPAR");
        }
    }
    ?>

    <h3>9. Leia 2 valores inteiros (A e B). Após, o programa deve mostrar uma
        mensagem "Sao Multiplos" ou "Nao são Multiplos", indicando se os valores lidos
        são múltiplos entre si.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #9" id="9" method="POST">
        <input type="number" name="multiplo" id="">
        <input type="number" name="multiplo2" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['multiplo'], $_POST['multiplo2'])) {
        $numberA = $_POST['multiplo'];
        $numberB = $_POST['multiplo2'];

        if ($numberA % $numberB == 0 || $numberB % $numberA == 0) {
            printf("MÚLTIPLOS");
        } else {
            printf("NÃO MÚLTIPLOS");
        }
    }
    ?>

    <h3>10. Leia a hora inicial e a hora final de um jogo. A seguir calcule a
        duração do jogo, sabendo que o mesmo pode começar em um dia e terminar em
        outro, tendo uma duração mínima de 1 hora e máxima de 24 horas.</h3>
    <form action="<?= $_SERVER['PHP_SELF']; ?> #10" id="10" method="POST">
        <input type="number" name="horaInicial" id="">
        <input type="number" name="HoraFinal" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['horaInicial'], $_POST['HoraFinal'])) {
        $horaInicial = $_POST['horaInicial'];
        $horaFinal = $_POST['HoraFinal'];
        $duracaoHora;

        if ($horaFinal > $horaInicial || $horaFinal >= $horaInicial) {
            $duracaoHora = $horaFinal - $horaInicial;
        } elseif ($horaFinal == $horaInicial) {
            $duracaoHora = 24;
        } elseif ($horaFinal < $horaInicial) {
            $duracaoHora = $horaFinal + (24 - $horaInicial);
        }

        printf("O jogo durou %u horas", $duracaoHora);
    }
    ?>

    <h3>11. Com base na tabela abaixo, escreva um programa que leia o
        código de um item e a quantidade deste item. A seguir, calcule e mostre o valor
        da conta a pagar.</h3>
    <table border="1">
        <tr>
            <td>Código</td>
            <td>Especificação</td>
            <td>Preço</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Cachorro Quente</td>
            <td>R$ 4,00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>X-Salada</td>
            <td>R$ 4,50</td>
        </tr>
        <tr>
            <td>3</td>
            <td>X-Bacon</td>
            <td>R$ 5,00</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Torrada Simples</td>
            <td>R$ 2,00</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Refrigerante</td>
            <td>R$ 1,50</td>
        </tr>
    </table>
    <form action="<?= $_SERVER['PHP_SELF']; ?> #11" id="11" method="POST">
        <input type="number" name="codigoItem" placeholder="Código do item" id="">
        <input type="number" name="qntItem" placeholder="Quantidade do Item" id="">
        <br>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['codigoItem'], $_POST['qntItem'])) {
        $codigoItem = $_POST['codigoItem'];
        $qntItem = $_POST['qntItem'];
        $valorDaCompra;

        switch ($codigoItem) {
            case '1':
                $valorDaCompra = $qntItem * 4;
                printf("Você comprou %u Cachorro quente e sua conta será no valor de R$ %.2f", $qntItem, $valorDaCompra);
                break;
            case '2':
                $valorDaCompra = $qntItem * 4.50;
                printf("Você comprou %u X-Salada e sua conta será no valor de R$ %.2f", $qntItem, $valorDaCompra);
                break;
            case '3':
                $valorDaCompra = $qntItem * 5;
                printf("Você comprou %u X-Bacon e sua conta será no valor de R$ %.2f", $qntItem, $valorDaCompra);
                break;
            case '4':
                $valorDaCompra = $qntItem * 2;
                printf("Você comprou %u Torrada simples e sua conta será no valor de R$ %.2f", $qntItem, $valorDaCompra);
                break;
            case '5':
                $valorDaCompra = $qntItem * 2;
                printf("Você comprou %u Torrada simples e sua conta será no valor de R$ %.2f", $qntItem, $valorDaCompra);
                break;
        }
    }
    ?>
    <h3>12. Você deve fazer um programa que leia um valor qualquer e
        apresente uma mensagem dizendo em qual dos seguintes intervalos ([0,25],
        (25,50], (50,75], (75,100]) este valor se encontra. Obviamente se o valor não
        estiver em nenhum destes intervalos, deverá ser impressa a mensagem “Fora
        de intervalo”.</h3>

    <form action="<?= $_SERVER['PHP_SELF']; ?> #12" id="12" method="POST">
        <input type="number" step=".01" name="num" id="">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['num'])) {
        $intervalo = $_POST['num'];
        if ($intervalo >= 0 && $intervalo <= 25) {
            printf("Intervalo entre (0-25)");
        } elseif ($intervalo > 25 && $intervalo <= 50) {
            printf("Intervalo entre (25-50)");
        } elseif ($intervalo > 50 && $intervalo <= 75) {
            printf("Intervalo entre (50-75)");
        } elseif ($intervalo > 75 && $intervalo <= 100) {
            printf("Intervalo entre (75-100)");
        } else {
            printf("Fora de intervalo");
        }
    }
    ?>
    <h3>13. Leia 2 valores com uma casa decimal (x e y), que devem
        representar as coordenadas de um ponto em um plano. A seguir, determine qual
        o quadrante ao qual pertence o ponto, ou se está sobre um dos eixos cartesianos
        ou na origem (x = y = 0).
        Se o ponto estiver na origem, escreva a mensagem “Origem”.
        Se o ponto estiver sobre um dos eixos escreva “Eixo X” ou “Eixo Y”, conforme
        for a situação.</h3>
    <form action="<?= $_SERVER['PHP_SELF']; ?> #13" id="13" method="POST">
        <input type="number" step=".01" name="valor1" id="">
        <input type="number" step=".01" name="valor2" id="">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['valor1'], $_POST['valor2'])) {
        $X = $_POST['valor1'];
        $Y = $_POST['valor2'];

        if ($X == 0 && $Y == 0) {
            printf("Origem");
        } else if ($X == 0 && $Y != 0) {
            printf("Eixo Y");
        } else if ($X != 0 && $Y == 0) {
            printf("Eixo X");
        } else if ($X > 0 && $Y > 0) {
            printf("Q1");
        } else if ($X < 0 && $Y > 0) {
            printf("Q2");
        } else if ($X < 0 && $Y < 0) {
            printf("Q3");
        } else if ($X > 0 && $Y < 0) {
            printf("Q4");
        }
    }
    ?>
</body>

</html>