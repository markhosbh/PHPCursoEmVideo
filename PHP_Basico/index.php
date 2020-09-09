<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Básico</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="titulo">
            <h1>CURSO EM VÍDEO - PHP BÁSICO</h1>
        </div>
        <fieldset><legend><h2>Operadores Aritiméticos</h2></legend>
            <fieldset><legend><h4>Valor Absoluto</h4></legend>
                <pre>echo abs(-15);</pre>
                <?php echo "<b>Resultado = " . abs(-15) . "</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Potenciação</h4></legend>
                <pre>echo pow(2,3);</pre>
                <?php echo "<b>Resultado = " . pow(2, 3) . "</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Raiz Quadrada</h4></legend>
                <pre>echo sqrt(18);</pre>
                <?php echo "<b>Resultado = " . sqrt(18) . "</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Arredonda o Valor</h4></legend>
                Arredondamento comum:
                <pre>echo round(15,5);</pre>
                <?php echo "<b>Resultado = " . round(15, 5) . "</b>"; ?>
                <br><br>
                Arredonda o valor para Mais:
                <pre>echo ceil(15.5);</pre>
                <?php echo "<b>Resultado = " . ceil(15.5) . "</b>"; ?>
                <br><br>
                Arredonda o valor para Menos:
                <pre>floor(17.5);</pre>
                <?php echo "<b>Resultado = " . floor(17.5) . "</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Valor Inteiro</h4></legend>
                <pre>echo intval(15.1256);</pre>
                <?php echo "<b>Resultado = " . intval(15.1256) . "</b>"; ?>
            </fieldset>
            <br>
            <fieldset><legend><h4>Formatador de Números</h4></legend>
                <pre>echo "R$ ".number_format(25.5,2, "," ,".");</pre>
                <?php echo "<b>Resultado = R$ " . number_format(25.5, 2, ",", ".") . "</b>"; ?>
            </fieldset>
        </fieldset>    



        <h2>Operadores Relacionais</h2>

        <fieldset><legend><h4>Operador Ternário</h4></legend>
            <b>Sintax:</b>
            (expressão) ? verdadeiro: falso)
            <pre>
            $relacional = (5 > 7) ? 'É Maior' : 'É Menor';
            </pre>    
            <?php
            echo "<b>Resultado: " . $relacional = (5 > 7) ? 'É Maior' : 'É Menor' . "</b>";
            ?>
        </fieldset>

        <fieldset>
            <legend><h4>Operador Lógicos</h4></legend>
            <img src="./img/operadores_relacionais.fw.png">
        </fieldset>

        <h2>Estrutura de repetição</h2>
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
        
        <h2>Funções</h2>
        <div class="alerta atencao">
            Para a utilização de Funçoes, é indicado que seja criado um arquivo 
            separado, contendo a função, e então fazer a requisição do arquivo.
        </div>
        
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

        <fieldset><legend><h4>Function Passagem de Parametro por Referência</h4></legend>
            <pre>
            /*
             * Na passagem de paramentro por referencia utiliza-se o "e comercial" (&)
             * Assim, quando passa o valor para a variavel $x o valor de $a deixa de ser um valor
             * e passa a ser uma referencia, ou seja, alterando o valor em $x altera tbm em $a
             *              
            */
            function fReferencia(&$x){
                $x += 2; //o mesmo que: $x = $x + 2;
                echo "O valor de X é: {$x}";
            }
            
            $a = 3;
            fReferencia($a);
            echo "O valor de A é: {$a}";        
            </pre>
            <?php

            function fReferencia(&$x) {
                $x += 2;
                echo "O valor de X é: {$x}";
            }

            $a = 3;
            fReferencia($a);
            echo "<br>O valor de A é: {$a}";
            ?>
        </fieldset>    

        <h2>Funções Nativas do PHP</h2>
        <fieldset><legend><h4>Wordwrap</h4></legend>
            <pre>
            /*
            * Esta função quebra o texto por tamanho com base em um valor determinado, sendo 
            * no nosso exemplo, a cada 10 caractéres. O false, impede que quebre uma palavra, 
            * caso esta tenha mais de 10 caracteres.
            */
           $wordwrap = wordwrap("Este é um exemplo da função wordwrap",10,"< br/>\n",false);
           echo $wordwrap;    
            </pre>   
            <?php
            /*
             * Esta função quebra o texto por tamanha com base em um valor determinado, sendo 
             * no nosso exemplo, a cada 10 caractéres, o false, impede que quebre uma palavra, 
             * caso esta tenha mais de 10 caracteres.
             */
            $wordwrap = wordwrap("Este é um exemplo da função wordwrap", 10, "<br/>\n", false);
            echo $wordwrap;
            ?>
        </fieldset>
                
        
        <?php 
            $str_word_count = str_word_count("Teste da função Str_word_count",0);
            echo "O texto possui <b>{$str_word_count}</b> palavras.<br>";      
            
            $explode = "Teste da função explode";
            $explode = explode(" ", $explode);
            var_dump($explode);
            
            var_dump(implode("#", $explode)); //a funçao join faz a mesma coisa
            
            
            chr(67);//retorna a letra equivalente na tabelas ascii binária do PC
            
            ord('c'); //retorna o código da letra equivalente na tabelas ascii binária do PC
            
            
            
            
            
        ?>
        <p>
            Função printf() : Permite exibir uma string com itens formatados.

            Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.

            Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.

            Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

            Função trim() : Elimina espaços em branco antes e depois de uma string.

            Função ltrim() : Elimina espaços no início de uma string.

            Função rtrim() : Elimina espaços em branco no final de uma string.

            Função str_word_count() : Conta quantas palavras uma string possui.

            Função explode() : Quebra uma string e coloca os itens em um vetor.

            Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

            Função implode() : Transforma um vetor inteiro em uma string.

            Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.

            Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
        </p>



    </body>
</html>