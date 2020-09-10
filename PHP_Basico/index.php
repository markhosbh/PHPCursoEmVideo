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
        <fieldset>
            <ul>
                <li><b>printf()</b> : Permite exibir uma string com itens formatados.</li>
                <pre> printf("curso de %s básico","PHP");</pre>
                
                <li><b>print_r()</b> : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.</li>

                <li><b>wordwrap()</b> : Cria quebras de linha ou divisões em uma string em um tamanho especificado.</li>
                <pre> $wordwrap = wordwrap("Este é um exemplo da função wordwrap", 10, "< br/>\n", false);</pre>

                <li><b>strlen()</b> : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).</li>

                <li><b>trim()</b> : Elimina espaços em branco antes e depois de uma string.</li>

                <li><b>ltrim()</b> : Elimina espaços no início de uma string.</li>

                <li><b>rtrim()</b> : Elimina espaços em branco no final de uma string.</li>

                <li><b>str_word_count()</b> : Conta quantas palavras uma string possui.</li>
                <pre> $str_word_count = str_word_count("Teste da função Str_word_count", 0);</pre>

                <li><b>explode()</b> : Quebra uma string e coloca os itens em um vetor.</li>
                <pre> $explode = explode(" ", "Teste da função explode");</pre>

                <li><b>str_split()</b> : Coloca cada letra de uma string em uma posição de um vetor.</li>
                <pre> str_split('marcos santos')</pre>
                <li><b>implode() ou join()</b> : Transforma um vetor inteiro em uma string.</li>
                <pre> print_r(implode("#", "Teste da função implode"));</pre>

                <li><b>chr()</b> : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.</li>
                <pre> chr(67);</pre>

                <li><b>ord()</b> : Retorna o código ASCII de um caractere passado como parâmetro.</li>
                <pre> ord('c');</pre>
                
                <li><b>strtolower()</b>: Converte a string toda para minúsula</li>
                <pre> strtolower("Curso de PHP Básico");</pre>
                
                <li><b>strtoupper()</b>: Converte a string toda para maiúscula</li>
                <pre> strtoupper("curso de PHP básico");</pre>
                
                <li><b>ucfirst()</b>: Converte a primeira letra da string para maiúscula</li>
                <pre> ucfirst("curso de PHP básico");</pre>
                
                <li><b>ucwords()</b>: Converte a primeira letra de cada palavra da string para maiúscula</li>
                <pre> ucwords("curso de PHP básico");</pre>
                
                <li><b>strrev()</b>: Retorna a string escrita de trás pra frente.</li>
                <pre> strrev("Curso de PHP Básico");</pre>
                
                <li><b>strpos()</b>: Procura um determinado trecho da string que quer fazer a busca e retorna a posição dessa. "Case Sensitive"</li>
                <pre> strpos("Curso de PHP Básico","PHP");</pre>
                
                <li><b>stripos()</b>: Procura um determinado trecho da string que quer fazer a busca e retorna a posição dessa. "Ignora o Case Sensitive"</li>
                <pre> stripos("Curso de PHP Básico","PHP");</pre>
                
                <li><b>substr_count()</b>: Procura um determinado trecho da string que quer fazer a busca e retorna a quantidade de vezes que foi encontrada."</li>
                <pre> substr_count("Curso de PHP Básico PHP","PHP");</pre>
                
                <li><b>substr()</b>: Retorna um trecho da string baseado nas posições correspondentes repassadas.(de,até)"</li>
                <pre> 
                substr("Curso de PHP Básico",0,5);  //irá retornar da posição 0 até a posição 5 da string
                substr("Curso de PHP Básico",9);    //irá retornar da posição 9 adiante
                substr("Curso de PHP Básico",-11);  //irá retornar as 9 posições contando da ultima para a primeira letra. "Acento conta como +1 caractér"
                </pre>
                
                <li><b>str_pad()</b>: Completa o tamanho requerido da string com um delimitador predefinido</li>
                <pre>
                //str_pad('Texto','tamanho desejado','delimitador',posição a ser acrescentada
                str_pad("PHP Básico",22,'_',STR_PAD_RIGHT); //STR_PAD_RIGHT , STR_PAD_CENTER, STR_PAD_LEFT
                </pre>
                
                <li><b>str_repeat()</b>: Utilizada para repetir determinado valor na string.</li>
                <pre> str_repeat("PHP",4);</pre>
                
                <li><b>str_replace()</b>: Substitui determinado valor por outro na string.</li>
                <pre>str_replace("PHP","PHP Básico","Curso de PHP");</pre>
            </ul> 
        </fieldset>
        <?php
            echo str_replace("PHP","PHP Básico","Curso de PHP");
        ?>   
        <hr>
        
        <!--<iframe frameborder="0" scrolling="no"  src="https://onecompiler.com/php?gclid=CjwKCAjwnef6BRAgEiwAgv8mQc5mkNTqlTFB_MCM6OnHvNLFInl5uhshcP_QNWioY1Wotp3xCEt-ExoCLrMQAvD_BwE"></iframe>-->
        
    </body>
</html>