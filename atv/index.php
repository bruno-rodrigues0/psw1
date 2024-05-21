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
        ]
    ]
];

print_r( $array['alunos'][0]);
print_r( $array['alunos'][1]);
print_r( $array['alunos'][2]);
echo "\n";
print ( $array['alunos'][2]['nome']);

$keys = [
  array_keys( $array['alunos'][0] ),
  array_keys( $array['alunos'][1] ),
  array_keys( $array['alunos'][2] ),
];


for($i = 0; $i < count($keys); $i++) {
    for($j = 0; $j < count($keys[$i]); $j++){
        print ($array['alunos'][$i][$keys[$i][$j]]);
        echo "\n";
    }
}
