<?php

function desconto($valor, $desconto){
    return $valor*(1-($desconto/100));
}

?>