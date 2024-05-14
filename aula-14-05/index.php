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
    <h2>Exemplo 01</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 

        $a1 = array('antonio', 'luiz', 'josé', 'joao');
        
        echo "<p>" . $a1[0] . "</p>";
        echo "<p>" . $a1[1] . "</p>";
        echo "<p>" . $a1[2] . "</p>";
        echo "<p>" . $a1[3] . "</p>";

        ?>
    </pre>

    <h2>Exemplo 02</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 
        $a2 = array(10, 9, 8, 7);
        for ($i = 0; $i < sizeof($a2); $i++) {
            echo "<p>" . $a2[$i] . "</p>";
        }
        ?>
    </pre>

    <h2>Exemplo 03</h2>

    <pre>
        <p>Powershell 7.4.2</p>
        <?php 
        $a3 = array(10, 9, 8, 7);
        foreach ($a3 as $item){
            echo "<p>" . $item . "</p>";
        }
        ?>
    </pre>
</body>
</html>