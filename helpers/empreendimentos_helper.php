<?php

function todosEmpreendimentos(){
    $resultado = selectSQL("SELECT * FROM empreendimentos");
    return $resultado;
}

function empreendimentoEspecificoID($id){
    $resultado = selectSQLUnico("SELECT * FROM empreendimentos WHERE id=$id");
    return $resultado;
}
?>