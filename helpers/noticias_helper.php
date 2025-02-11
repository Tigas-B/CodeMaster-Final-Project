<?php
function todasNoticias(){
    $resultado = selectSQL("SELECT * FROM noticias");
    return $resultado;
}

$total_por_pagina_noticias= 6;

function totalNoticias(){
    $resultado = selectSQLUnico("SELECT Count(*) as total FROM noticias");
    return $resultado["total"];
}

function totalPaginasNoticias(){
    global $total_por_pagina_noticias;
    $resultado = ceil(totalNoticias() / $total_por_pagina_noticias);
    return $resultado;
}

function noticiasPagina($pagina){
    global $total_por_pagina_noticias;
    $inicio = $total_por_pagina_noticias * ($pagina-1);
    $resultado = selectSQL("SELECT * FROM noticias ORDER BY id DESC LIMIT $total_por_pagina_noticias OFFSET $inicio");
    return $resultado; 
}

?>