<?php

//  Peça 10 números ao usuário e exiba apenas os valores únicos (sem repetição).

$v = [2, 2, 2, 3, 4, 4, 4, 6, 8, 1, 2];
$count = array_count_values($v);
print_r($count);
$unicos = [];

for ($i=0; $i < count($v); $i++){
    if ($count[$v[$i]] === 1){
        $unicos[] = $v[$i];
    }
}

print_r($unicos);

?>