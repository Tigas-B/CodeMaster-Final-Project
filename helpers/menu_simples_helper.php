<?php

function menuSimplesNome($nome_pagina){
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE nome_pagina='$nome_pagina'");
    return $resultado;
}
function menuSimples(){
    $resultado = selectSQL("SELECT * FROM menu_simples");
    return $resultado;
}
?>