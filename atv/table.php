<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

<?php 

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
        ],
        [
            'id' => 3,
            'nome' => 'zeka',
            'idade' => 18
        ],
        [
            'id' => 3,
            'nome' => 'zeka',
            'idade' => 18
        ],
        [
            'id' => 3,
            'nome' => 'zeka',
            'idade' => 18
        ],
        [
            'id' => 3,
            'nome' => 'zeka',
            'idade' => 18
        ]
    ]
];

?>

    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
        </tr>

        <tr>
        <?php 
            foreach ($array['alunos'] as $key => $value) {
                echo "<tr>";
                    foreach ($value as $key2 => $value2) {
                        echo "<td>" . $value2 . "</td>";
                    }
                echo "</tr>";
            }
        ?>  
        </tr>

    </table>
    
</body>
</html>