<?php
    //instanciar
    $num1 = 0;//variáveis globais(Código todo utiliza)
    $num2 = 0;

    function somar($num1, $num2){
        $num1;//variáveis locais
        $num2;
        return (int)$num1 + (int)$num2;

    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim multiplicação

    function dividir($num1, $num2){
        if($num2 == 0){
            return "Impossível dividir por 0";
        }else{
            return $num1 / $num2;
        }
    }//fim da dividir

    function potencia($num1, $num2){
        if($num2 < 0){
            return "impossível calcular a potência de expoente negativo";
        }else{
            return pow ($num1, $num2);
        }
    }//fim do método
    
    function raiz($num1){
        if($num1 >= 0){
            return sqrt($num1);  
        }else{
            return "Impossível calcular raiz de número negativo!";
        }  

    }//fim do método

    function tabuada($num1){
        $i = 0;
        $resultado = "";
        for($i; $i<=10; $i++){
            $resultado .= "<br>".$num1."*".$i."=".($num1*$i);

        }//fim do for
        return $resultado;

    }//fim do método

    function areaRetangulo($base,$altura){
        if(($base <= 0 )||($altura <= 0)){// || significa ou e o && significa e
            return "Impossível calcular a área";
        }else{
            return $base * $altura;
        }

    }//fim do método

    function delta($a,$b,$c){
        //delta = b² - 4 * a * c
        $delt = pow($b,2) - 4 * $a * $c;
        if($delt < 0){
            return -1;
        }else{
            return $delt;  
        }
        
    }//fim do delta

    function x1($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return"Impossível calcular x1, delta negativo";
        }else{
            return (-$b + sqrt($d))/(2*$a);
        }
    
    }//fim do x1

    function x2($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return"Impossível calcular x2, delta negativo";
        }else{
            return (-$b - sqrt($d))/(2*$a);
        }
    
    }//fim do x2

    function parImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return"Ímpar";
        }

    }//fim par impar

    function maioridade($idade){
        if($idade < 18){
            return "Menor de idade";
        }else{
            return "Maior de idade";
        }
    }//fim maioridade
    
    function dobro($num){
        return $num * 2;
    }//fim dobro

    function celsiusFarenheit($celsius){
        return ($celsius * 1.8)+32;
    }//fim farenheit

    function buscarMaior($num1,$num2,$num3){
        if(($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if (($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }//fim comparação três números

    function verificarNumero($num1){
        if ($num1 < 0){
            return "Número negativo";
        }else if ($num1 > 0){
            return "Número positivo";
        }else{
            return "Zero";
        }
    }//fim do método

    function somarNumeros($num){
        $i = 1;
        $soma = 0;
        for($i; $i <= $num; $i++){
            $soma += $i;

        }
        return $soma;
    }//fimsomar

    function primo($num){
        if ($num <= 1){
            return "Não é primo";
        }
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return "Não é primo";
            }

        }
        return $num;
    }//fimnumeroprimo

    function palindromo($palavra){
        if ($palavra == strrev($palavra)){
            return "É palíndromo";
        }else{
            return "não é palíndromo";
        }
    }//fim do palindromo
    
    function fatorial($num){
        $i = $num-1;
        for($i; $i>= 1;$i--){
            $num *= $i;
        }
        return$num;

    }//fim do fatorial

    function paresLista($num){
        $i = 1;
        $pares = "";
        for($i; $i <= $num; $i++){
            if($i % 2 == 0){
                $pares .= "<br>".$i;
            } 
        }
        return $pares;
    }//fim pares

    function contarVogais($palavra){
        $tamanho = strlen($palavra);//tamanho da palavra
        $i = 0;
        $letra = "";
        $contador = 0;
        for($i; $i <=$tamanho; $i++){
            $letra = substr($palavra,$i,1);
            switch($letra){
                case 'A':
                    $contador++;
                    break;
                case 'a':
                    $contador++;
                    break;
                case 'E':
                    $contador++;
                    break;
                case 'e':
                    $contador++;
                    break;
                case 'I':
                    $contador++;
                    break;
                case 'i':
                    $contador++;
                    break;
                case 'O':
                    $contador++;
                    break;
                case 'o':
                    $contador++;
                    break;
                case 'U':
                    $contador++;
                    break;
                case 'u':
                    $contador++;
                    break;                                        
            }

        }
        return $contador;
    }//fimvogais

    function mostrarPrimos($num){
        $numPrimos = "";
        $i=1;
        for($i;$i<= $num; $i++){
            if(primo($i) != "Não é primo"){
                $numPrimos.= "<br>".$i;
            }
        }
        return $numPrimos;
    }

    function verificarDatas($mes,$dia,$ano){
        if(checkdate($mes,$dia,$ano)){
            return "Data válida";
        }else{
            return "Data inválida";
        }
    }//fim verificarDatas

    function mediaNumeros($num1,$num2,$num3,$num4,$num5){
        $media = ($num1+$num2+$num3+$num4+$num5) / 5;
        return $media;  //soma dos numeros dividido por 5
    }//fimMedia

    function divisores($num){
        $i = 0;
        $divisor = "";
        for ($i;$i < $num;$i++){
            if($num % $i == 0){
                $divisor .= "<br>".$i; 
            }   
        }
        
        return $divisor;
    }//fimdivisores

    function contarPalavras($texto){
        $contar = str_word_count($texto,0);
        return $contar;
    }//fim contar

    function fibonacci($num){
        $i = 0;
        $fib0 = 0;
        $fib1 = 1;
        $fib2 = 0;
        $resultado = $fib0."<br>".$fib1;
        for($i; $i <= $num; $i++){
            $fib2 = $fib2 + $fib1;
            $resultado .= "<br>".$fib2;
            $fib0 = $fib1;
            $fib1 = $fib2;
             
        }
        return $resultado;
    }//fim fibonacci
    

    
    //resultados
    echo "<br>A soma dos números é: ".somar(5,8);
    echo "<br>A subtração dos números é: ".subtrair(5,4);
    echo "<br>A multiplicação dos números é: ".multiplicar(10,8);
    echo "<br>A divisão dos números é: ".dividir(6,2);
    echo "<br>A potência dos números é: ".potencia(4,2);
    echo "<br>A raiz do número é: ".raiz(10);
    echo "<br>A tabuada do número informado é: ".tabuada(8);
    echo "<br>A área do retângulo é: ".areaRetangulo(5,6);
    echo "<br> O X1 é:".x1(-8,5,9);
    echo "<br> O X2 é: ".x2(-8,5,9);
    echo "<br> Par ou ímpar?".parImpar(10);
    echo "<br> Maior ou menor?".maioridade(21);
    echo "<br> O dobro do número é: ".dobro(100);
    echo "<br> Temperatura em farenheit: ".celsiusFarenheit(25);
    echo "<br> O maior dos três é: ".buscarMaior(10,4,60);
    echo "<br> O número é: ".verificarNumero(-1);
    echo "<br> A soma dos números é:  ".somarNumeros(50);
    echo "<br> Esse número: ".primo(5);
    echo "<br> Essa palavra: ".palindromo("carlos"); 
    echo "<br> O fatorial é: ".fatorial(5);
    echo "<br> Os números pares até esse são: ".paresLista(4);
    echo "<br> Vogais na palavra digitada: ".contarVogais("carlos");
    echo "<br> Números primos: ".mostrarPrimos(30);
    echo "<br>".verificarDatas(1,24,2024);
    echo "<br> A média dos números é:".mediaNumeros(10,30,60,20,5);
    echo "<br> Os divisores são: ".divisores(10);
    echo "<br> O número de palavras são: ".contarPalavras("oi xau oi");
    echo "<br> Sequência de fibonacci: ".fibonacci(10);
?>