<?php

$vip = readline("Você está na lista vip? [S/N]");
$vip = substr($vip, 0, 1);

if (strtoupper($vip) != 'Smi'){
    echo "Você não está na lista vip.";
}
else {
    echo "Você está na lista vip.";
}

?>