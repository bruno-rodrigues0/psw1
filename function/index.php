<?php 

function sumul($a,$b,$c){return ($a+$b)*$c;}

function sub (float $a, float $b): float {
    return $a - $b;
}

function mul (float $a, float $b): float {
    return $a * $b;
}

function div (float $a, float $b): float { 
    return $a / $b;
}

function mod (float $a, float $b): float {
    return $a % $b;
}

function power (float $a, float $b): float {
    return $a / pow($b, $a);
}

function powmod (float $a, float $b): float {
    return $a / pow($b, $a);
}

function sqroot (float $a, float $b): float {
    return $a / sqrt($b);
}

echo sumul(4, 6, 6);

echo strlen('function sumul($a,$b,$c){return ($a+$b)*$c;}');