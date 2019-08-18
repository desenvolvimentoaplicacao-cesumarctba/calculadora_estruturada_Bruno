<?php
    //calculadora estruturada comparando com visualG
    //var
    $n1; //n1 : real
    $n2; //n2 : real
    $opcao; //opcao : inteiro
    $result; //result : real
    //inicio
    //escreval ("****** calc em PHP ******")
    echo '****** calc em PHP ******', PHP_EOL;
    //escreva ("digite um numero: ")
    //leia(n1)
    $n1 = readline('digite um numero: '); // os comandos em visualGdas linhas 10 e 11 sao unidos nessa linha em php
    //escreva ("digite o segundo numero: ")
    //leia(n2)
    $n2 = readline('digite o segundo numero: ');
    //echo 'string', PHP_EOL é igual ao escreval do visualg
    echo '****** escolha a operação******', PHP_EOL;
    echo '[1] adicao', PHP_EOL;
    echo '[2] subtracao', PHP_EOL;
    echo '[3] multiplicacao', PHP_EOL;
    echo '[4] divisao', PHP_EOL;
    //leia(opcao)
    $opcao = readline();
    //semelhante a estrutura ** escolha, caso, fimescolha ** do visualg
    switch ($opcao) {
        case 1:
            $result = $n1 + $n2;
            break;
        case 2:
            $result = $n1 - $n2;
            break;
        case 3:
            $result = $n1 * $n2;
            break;
        case 4:
            if($n2 == 0){
                $result = "buracos negros são onde deus dividiu por 0";
                break;
            }else{
            $result = $n1 / $n2;
            break;
            }
        //aqui cai todas as vezes que opção não estiver entre 1 e 4
        default:
            echo 'opção invalida';
            break;
    }
    // outra forma de pular linha é o \n no conteudo da string.
    echo "resultado: " . $result . "\n";
