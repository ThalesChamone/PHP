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
  <h3>1. Faça um programa que exiba na tela “Use máscara!”.</h3>
  <?php
    echo "Use máscara!";
  ?>
    

    <h3>2. Faça um programa que exiba na tela “2021”.</h3>
    <?php
    echo "2021";
    ?>

    <h3>3. Faça um programa que exiba na tela o seu nome, sua turma e a data.</h3>
    <?php
    echo "Thales, turma TII2001-M, 27/08/2021 "
    ?>

    <h3>4. Crie uma variável para receber seu nome e a data do seu nascimento como
   valores. Exiba uma mensagem concatenando os valores das variáveis.</h3>

   <?php
    $nome = "Thales";
    $nascimento = "12/02/1993";

    echo $nome . $nascimento;

   ?>

    <h3>5. Faça um programa que informe o nome e idade de todos os integrantes da
 sua casa. Depois exiba a soma das idades.</h3>

  <?php
   $idade1 = 28;
   $idade2 = 23;
   $idade3 = 30;
   $somaIdade = $idade1 + $idade2 + $idade3;

   echo "Soma das idades =" .  $somaIdade ;

  ?>

    <h3>6. Procure na internet um conversor de moeda. Escreva um programa que
 converta sua mesada de reais para dólar.</h3>
  <?php
    $dolar = 5.24;
    $mesada = 200;
    $mesadaDolar = 200*5.24;

    echo "Mesada convertida em dolar = $" . $mesadaDolar;
  ?>

    <h3>7. Continuando o programa anterior. Se sua mesada em dólares for maior que
    US$ 100,00 escreva "Vou comprar bitcoin". Se for maior que US$ 200,00
    escreva "Vou investir no tesouro nacional". Se for menor que U$100,00 escreva
    "Vou comprar bala".</h3>

    <?php
    $mesadaDolar = 200*5.24;

    if($mesadaDolar> 100 && $mesadaDolar <200){
        printf("Vou comprar bitcoin");
    }else if($mesadaDolar > 200){
        printf("Vou investir no tesouro nacional");
    }else if($mesadaDolar < 100){
        printf("Vou comprar bala");
    }
  ?>


    <h3>8. Faça um programa que converta Fahrenheit em Celsius. Sabendo que a
    formula é C = (F – 32) / 1.8 e escreva na tela a temperatura em graus Celsius e
    em Fahrenheit.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #8" id="8" method="POST">
    <input type="number" name="conversor" id="">
    <br>
    <br>
    <button type="submit">Converter</button>
    </form>
    
    <?php
    if(isset($_POST['conversor'])){
        $tempFahrenheit = $_POST['conversor'];
        $tempCelsius = ($tempFahrenheit - 32) / (1.8);
        $tempCelsius = floor($tempCelsius);
        echo  "Temp convertida = $tempCelsius";
    }
    ?>


    <h3>9. Escreva um programa para ler o salário mensal atual de um funcionário e o
    percentual de reajuste de 6%. Calcular e escrever o valor do novo salário.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #9" id="9" method="POST">
    <input type="number" name="reajustarSalario" id="">
    <br>
    <br>
    <button type="submit">Reajustar Salário</button>
    </form>
    
    <?php
    if(isset($_POST['reajustarSalario'])){
        $salario = $_POST['reajustarSalario'];
        $salarioAjuste = ($salario * 0.06) + $salario;
        echo "Salário com reajuste = R$ $salarioAjuste";
    }
    ?>

    <h3>10. Faça um programa que receba um valor que foi depositado e exiba o valor
    com rendimento após um mês. Considere fixo o juro da poupança em 0,049%
    a. m.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #10" id="10" method="POST">
    <input type="number" name="rendimento" id="">
    <br>
    <br>
    <button type="submit">Clique Aqui</button>
    </form>

    <?php
    if(isset($_POST['rendimento'])){
        $valor = $_POST['rendimento'];
        $rendimento = ($valor*0.049) + $valor;
        echo "Valor com rendimento = R$ $rendimento";
    }
    ?>

    <h3>11. Escreva um programa para ler o nome e a idade de uma pessoa, e exibir
    quantos dias de vida ela possui. Considere sempre anos completos, e que um
    ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida;
    veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #11" id="11" method="POST">
    <input type="text" name="nomePessoa" id="" placeholder="Seu Nome" >
    <input type="number" name="idade" placeholder="Sua idade" id="">
    <br>
    <br>
    <button type="submit">Idade em dias</button>
    </form>

    <?php
     if(isset($_POST['nomePessoa'],$_POST['idade'])){
        $nome = $_POST['nomePessoa'];
        $idade = $_POST['idade'];
        $idadeDias = $idade*365;
        echo "$nome tem $idadeDias dias de vida";
    }
    ?>
   
    <h3>12. Escreva um programa para ler o número total de eleitores de um município,
    o número de votos brancos, nulos e válidos. Calcular e escrever o percentual
    que cada um representa em relação ao total de eleitores.</h3>
    
    <form action="<?=$_SERVER['PHP_SELF'];?> #12" id="12" method="POST">
    <input type="number" name="totalEleitores" id="" placeholder="Total de eleitores" >
    <input type="number" name="brancos" id="" placeholder="Votos em branco" >
    <input type="number" name="nulos" placeholder="Votos nulos" id="">
    <input type="number" name="validos" placeholder="Votos válidos" id="">
    <br>
    <br>
    <button type="submit">Calcular percentual</button>
    </form>

    <?php
    if(isset($_POST['totalEleitores'], $_POST['brancos'],$_POST['nulos'],$_POST['validos'])){   

        $eleitores = $_POST['totalEleitores'];
        $votosBrancos = $_POST['brancos'];
        $votosNulos = $_POST['nulos'];
        $votosValidos = $_POST['validos'];

        $votosBrancos = ($votosBrancos / $eleitores) * 100;
        $votosNulos = ($votosNulos / $eleitores) * 100;
        $votosValidos = ($votosValidos / $eleitores) * 100;

        printf("Percentual de votos brancos = %.2f%% <br> Percentual de votos nulos = %.2f%% <br> Percentual de votos validos = %.2f%%",$votosBrancos,$votosNulos,$votosValidos);
    }
    ?>

   <h3>13. Escreva um programa para ler o salário mensal atual de um funcionário e
    aplicar um percentual de reajuste, calcular e escrever o valor do novo salário.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #13" id="13" method="POST">
    <input type="text" name="reajusteSalario" id="" placeholder="Valor reajuste" >
    <input type="number" name="salarioMensal" placeholder="Seu salário" id="">
    <br>
    <br>
    <button type="submit">Salário reajustado</button>
    </form>

    <?php
    if(isset($_POST['reajusteSalario'],$_POST['salarioMensal'])){
        $valorReajuste = $_POST['reajusteSalario'];
        $salarioMensal = $_POST['salarioMensal'];
        $salarioREAJUSTADO = $salarioMensal + $salarioMensal * ($valorReajuste / 100);
    printf("Salário reajustado = %.2f", $salarioREAJUSTADO);
    }
    ?>

    <h3>14. O custo de um carro novo ao consumidor é a soma do custo de fábrica com
    a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
    Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,
    escrever um programa para ler o custo de fábrica de um carro, calcular e
    escrever o custo final ao consumidor.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #14" id="14" method="POST">
    <input type="number" name="carro" id="" placeholder="Valor carro" >
    <br>
    <br>
    <button type="submit">Valor carro</button>
    </form>

    <?php
    if(isset($_POST['carro'])){
        $valorCarro = $_POST['carro'];
        $valorTOTAL = ($valorCarro * 0.28) + ($valorCarro * 0.45) + $valorCarro;
        printf("Valor total do carro com impostos = R$ %.2f", $valorTOTAL);
    }
    ?>

    <h3>15. Uma revendedora de carros usados paga a seus funcionários vendedores
    um salário fixo por mês, mais uma comissão também fixa para cada carro
    vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um
    programa que leia o número de carros por ele vendidos, o valor total de suas
    vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e
    escreva o salário final do vendedor.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #15" id="15" method="POST">
    <input type="number" name="carrosVendidos" id="" placeholder="Carros vendidos" >
    <input type="number" name="totalVendas" id="" placeholder="Total de vendas" >
    <input type="number" name="salario" id="" placeholder="Salário vendedor" >
    <input type="number" name="comissao" id="" placeholder="Valor por carro vendido" >
    <br>
    <br>
    <button type="submit">Calcular Salário</button>
    </form>

    <?php
    if(isset($_POST['carrosVendidos'],$_POST['totalVendas'],$_POST['salario'],$_POST['comissao'])){
        $carrosVendidos = $_POST['carrosVendidos'];
        $totalVendas = $_POST['totalVendas'];
        $salarioMensal = $_POST['salario'];
        $comissao = $_POST['comissao'];

        $salarioFinal = (($comissao / 100)*$carrosVendidos) + ($totalVendas * 0.05) + $salarioMensal;

        echo "Salário final = R$ $salarioFinal";
    }
    ?>

    <h3>16. A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco)
    prestações sem juros. Faça um programa que receba um valor de uma compra
    e mostre o valor das prestações.</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #16" id="16" method="POST">
    <input type="text" name="valorCompra" id="" placeholder="Valor compra" >
    <br>
    <br>
    <button type="submit">Valor prestações</button>
    </form>

    <?php
        if(isset($_POST['valorCompra'])){
            $valorCompra = $_POST['valorCompra'];
            $valorPrestacao = $valorCompra / 5;
            printf("Terá que pagar 5 prestaçoes no valor de R$ %.2f cada", $valorPrestacao);
        }
    ?>

    <h3>17. Faça um algoritmo que receba o preço de custo de um produto e mostre o
    valor de venda. Sabe-se que o preço de custo receberá um acréscimo de
    acordo com um percentual informado pelo usuário.</h3>
    
    <form action="<?=$_SERVER['PHP_SELF'];?> #17" id="17" method="POST">
    <input type="text" name="precoCusto" id="" placeholder="Preço produto" >
    <input type="text" name="acrescimo" id="" placeholder="Acréscimo" >
    <br>
    <br>
    <button type="submit">Preço venda</button>
    </form>
    
    <?php
        if(isset($_POST['precoCusto'],$_POST['acrescimo'])){
            $precoProduto = $_POST['precoCusto'];
            $acrescimo = $_POST['acrescimo'];
            $precoProdutoTotal = ($acrescimo / 100) * $precoProduto + $precoProduto;

            printf("Preço de venda do produto = R$ %.2f", $precoProdutoTotal);
        }
    ?>

    <h3>18. A padaria Hotpão vende uma certa quantidade de pães franceses e uma
    quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a broa custa
    R$ 4,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos
    pães e broas (juntos), e quanto deve guardar numa conta de poupança (10%
    do total arrecadado). Você foi contratado para fazer os cálculos para o dono.
    Com base nestes fatos, faça um programa para ler as quantidades de pães e
    de broas, e depois calcular os dados solicitados.</h3>
    
    <form action="<?=$_SERVER['PHP_SELF'];?> #18" id="18" method="POST">
    <input type="text" name="qntPAO" id="" placeholder="Quantidade de pães vendidos" >
    <input type="text" name="qntBROA" id="" placeholder="Quantidade de broas vendidas" >
    <br>
    <br>
    <button type="submit">Arrecadação vendas</button>
    </form>

    <?php
        if(isset($_POST['qntPAO'],$_POST['qntBROA'])){
            $qntPAO = $_POST['qntPAO'];
            $qntBroa = $_POST['qntBROA'];
            $totalArrecadado = ($qntPAO * 0.50) + ($qntBroa * 4.50);
            $poupanca = $totalArrecadado * 0.10;

            printf("Valor da venda de pães e broas = R$ %.2f <br> Deposito na poupança será no valor de R$ %.2f", $totalArrecadado, $poupanca);
            
        }
    ?>

    <h3>19. Um motorista deseja colocar no seu tanque X reais de gasolina. Escreva
    um programa para ler o preço do litro da gasolina e o valor do pagamento, e
    exibir quantos litros ele conseguiu colocar no tanque.</h3>
    
    <form action="<?=$_SERVER['PHP_SELF'];?> #19" id="19" method="POST">
    <input type="text" name="precoLitro" id="" placeholder="Valor litro combustível" >
    <input type="text" name="valorPago" id="" placeholder="Valor Pago" >
    <br>
    <br>
    <button type="submit">Clique Aqui</button>
    </form>

    <?php
        if(isset($_POST['precoLitro'],$_POST['valorPago'])){
           $preco = $_POST['precoLitro'];
           $valorPago = $_POST['valorPago'];
           $litragem = $valorPago / $preco;

           printf("Foram abastecidos %.2f litros",$litragem);
        }
    ?>

    <h3>20. Programa par perfeito. Faça um programa em que o usuário precise digitar
    um número de 1 até 10. Agora o outro usuário digita o segundo número. Se o
    número do primeiro usuário for igual ao do segundo escreva “Esse é seu par
    perfeito” Se os números forem diferentes escreva “Afaste-se do seu inimigo”</h3>

    <form action="<?=$_SERVER['PHP_SELF'];?> #20" id="20" method="POST">
    <input type="number" max="10" name="aleatorio" id="" placeholder="Valor aleatório" >
    <input type="number" max="10" name="aleatorio2" id="" placeholder="Valor aleatório" >
    <br>
    <br>
    <button type="submit">Clique Aqui</button>
    </form>
    
    <?php
        if(isset($_POST['aleatorio'],$_POST['aleatorio2'])){
           $n1 = $_POST['aleatorio'];
           $n2 = $_POST['aleatorio2'];
           
           if($n1 == $n2){
               echo "Esse é seu par perfeito";
           }else {
               echo "Afaste-se do seu inimigo";
           }

        }
    ?>

</center>
</body>
</html>

