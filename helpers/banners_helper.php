<?php

function banner($nome_pagina){
    $resultado = selectSQLUnico("SELECT imagem FROM banners WHERE nome_pagina='$nome_pagina'");
    return $resultado;
}

function bannerID($id){
   $resultado = selectSQLUnico("SELECT * FROM banners WHERE id=$id");
   return $resultado;
}

function todosBanners(){
    $resultado = selectSQL("SELECT * FROM banners");
    return $resultado;    
}

?>