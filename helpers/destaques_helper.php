<?php

$total_por_pagina= 6;

function todosDestaquesHome(){
    $resultado = selectSQL("SELECT * FROM destaques WHERE esta_na_home=1");
    return $resultado;
}

function destaqueEspecificoID($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id=$id");
    return $resultado;
}

function todosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

function totalDestaques(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM destaques");
    return $resultado["total"];
}

function totalPaginasDestaques(){
    global $total_por_pagina;
    $resultado = ceil(totalDestaques() / $total_por_pagina);
    return $resultado;
}

function destaquesPagina($pagina){
    global $total_por_pagina;
    $inicio = $total_por_pagina * ($pagina -1);
    $resultado = selectSQL("SELECT * FROM destaques LIMIT $total_por_pagina OFFSET $inicio");
    return $resultado; 
}
?>