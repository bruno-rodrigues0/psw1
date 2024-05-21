<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="globals.css">
</head>
<body>

    <h1>Array - laços</h1>
    <h2>Impressao de array [hardcoded]</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 

        $a1 = array('antonio', 'luiz', 'josé', 'joao');
        
        // echo "<p>" . $a1[0] . "</p>";
        // echo "<p>" . $a1[1] . "</p>";
        // echo "<p>" . $a1[2] . "</p>";
        // echo "<p>" . $a1[3] . "</p>";

        ?>
    </pre>

    <h2>Impressao de array [for]</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 
        $a2 = array(10, 9, 8, 7);
        for ($i = 0; $i < sizeof($a2); $i++) {
            // echo "<p>" . $a2[$i] . "</p>";
        }
        ?>
    </pre>

    <h2>Impressao de array [foreach]</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 
        $a3 = array(10, 9, 8, 7);
        foreach ($a3 as $item){
            // echo "<p>" . $item . "</p>";
        }
        ?>
    </pre>

    <h2>Impressao de array [key => value]</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 
        $a4 = array(
            "Maria" => 25,
            "João" => 44,
            "José" => 12,
            "Neusa" => 73
        );

        foreach ($a4 as $key => $item) {
            // echo "<p>". $key . " => " . $item . "</p>";
        }
        
        ?>
    </pre>

    <h2>Impressao de array multidimensional</h2>

    <pre>
        <p>Powershell 7.4.2</p>

        <?php 
        $aluno = [
            'Maria' => [
                'idade' => 17,
                'endereco' => [
                    'rua' => 'Rua Oscar Alho, 600',
                    'bairro' => 'Bairro Jalimah Mey'
                ],
                'cpf' => '000.000.000-01'
            ],
            'Bruno' => [
                'idade' => 17,
                'endereco'=> [
                    'rua' => 'Rua Oscar Alho, 69',
                    'bairro' => 'Bairro Jalimah Mey'
                ],
                'cpf' => '000.000.000-02'
            ]
        ];

        $array = [
            'alunos' => [
                [
                    'id' => 1,
                    'nome' => 'fabio',
                    'idade' => 20
                ],
                [
                    'id' => 2,
                    'nome' => 'jao',
                    'idade' => 25
                ],
                [
                    'id' => 3,
                    'nome' => 'zeka',
                    'idade' => 18
                ]
            ]
        ];

        // foreach ($aluno as $key => $item) {
        //     foreach ($item as $key2 => $item2) {
        //         if (is_array( $item2 )) {
        //             foreach ($item2 as $key3 => $item3) {
        //                 echo "<p>" . $key . " => " . $key2 . " => " . $key3 . " => " . $item3 . "</p>";
        //             }
        //         } else {
        //             echo "<p>" . $key . " => " . $key2 . " => " . $item2 . "</p>";
        //         }
        //     }
        // }

        $keys = array_keys( $aluno );

        print_r( $array['alunos'][0]);

        // for ($i = 0; 0 < count($keys); $i++){
        //     echo "" . $aluno[$keys[$i]];
        // }

        ?>
    </pre>
</body>
</html>