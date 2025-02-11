<?php

function contactos(){
    $resultado = selectSQLUnico("SELECT * FROM contactos");
    return $resultado;
}
function todosContactos(){
    $resultado = selectSQL("SELECT * FROM contactos");
    return $resultado;
}

?>