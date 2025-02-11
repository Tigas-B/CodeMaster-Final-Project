<?php

function todosCarousel(){
    $resultado = selectSQL("SELECT * FROM carousel");
    return $resultado;
}

function carouselEspecificoID($id){
    $resultado = selectSQLUnico("SELECT * FROM carousel WHERE id=$id");
    return $resultado;
}

?>