<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $array = [
            "alunos" => [
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
                'id' => 4,
                'nome' => 'alice',
                'idade' => 22
            ],
            [
                'id' => 5,
                'nome' => 'bob',
                'idade' => 19
            ],
            [
                'id' => 6,
                'nome' => 'carol',
                'idade' => 23
            ],
            [
                'id' => 7,
                'nome' => 'dave',
                'idade' => 24
            ],
            [
                'id' => 8,
                'nome' => 'eve',
                'idade' => 20
            ],
            [
                'id' => 9,
                'nome' => 'frank',
                'idade' => 21
            ],
            [
                'id' => 10,
                'nome' => 'grace',
                'idade' => 22
            ],
            [
                'id' => 11,
                'nome' => 'heidi',
                'idade' => 18
            ],
            [
                'id' => 12,
                'nome' => 'ivan',
                'idade' => 20
            ],
            [
                'id' => 13,
                'nome' => 'judy',
                'idade' => 19
            ],
            [
                'id' => 14,
                'nome' => 'mallory',
                'idade' => 23
            ],
            [
                'id' => 15,
                'nome' => 'nathan',
                'idade' => 25
            ],
            [
                'id' => 16,
                'nome' => 'olivia',
                'idade' => 21
            ],
            [
                'id' => 17,
                'nome' => 'peggy',
                'idade' => 22
            ],
            [
                'id' => 18,
                'nome' => 'trent',
                'idade' => 18
            ],
            [
                'id' => 19,
                'nome' => 'victor',
                'idade' => 20
            ],
            [
                'id' => 20,
                'nome' => 'wendy',
                'idade' => 19
            ],
            [
                'id' => 21,
                'nome' => 'xander',
                'idade' => 23
            ],
            [
                'id' => 22,
                'nome' => 'yvonne',
                'idade' => 24
            ],
            [
                'id' => 23,
                'nome' => 'zach',
                'idade' => 22
            ],
            [
                'id' => 24,
                'nome' => 'angel',
                'idade' => 20
            ],
            [
                'id' => 25,
                'nome' => 'beth',
                        'idade' => 21
            ],
            [
                'id' => 26,
                'nome' => 'chris',
                'idade' => 22
            ],
            [
                'id' => 27,
                'nome' => 'danielle',
                'idade' => 18
            ],
            [
                'id' => 28,
                'nome' => 'edward',
                'idade' => 20
            ],
            [
                'id' => 29,
                'nome' => 'faith',
                'idade' => 19
            ],
            [
                'id' => 30,
                'nome' => 'george',
                'idade' => 23
            ],
            [
                'id' => 31,
                'nome' => 'hannah',
                'idade' => 25
            ],
            [
                'id' => 32,
                'nome' => 'ian',
                'idade' => 21
            ],
            [
                'id' => 33,
                'nome' => 'jessica',
                'idade' => 22
            ],
            [
                'id' => 34,
                'nome' => 'kyle',
                'idade' => 18
            ],
            [
                'id' => 35,
                'nome' => 'laura',
                'idade' => 20
            ],
            [
                'id' => 36,
                'nome' => 'mike',
                'idade' => 19
            ],
            [
                'id' => 37,
                'nome' => 'nina',
                'idade' => 23
            ],
            [
                'id' => 38,
                'nome' => 'oscar',
                'idade' => 24
            ],
            [
                'id' => 39,
                'nome' => 'paula',
                'idade' => 22
            ],
            [
                'id' => 40,
                'nome' => 'quincy',
                'idade' => 20
            ],
            [
                'id' => 41,
                'nome' => 'rachel',
                'idade' => 21
            ],
            [
                'id' => 42,
                'nome' => 'steve',
                'idade' => 22
            ],
            [
                'id' => 43,
                'nome' => 'tina',
                'idade' => 18
            ],
            [
                'id' => 44,
                'nome' => 'ursula',
                'idade' => 20
            ],
            [
                'id' => 45,
                'nome' => 'victor',
                'idade' => 19
            ],
            [
                'id' => 46,
                'nome' => 'wanda',
                'idade' => 23
            ],
            [
                'id' => 47,
                'nome' => 'xena',
                'idade' => 25
            ],
            [
                'id' => 48,
                'nome' => 'yosef',
                'idade' => 21
            ],
            [
                'id' => 49,
                'nome' => 'zelda',
                'idade' => 22
            ],
            [
                'id' => 50,
                'nome' => 'aaron',
                'idade' => 18
            ],
            [
                'id' => 51,
                'nome' => 'bella',
                'idade' => 20
            ],
            [
                'id' => 52,
                'nome' => 'caleb',
                'idade' => 19
            ],
            [
                'id' => 53,
                'nome' => 'diana',
                'idade' => 23
            ],
            [
                'id' => 54,
                'nome' => 'elias',
                'idade' => 24
            ],
            [
                'id' => 55,
                'nome' => 'fiona',
                'idade' => 22
            ],
            [
                'id' => 56,
                'nome' => 'greg',
                'idade' => 20
            ],
            [
                'id' => 57,
                'nome' => 'harper',
                'idade' => 21
            ],
            [
                'id' => 58,
                'nome' => 'isabel',
                'idade' => 22
            ],
            [
                'id' => 59,
                'nome' => 'jack',
                'idade' => 18
            ],
            [
                'id' => 60,
                'nome' => 'karen',
                'idade' => 20
            ],
            [
                'id' => 61,
                'nome' => 'leo',
                'idade' => 19
            ],
            [
                'id' => 62,
                'nome' => 'mia',
                'idade' => 23
            ],
            [
                'id' => 63,
                'nome' => 'noah',
                'idade' => 25
            ],
            [
                'id' => 64,
                'nome' => 'oliver',
                'idade' => 21
            ],
            [
                'id' => 65,
                'nome' => 'piper',
                'idade' => 22
            ],
            [
                'id' => 66,
                'nome' => 'quentin',
                'idade' => 18
            ],
            [
                'id' => 67,
                'nome' => 'ruby',
                'idade' => 20
            ],
            [
                'id' => 68,
                'nome' => 'sam',
                'idade' => 19
            ],
            [
                'id' => 69,
                'nome' => 'tess',
                'idade' => 23
            ],
            [
                'id' => 70,
                'nome' => 'ulysses',
                'idade' => 24
            ],
            [
                'id' => 71,
                'nome' => 'vera',
                'idade' => 22
            ],
            [
                'id' => 72,
                'nome' => 'will',
                'idade' => 20
            ],
            [
                'id' => 73,
                'nome' => 'xander',
                'idade' => 21
            ],
            [
                'id' => 74,
                'nome' => 'yasmin',
                'idade' => 22
            ],
            [
                'id' => 75,
                'nome' => 'zane',
                'idade' => 18
            ],
            [
                'id' => 76,
                'nome' => 'abby',
                'idade' => 20
            ],
            [
                'id' => 77,
                'nome' => 'ben',
                'idade' => 19
            ],
            [
                'id' => 78,
                'nome' => 'cara',
                'idade' => 23
            ],
            [
                'id' => 79,
                'nome' => 'dean',
                'idade' => 25
            ],
            [
                'id' => 80,
                'nome' => 'ella',
                'idade' => 21
            ],
            [
                'id' => 81,
                'nome' => 'finn',
                'idade' => 22
            ],
            [
                'id' => 82,
                'nome' => 'gina',
                'idade' => 18
            ],
            [
                'id' => 83,
                'nome' => 'hugo',
                'idade' => 20
            ],
            [
                'id' => 84,
                'nome' => 'iris',
                'idade' => 19
            ],
            [
                'id' => 85,
                'nome' => 'jake',
                'idade' => 23
            ],
            [
                'id' => 86,
                'nome' => 'kelly',
                'idade' => 24
            ],
            [
                'id' => 87,
                'nome' => 'luke',
                'idade' => 22
            ],
            [
                'id' => 88,
                'nome' => 'molly',
                'idade' => 20
            ],
            [
                'id' => 89,
                'nome' => 'nate',
                'idade' => 21
            ],
            [
                'id' => 90,
                'nome' => 'opal',
                'idade' => 22
            ],
            [
                'id' => 91,
                'nome' => 'paul',
                'idade' => 18
            ],
            [
                'id' => 92,
                'nome' => 'quinn',
                'idade' => 20
            ],
            [
                'id' => 93,
                'nome' => 'rose',
                'idade' => 19
            ],
            [
                'id' => 94,
                'nome' => 'seth',
                'idade' => 23
            ],
            [
                'id' => 95,
                'nome' => 'tori',
                'idade' => 25
            ],
            [
                'id' => 96,
                'nome' => 'ulysses',
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
 
        <?php 
            foreach ($array['alunos'] as $key => $value) {
                echo "<tr>";
                    foreach ($value as $key2 => $value2) {
                        echo "<td>" . $value2 . "</td>";
                    }
                echo "</tr>";
            }
        ?>  
    </table>    
</body>
</html>