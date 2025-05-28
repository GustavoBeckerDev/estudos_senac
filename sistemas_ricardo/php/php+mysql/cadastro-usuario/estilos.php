<?php

function cor($texto, $cor) {
    $cores = [
        'vermelho' => "\033[31m",
        'verde' => "\033[32m",
        'amarelo' => "\033[33m",
        'azul' => "\033[34m",
        'magenta' => "\033[35m",
        'ciano' => "\033[36m",
        'branco' => "\033[37m",
        'reset' => "\033[0m"
    ];
    return $cores[$cor] . $texto . $cores['reset'];
}

function negrito($texto) {
    return "\033[1m" . $texto . "\033[0m";
}

function limparTela() {
    system('cls');
}

function titulo($texto) {
    $largura = 60;
    echo "\n";
    echo cor("╔" . str_repeat("═", $largura - 2) . "╗", 'ciano') . "\n";
    echo cor("║", 'ciano') . negrito(centralizarTexto($texto, $largura - 2)) . cor(" ║", 'ciano') . "\n";
    echo cor("╚" . str_repeat("═", $largura - 2) . "╝", 'ciano') . "\n\n";
}

function centralizarTexto($texto, $largura) {
    $espacos = ($largura - strlen($texto)) / 2;
    return str_repeat(" ", floor($espacos)) . $texto . str_repeat(" ", ceil($espacos));
}

?>