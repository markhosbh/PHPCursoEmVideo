<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Básico</title>
        <link rel="stylesheet" href="./css/style.css">        
        <script language=javascript type="text/javascript" src="scripts/popup.js"></script>
    </head>
    <body>
        <div class="titulo">
            <h1>CURSO EM VÍDEO - PHP BÁSICO</h1>
        </div>
        <a class="iframe" href="javascript:newPopup()"><?php echo htmlentities("<?php Testar Código ?>"); ?></a> 
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


        <h2>Vetores e Matrizes</h2>

        <fieldset><legend><h4>Vetor</h4></legend>
            <ul>
                <li>Declaração e Atrinuição</li>
                <pre>
                $vet = array(3,5,8,2); //declara um vetor de 4 posições
                $vet[] = 7; //atribui novo índice ao vetor
                print_r($vet); 
                </pre>  

                <li>Vetor com Range</li>
                Função utilizada para criação de vertores de contagem sequencial: <b>range("valor inicial","valor final","contador sequencial")</b>
                <pre>
                $vetRange = range(5, 20, 5); //irá declar um vetor cujo 5 é o valor inicial, 20 o valor final e irá contar de 5 em 5 até interar 20
                print_r($vetRange);            
                </pre>

                <li>Vetor Associativo</li>
                <pre>
                $vetAssoc = array(
                    "Curso" => "PHP",
                    "Escola" => "Curso em Vídeo",
                    "Professor" => "Gustavo Guanabara",
                    "Valor" => 0800
                );
                print_r($vetAssoc);    
                </pre>

                <li>unset</li>
                Função responsável por Desalocar/Excluir determinada posição do vetor
                <pre>                
                $vetUnset = array("A", "B", "C", "Será Excluído", "E", "F");
                print_r($vetUnset);
                unset($vetUnset[3]); //O indice 3 do vertor será Desalocado/Excluido
                print_r($vetUnset);    
                </pre>

                <li>count</li>
                Retona a quantidade de elementos do vetor;
                <pre>
                echo count(array(1,2,3,4));
                </pre>
            </ul>
        </fieldset>
        <fieldset><legend><h4>Matriz</h4></legend>
            Matriz ou vetor multidimensional.<br>
            Declaclando uma Matriz.
            <pre>
            $mat = array(
                array("A", "B"),
                array("C", "D"),
                array("E", "F"),
            );  
            print_r($mat);    
            </pre>

            Sobrescrevendo Valores
            <pre>
            $mat = array(
                array("A", "Vai Ser Substituido"),
                array("C", "D"),
                array("Valor Substituto", "F"),
            ); 
            print_r($mat);

            $mat[0][1] = $mat[2][0]; //faz com que o valor contido na linha 0 coluna 1 receba o valor contido na linha 2 coluna 0
            print_r($mat);   
            </pre>
        </ul>
    </fieldset> 

    <fieldset><legend><h4>Foreach</h4></legend>
        Utilizado para percorrer array.<br>    
        Foreach = para cada elemento do array <b>X</b> será tratado como <b>Y</b>
        <pre>
            $arrayX = range(4, 20, 2);
            foreach ($arrayX as $valorY) { //irá percorrer todo array e jogar o valor do indice na variavel $valorY
                echo "{$valorY} ";
            }
        </pre>

        Foreach com valores associativos
        <pre>
            //Vetor Associativos
            $vetAssoc = array(
                "Nome" => "Marcos",
                "Sobrenome" => "Santos",
                "idade" => 31,
                "peso" => 78.9
            );
        
            //Percorrendo e exibindo associação e valores com Foreach
            foreach ($vetAssoc as $campo => $valor) {
                echo "<b>{$campo}: </b>{$valor}< br>";
            }    
        </pre>                                   
    </fieldset>

    <fieldset><legend><h4>Manipulando Vetores</h4></legend>
        <pre>
        $aManip = array(3,5,8,2,7);
        print_r($aManip);
            <?php
            $aManip = array(3, 5, 8, 2, 7);
            print_r($aManip);
            ?>
        
        <b>//array_push adiciona um elemento ao final do vetor</b>
        array_push($aManip,'incluido no final');
        print_r($aManip);
            <?php
            array_push($aManip, 'incluido no final');
            print_r($aManip);
            ?>
        
        <b>//array_pop remove o ultimo elemento do vetor</b>
        array_pop($aManip);
        print_r($aManip);
            <?php
            array_pop($aManip);
            print_r($aManip);
            ?>
        
        <b>//array_unshift insere um elemento ao inicio do vetor</b>
        array_unshift($aManip, 'incluido no inicio');
        print_r($aManip);
            <?php
            array_unshift($aManip, 'incluido no inicio');
            print_r($aManip);
            ?>
                
        <b>//array_shift remove um elemento no inicio do vertor</b>
        array_shift($aManip);
        print_r($aManip);
            <?php
            array_shift($aManip);
            print_r($aManip);
            ?>
        
        <b>//sort Orderna o vetor pelos elementos</b>
        sort($aManip);
        print_r($aManip);
            <?php
            sort($aManip);
            print_r($aManip);
            ?>
        
        <b>//rsort Orderna o vetor de forma decrescente pelos elementos</b>
        rsort($aManip);
        print_r($aManip);
            <?php
            rsort($aManip);
            print_r($aManip);
            ?>
        
        <b>//asort Orderna o vetor pelos elementos mantendo os indices associativos</b>
        asort($aManip);
        print_r($aManip);
            <?php
            asort($aManip);
            print_r($aManip);
            ?>
        
        <b>//arsort Orderna o vetor de forma decrescente pelos elementos mantendo os indices associativos</b>
        arsort($aManip);
        print_r($aManip);
            <?php
            arsort($aManip);
            print_r($aManip);
            ?>
        <hr>
        $aManip2 = array(2=>3,5=>5,3=>8,1=>2,0=>7);
        print_r($aManip2);
            <?php
            $aManip2 = array(2 => 3, 5 => 5, 3 => 8, 1 => 2, 0 => 7);
            print_r($aManip2);
            ?>
        
        <b>//ksort Orderna o vetor pelos indices</b>        
        ksort($aManip2);
        print_r($aManip2);
            <?php
            ksort($aManip2);
            print_r($aManip2);
            ?>
        
        <b>//krsort Orderna o vetor pelos indices em maneira decrescente</b>      
        krsort($aManip2);
        print_r($aManip2);
            <?php
            krsort($aManip2);
            print_r($aManip2);
            ?>
        </pre>
    </fieldset>            
</body>
</html>