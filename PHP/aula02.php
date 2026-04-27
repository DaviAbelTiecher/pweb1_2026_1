<?php

    $pessoas = [
        ["nome" =>"Davi", "idade" => 18],
        ["nome" =>"Vicenzo Scalvi", "idade" => 17],
        ["nome" =>"Kadson", "idade" => 18],
    ];

    foreach ($pessoas as $key => $item){
        $nome = $item ['nome'];
        $idade = $item ['idade'];
        echo "Indice: $key Nome:$nome Idade:$idade <br>";
    };