<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Básico</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <fieldset><legend><h1>Operadores Aritiméticos</h1></legend>
            <fieldset><legend><h4>Valor Absoluto</h4></legend>
                <pre>echo abs(-15);</pre>
                <?php echo "<b>Resultado = ". abs(-15)."</b>";?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Potenciação</h4></legend>
                <pre>echo pow(2,3);</pre>
                <?php echo "<b>Resultado = ". pow(2,3)."</b>";?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Raiz Quadrada</h4></legend>
                <pre>echo sqrt(18);</pre>
                <?php echo "<b>Resultado = ". sqrt(18)."</b>";?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Arredonda o Valor</h4></legend>
                Arredondamento comum:
                <pre>echo round(15,5);</pre>
                <?php echo "<b>Resultado = ". round(15,5)."</b>";?>
                <br><br>
                Arredonda o valor para Mais:
                <pre>echo ceil(15.5);</pre>
                <?php echo "<b>Resultado = ".ceil(15.5)."</b>";?>
                <br><br>
                Arredonda o valor para Menos:
                <pre>floor(17.5);</pre>
                <?php echo "<b>Resultado = ".floor(17.5)."</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Valor Inteiro</h4></legend>
                <pre>echo intval(15.1256);</pre>
                <?php echo "<b>Resultado = ". intval(15.1256)."</b>";?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Formatador de Números</h4></legend>
                <pre>echo "R$ ".number_format(25.5,2, "," ,".");</pre>
                <?php echo "<b>Resultado = R$ ". number_format(25.5,2, "," ,".")."</b>";?>
            </fieldset>
        </fieldset>    



        <h1>Operadores Relacionais</h1>
        
        <fieldset><legend><h4>Operador Ternário</h4></legend>
            <b>Sintax:</b>
            (expressão) ? verdadeiro: falso)
            <pre>
            $relacional = (5 > 7) ? 'É Maior' : 'É Menor';
            </pre>    
            <?php
            echo "<b>Resultado: " . $relacional = (5 > 7) ? 'É Maior' : 'É Menor'."</b>";
            ?>
        </fieldset>

        <fieldset>
            <legend><h4>Operador Lógicos</h4></legend>
            <img src="./img/operadores_relacionais.fw.png">
        </fieldset>

        <h1>Estrutura de repetição</h1>
        <fieldset >
            <legend><h4>FOR</h4></legend>
            <pre>
                <?php
                echo htmlentities('
            for ($i = 1; $i <= 10; $i++) {
                echo "<fieldset class=\"tabuada\"><legend><b>Tabuada de {$i}</b></legend> ";
                for($x = 1; $x<=10; $x++){
                    echo"{$i} X {$x} = ".$i*$x."<br>";
                }
                echo"</fieldset>";
            }');
                echo "</pre>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<fieldset class=\"tabuada\"><legend><b>Tabuada de {$i} X</b></legend> ";
                    for ($x = 1; $x <= 10; $x++) {
                        echo"{$i} X {$x} = " . $i * $x . "<br>";
                    }
                    echo"</fieldset>";
                }
                ?>
        </fieldset>
        
        <h1>Rotinas</h1>
        
        <fieldset><legend><h4>Function com Parametros</h4></legend>
            <pre>
            //passagem de 2 parametros $v1 e $v2
            function divisao($v1, $v2) {
                $divisao = $v1/$v2;
                echo "O resultado da divisão é: {$divisao}";
            }
            //chamada da função
            divisao(10, 3);
            </pre>
            <?php

            //passagem de 2 parametros $v1 e $v2
            function divisao($v1, $v2) {
                $divisao = $v1 / $v2;
                echo "<b>O resultado da divisão é: {$divisao}</b>";
            }

            //chamada da função
            divisao(10, 3);
            ?>
        </fieldset>

        <fieldset><legend><h4>Function sem Parametros Definidos</h4></legend>
            <pre>
            function soma() {
                $args = func_get_args(); //monta um array com os valores que são passados aleatóriamente
                $num = func_num_args($args); //retorna o numero de argumentos que foram passados
                $soma = 0;
                for ($i = 0; $i < $num; $i++) {
                    $soma += $args[$i];
                }
                //return $args;
                return $soma;
            }

            //chamada da função e passada de parametros aleatórios
            $result = soma(3, 6, 8);

            echo "O resultado da soma é {$result}";            
            </pre>
            <?php

            function soma() {
                $args = func_get_args(); //monta um array com os valores que são passados aleatóriamente
                $num = func_num_args($args); //retorna o numero de argumentos que foram passados
                $soma = 0;
                for ($i = 0; $i < $num; $i++) {
                    $soma += $args[$i];
                }
                //return $args;
                return $soma;
            }

            $result = soma(3, 6, 8);
            echo "<b>O resultado da soma é {$result}</b>";
            //var_dump($result);
            ?>
        </fieldset>


    </body>
</html>