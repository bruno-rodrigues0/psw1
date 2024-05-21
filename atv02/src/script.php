<?php 

function aprovados ($array) {
    foreach ($array['alunos'] as $aluno) {
        echo "<tr>";
        foreach ($aluno as $key => $value) {
            if($aluno['nota'] > 3){
                echo "<td>" . $value . "</td>";
            }
        };
        echo "</tr>";
    }
}



