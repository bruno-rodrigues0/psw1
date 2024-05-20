<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/globals.css">
    <title>Document</title>
</head>
<body>
    <h1>Utilizando métodos de arrays</h1>

    <hr>

    <h2>array array_key(arr): retorna todas as chaves do array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>array_keys($array);</p>

        <?php 
        
            $array = ['nome' => 'Bruno', 'idade' => 18];
        

            echo "<p>" . json_encode(array_keys($array)) . "</p>";
        ?>
    </pre>

    <h2>array array_values(arr): retorna todos os valores do array <code>arr</code>;</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>array_values($array);</p>

        <?php 

            echo "<p>" . json_encode(array_values($array)) . "</p>";
        ?>
    </pre>

    <h2>String array_search(val, arr): busca pelo valor <code>val</code> no array <code>arr</code> e retorna a respectiva chave;</h2>

    
    <pre>
        <p>Powershell 7.4.2</p>

        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>array_search('Bruno', $array);</p>

        <?php 

            echo "<p>" . array_search('Bruno', $array) . "</p>";
        ?>
    </pre>

    <h2>bool array_key_exists(key, arr): verifica se uma chave ou índice key existe para um array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>array_search('idade', $array);</p>

        <?php 

            echo "<p>" . json_encode(array_search('idade', $array)) . "</p>";
        ?>
    </pre>

    <h2>bool in_array(val, arr): verifica se um valor val existe em um array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>in_array(18, $array);</p>

        <?php 

            echo "<p>" . json_encode(in_array(18, $array)) . "</p>";
        ?>
    </pre>

    <h2>bool isset(var): verifica se a variável var foi inicializada;</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <p>isset($array2);</p>

        <?php 

            echo "<p>" . json_encode(isset($array2)) . "</p>";
        ?>
    </pre>

    <h2>void unset(var): destrói a variável var;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>isset($array);</p>

        <?php 
            echo "<p>" . json_encode(isset($array)) . "</p>";

        ?>

        <p>unset($array);</p>
        <p>isset($array);</p>

        <?php
            unset($array);
            echo "<p>" . json_encode(isset($array)) . "</p>";
        ?>
    </pre>

    <h2>bool empty(var): verifica se var está vazia;</h2>

    
    <pre>
        <p>Powershell 7.4.2</p>
        <p>$var = null;</p>
        <p>empty($var);</p>

        <?php 
         
            $var = null;

            echo "<p>" . json_encode(empty($var)) . "</p>";
        ?>
    </pre>

    <h2>int array_push(arr, ele[]): adiciona um ou mais elementos ele[] no final do array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>$array = ['nome' => 'Bruno', 'idade' => 18];</p>
        <p>array_push($array, '000.000.000-01');</p>

        <?php 

            $array = ['nome' => 'Bruno', 'idade' => 18];
    
            array_push($array, '000.000.000-01');

            echo "<p>" . json_encode($array) . "</p>";
        ?>
    </pre>

    <h2>String array_pop(arr): extrai um elemento do final do array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>array_pop($array);</p>

        <?php 
    
            array_pop($array);

            echo "<p>" . json_encode($array) . "</p>";
        ?>
    </pre>

    <h2>mixed array_shift(arr): remove o primeiro elemento do array arr. O retorno pode ser um conjunto de tipos;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>array_shift($array);</p>

        <?php 
    
            array_shift($array);

            echo "<p>" . json_encode($array) . "</p>";
        ?>
    </pre>

    <h2>String array_unshift(arr): adiciona um ou mais elementos no início do array arr;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>array_unshift($array);</p>

        <?php 
    
            array_unshift($array, 'Bruno');

            echo "<p>" . json_encode($array) . "</p>";
        ?>
    </pre>

    <h2>int count(var): Conta o número de elementos da variável var, ou propriedades do objeto var;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>count($array);</p>

        <?php 
            echo "<p>" . count($array) . "</p>";
        ?>
    </pre>

    <h2>array explode(del, str): retorna uma matriz de strings, dividindo str de acordo com del;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>explode(" ", $array);</p>

        <?php 
            $string = "Bruno";
            $explode = [...explode("\\", $string)];

            echo "<p>" . json_encode($explode) . "</p>";

        ?>
    </pre>

    <h2>String implode(str, arr): retorna uma string contendo os elementos do array arr concatenados pela string str;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>$array = ['B', 'r', 'u', 'n', 'o'];</p>
        <p>implode($array);</p>

        <?php 
            $array = ['B', 'r', 'u', 'n', 'o'];
            $implode = implode($array);

            echo "<p>" . json_encode($implode) . "</p>";

        ?>
    </pre>

    <h2>array array_combine(key, val): Cria um array usando o array key para chaves e o array val para os valores;</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <p>$keys = ['nome', 'idade', 'cpf'];</p>
        <p>$values = ['Bruno', 18, '000.000.000-01'];</p>
        <p>$combine = array_combine($keys, $values);</p>

        <?php 
            $values = ['Bruno', 18, '000.000.000-01'];
            $keys = ['nome', 'idade', 'cpf'];
            $combine = array_combine($keys, $values);

            echo "<p>" . json_encode($combine) . "</p>";

        ?>
    </pre>


</body>
</html>