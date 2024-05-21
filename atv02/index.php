<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./globals.css">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once(__DIR__ . "\\src\\script.php");

        $array = [
            "alunos"=> [
                [
                    "nome"=> "Bruno",
                    "nota"=> 9
                ],
                [
                    "nome"=> "Gabriel",
                    "nota"=> 10
                ],
                [
                    "nome"=> "Maria Fernanda",
                    "nota"=> 9
                ],
                [
                    "nome"=> "Robério Róbson",
                    "nota"=> 1
                ],
                [
                    "nome"=> "Guilerme",
                    "nota"=> 5
                ],
                [
                    "nome"=> "Duarda",
                    "nota"=> 3
                ],
            ]
        ];
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Nota</th>
        </tr>

        <?= aprovados($array)?>

    </table>
</body>
</html>