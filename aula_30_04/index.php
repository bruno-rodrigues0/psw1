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

    $array2[6] = 20;
    
    foreach($array as $item){

        $r = random_int(0, 255);
        $g = random_int(0, 255);
        $b = random_int(0, 255);
        
        echo "<p style=\"background-color: rgb($r, $g, $b)\"> $item </p>";
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
    
    <script src="index.js"></script>
</body>
</html>