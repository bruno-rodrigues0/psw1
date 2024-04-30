<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $array = array(1, 2, 3, 4);
    $array1 = array('fabio' => 30, 'eber' => 40, 'woquiton' => 60);
    $array2 = array(0 => 5, 6 => 8, 9 => 15);
        
    while ($item = current($array1)) {

        echo key($array1), "\n";

        next($array1);
    }
    
    foreach($array as $item){
        echo $item . '<br>';
    }

    echo '<br>';
    
    foreach($array1 as $item){
        echo $item . '<br>';
    }

    echo '<br>';

    foreach($array2 as $item){
        echo $item . '<br>';
    }

?>
    
</body>
</html>